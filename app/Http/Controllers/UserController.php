<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // show register form
    public function register() {
        return view('/users/register');
    }

    public function store(Request $request) {
        $form = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        // hash password
        $form['password'] = bcrypt($form['password']);

        // create user
        $user = User::create($form);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    public function login() {
        return view('/users/login');
    }

    public function authenticate(Request $request) {
        $form = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($form)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are logged in');
        }

        return back()->withErrors(['email'=>'invalid credentials'])->onlyInput('email');
    }
}
