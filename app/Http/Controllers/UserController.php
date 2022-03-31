<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return  User::orderBy('score', 'DESC')->paginate(8);
    }
    public function userCount(){
        return  DB::table('user')->count();
    }
    public function newUser(){
        return  User::orderBy('user_id', 'DESC')->first();
    }
}
