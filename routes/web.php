<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::prefix('')-> namespace ('App\\Http\\Controllers\\Api')-> group (function(){

        Route::post('login','LoginUserController@loginUser');
        Route::post('registration','LoginUserController@registrationUser');


        Route::get('login-google',[LoginUserController::class,'loginGoogle']);
        Route::get('CusGG/callback',[LoginUserController::class,'callback_GG']);

    });
    });

    Route::get('login_view', function (){
        return view('login');
    });
    Route::get('home',function(){
        return view('welcome');
    });
    Route::get('registration_view', function (){
        return view('registration');
    });

