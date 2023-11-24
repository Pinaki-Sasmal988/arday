<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function googleLogin(){
        return Socialite::driver('google')->redirect();
     }


     public function googleControl(){
        $user= Socialite::driver('google')->user();
        try{
        $user=Socialite::driver('google')->user();
        $findUser=User::where('email',$user->email)->first();
        if(!$findUser){

      $findUser=new User();
      $findUser->name=$user->name;
      $findUser->email=$user->email;
      $findUser->state="Bari";
      $number=rand(1000000000,9999999999);
      $findUser->mobile=$number;
      $password ="User@1234";
      $findUser->password=Hash::make($password);
      Mail::to($user->email)->send(new UserDetails($user->email));
      $findUser->save();
       }
       //session()->put('name',$findUser->name);
       return redirect('/login');

       } catch(Exception $e) 
       {
       dd($e->getMessage());
      }


} 

//Facebook Login

public function facebookLogin(){
    return Socialite::driver('facebook')->redirect();
}
public function facebookControl(){
    $user= Socialite::driver('facebook')->user();
    try{
    $user=Socialite::driver('facebook')->user();
    $findUser=User::where('email',$user->email)->first();
    if(!$findUser){

  $findUser=new User();
  $findUser->name=$user->name;
  $findUser->email=$user->email;
  $findUser->state="Not Available";
  $number=rand(1000000000,9999999999);
  $findUser->mobile=$number;
  $password ="User@1234";
  $findUser->password=Hash::make($password);
  Mail::to($user->email)->send(new UserDetails($user->email));
  $findUser->save();
   }
   //session()->put('name',$findUser->name);
   return redirect('/login');

   } catch(Exception $e) 
   {
   dd($e->getMessage());
  }   
}





    public function index()
    {   
        $popular_colleges=College::where('slider',1)->get();
        return view('index',compact('popular_colleges'));
    }
}
