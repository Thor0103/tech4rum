<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Socialite;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class LoginUserController extends Controller
{
    public function loginUser(Request $request){
        $user1   = $request->username;
        $pass = $request ->pass;
        $result = User::where('username', $user1)->count() > 0 && User::where('password',  $pass)->count() > 0;
        if($result){
            return Redirect::to('/home');
        }else{
            return view('login');
        }

    }
    public function getUser(){

       $user = User::where("username","yen")->get();
       $user1 = User::where("username","khang")->get();
       return response()->json(['data'=>$user, 'data1'=>$user1],200);
    }


    public function loadHome(){

            return view('welcome');

    }

    public function loginGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function callback_GG(){

       $users = Socialite::driver('google')->stateless()->user();

       $authUser = $this -> findOrCreateUser($users,'google');

       if($authUser){
        return Redirect::to('/home#/forum');
       }else{
        return Redirect::to('/home#/forum');
       }
    }

    public function findOrCreateUser($users){

        $authUser = User::where('username', $users->id)->first();
        if($authUser)
        {
            return $authUser;
        }else{

            $user = new User();
            $user -> username = $users->id;
            $user -> password = $users->name;
            $user -> email = $users->email;
            $user -> phone = '';
            $user -> fullname = $users->name;
            $user->image = "https://ps.w.org/simple-user-avatar/assets/icon-256x256.png?rev=2413146";
            $user -> score = 0;
            $user ->save();
        }
     }
}
