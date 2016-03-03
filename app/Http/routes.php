<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //

    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::get('/signup', [
        'uses' => 'AuthController@getSignup',
        'as' => 'auth.signup'
    ]);

    Route::post('/signup', [
        'uses' => 'AuthController@postSignup'
    ]);

    Route::get('/alert', function(){
        return redirect()->route('home')->with('info', 'Вы вошли');
    });




});
