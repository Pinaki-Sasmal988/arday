<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\UserApplication;
use App\Models\Cap;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function myApplication(){

        return view('student.myApplications');
    }
    public function commonApplication(){

          //$user_id=auth()->user()->id;
        //return Cap::find("64");
        $user_id=64;
        $data=DB::table('users')->join('common_application', 'users.id', '=', 'common_application.user_id')
      ->where('users.id', '=', $user_id)->select('*')->get();
        return view('student.commonApplication',["data"=>$data]);
    }

    public function collageApplication(){
        //$user_id=auth()->user()->id;
        $user_id=64;
        $data=DB::table('users')->join('user_applications', 'users.id', '=', 'user_applications.user_id')
      ->where('users.id', '=', $user_id)->select('*')->get();

        return view('student.collageApplication',["data"=>$data]);
    }


    public function changePassword(){
        return view('student.changePassword');
    }


    public function updateProfile(){
        return view('student.updateProfile');
    }
    public function contactSupport(){
        return view('student.contactSupport');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
    public function updatePassword(Request $req ){
        $user_id=auth()->user()->id;
        $data =User::find($user_id);
         $data->password=Hash::make($req->password);
         $data->save();
         return view('student.changePassword')->with('confirmationMessage','Password Succefully Changess!');
        
    }
    public function updateInformation(Request $req){
            $user_id=auth()->user()->id;
            $data =User::find($user_id);
             $data->name=$req->name;
             $data->email=$req->email;
             $data->mobile=$req->mobile;
             $data->course=$req->corse;
             $data->state=$req->state;
                  $image=$req->photo;
                  if($image==null){
                    $image=auth()->user()->photo;
                    $data->photo=$image;
                  }else{
                    $name=$image->getClientOriginalName();
                    $image->storeAs('public/images',$name);
                    $data->photo=$name;
                  }
                  
            $data->save();
            return view('student.updateProfile');

            
    }
}
