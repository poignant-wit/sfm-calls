<?php

namespace SFMCalls\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use SFMCalls\Http\Requests;
use SFMCalls\Models\User;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users|max:20',
            'password' => 'required|min:4'
        ]);
        User::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('home')->with('info', 'Вы создали аккаунт, вы можете войти');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only(['username', 'password']))) {
            return redirect()->back()->with('info-danger', 'Вы ввели неверные данные, попробуйте еще раз');
        } else {
            return redirect()->route('home')->with('info', 'Вы зашли как ' . Auth::user()->username);
        }
    }

    public function getSignout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
