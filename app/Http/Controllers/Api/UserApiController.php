<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classifileds;
use App\Models\Topic;

class UserApiController extends Controller
{
    //
    public function getAllUser(){
        if(User::all()->count() >0){
            return response()->json(User::all(), 200);
        }
        else{
            return response()-> json('No data', 200);
        }
    }

    public function getUserById($id_user){
        if(User::find($id_user)){
            $customer = User::find($id_user);
            $rank = User::orderByDesc('score')->limit(10)->get();
            $classifiled = Classifileds::where("user_id",$id_user)->get();
            $topic = Topic::where("user_id",$id_user)->get();  
            return response()->json(['customer'=>$customer, 'rank'=>$rank, 'classifiled'=>$classifiled, 'topic'=>$topic], 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function updateUser($id_user, Request $request){
        $data = $request->all();
        if(User::find($id_user)){
            $user = User::find($id_user);
            $user -> fullname = $data['fullname'];
            $user -> username = $data['username'];
            $user -> password = $data['password'];
            $user -> image = $data['image'];
            $user -> email = $data['email'];
            $user -> phone = $data['phone'];
            $user -> score = $data['score'];
            $user -> updated_at = date('Y-m-d H:i:s');
            $user -> save();
            return response()-> json('Update success', 200);
        }else{
            return response()-> json('Update failed', 200);
        }
    }

    public function createUser(Request $request){

        $data = $request->all();
        if(User::where('username', $data['username'])->count() > 0 && User::where('email', $data['email'])->count() > 0){
            return response()->json('User already exist', 200);
        }
        else{
            $user = new User();
            $user->fullname = $data['fullname'];
            $user->username = $data['username'];
            $user->password = $data['password'];
            $user->image = "https://ps.w.org/simple-user-avatar/assets/icon-256x256.png?rev=2413146";
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->score = 0;
            $user->created_at = date('Y-m-d H:i:s');
            $user->updated_at = date('Y-m-d H:i:s');
            $user->save();
            return response()->json(['data'=>true], 200);
        }
        return response()->json('Create failed', 200);
    }

    public function deleteUser($id_user){
        if(User::find($id_user)){
            User::find($id_user)->delete();
            return response()->json('Delete success', 200);
        }
        else{
            return response()->json('Delete failed', 200);
        }
    }

    public function login (Request $request){
        $data = $request->all();
        if(User::where('username', $data['username'])->count() > 0 && User::where('password', $data['password'])->count() > 0){

           $userId = User::where('username', $data['username'])->first()->user_id;
           $userName = User::where('username', $data['username'])->first()->fullname;
           $userImage = User::where('username', $data['username'])->first()->image;
           $userScore = User::where('username', $data['username'])->first()->score;
            return response()->json(['dataId'=> $userId,'dataName'=>$userName, 'dataImage'=>$userImage, 'dataScore'=>$userScore], 200);
        }
        else{
            return response()->json('Login failed', 200);
        }
    }
}
