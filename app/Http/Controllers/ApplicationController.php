<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\State;
use App\Models\UserApplication;
use App\Models\GuestApplication;
use App\Models\Cap;
use App\Mail\CapMail;
use App\Mail\CollegeRegistrationMail;
use Illuminate\Support\Facades\Mail;
class ApplicationController extends Controller
{
 public function save(Request $request){
    $validated = $request->validate([
        'name' => 'required|max:50',
        'email' => 'required|email',
        'phone' => 'required|max:10',
        'education_apply' => 'required|not_in:0',
        'state_apply' => 'required|not_in:0',
    ]);
    $email=$request->email;
        $data2 = ([
         'name' => $request->name,
         'email' => $request->email,
         'course'=> $request->education_apply,
         'college'=>$request->college_name,
         ]);
    if(Auth::check()){
        UserApplication::create([
            'user_id'=>auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'course' => $request->education_apply,
            'college'  => $request->college_name,
            'state'  => $request->state_apply,
            'type'=>'registered',
        ]);
        Mail::to($email)->send(new CollegeRegistrationMail($data2));
        return redirect()->back()->with('success', 'Your Application Form Has Been Submitted Successfully.');
    }
    else{
            GuestApplication::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'course' => $request->education_apply,
            'college'  => $request->college_name,
            'state'  => $request->state_apply,
            'type'=>'guest',
            ]);
    }
    Mail::to($email)->send(new CollegeRegistrationMail($data2));
    return redirect()->back()->with('success', 'Your Application Form Has Been Submitted Successfully.');
 }
 public function cap_show(){
    $states=State::select('id','state')->get();
    return view('cap',compact('states'));

 }
 public function cap_save(Request $request){
       $validated = $request->validate([
        'name' => 'required|max:50',
        'email' => 'required|email',
        'phone' => 'required|max:10',
        'education_apply' => 'required|not_in:0',
        'state_apply' => 'required|not_in:0',
    ]);
   $email=$request->email;
        $data2 = ([
         'name' => $request->name,
         'email' => $request->email,
         'course'=> $request->education_apply,
         'state' => $request->state_apply,
         ]);    
        if(Auth::check()){
        Cap::create([
            'user_id'=>auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'course' => $request->education_apply,
            'state'  => $request->state_apply,
            'type'=>'registered',
        ]);
        Mail::to($email)->send(new CapMail($data2));
        return redirect('/home');
    }
    else{
            Cap::create([
            'user_id'=>0,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'course' => $request->education_apply,
            'state'  => $request->state_apply,
            'type'=>'guest',
            ]);
    }
    Mail::to($email)->send(new CapMail($data2));
    return redirect('/home');   

 }
 public function myApplications()
 {  $user_id=Auth()->user()->id;
     $cap_apps=Cap::where('user_id',$user_id)->get();
     $college_applications=UserApplication::where('user_id',$user_id)->get();
     return view('/student.myApplications',compact('cap_apps','college_applications'));
 }
}
