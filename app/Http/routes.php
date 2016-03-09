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
        'as' => 'auth.signup',
        'middleware' => ['guest'],
    ]);

    Route::post('/signup', [
        'uses' => 'AuthController@postSignup',
        'middleware' => ['guest'],
    ]);

    Route::get('/signin', [
        'uses' => 'AuthController@getSignin',
        'as' => 'auth.signin',
        'middleware' => ['guest'],
    ]);

    Route::post('/signin', [
        'uses' => 'AuthController@postSignin',
        'middleware' => ['guest'],
    ]);

    Route::get('/signout', [
        'uses' => 'AuthController@getSignout',
        'as' => 'auth.signout'
    ]);

    Route::get('/order', [
        'uses' => 'OrderController@getCreateOrder',
        'as' => 'order.create',
         'middleware' => ['auth'],
    ]);

    Route::post('/order', [
        'uses' => 'OrderController@postCreateOrder',
        'as' => 'order.create',
        'middleware' => ['auth'],
    ]);

    Route::post('/action', [
        'uses' => 'ActionController@postAddAction',
        'as' => 'action.add',
        'middleware' => ['auth'],
    ]);





});



