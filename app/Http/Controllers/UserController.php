<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register page 
    public function register(){
        return view('user.register');
    }

    // Store User 
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

            $formFields['password'] = bcrypt($formFields['password']);
          
            $user =  User::create($formFields);

    //  Login User 
            auth()->login($user);

            return redirect('/recipe')->with('Success', 'User Created & Logged in!');
    }

    // Logout User
    public function logout(Request $request){
            auth()->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/recipe')->with('Success', 'You have been Logged out!');
    }

    // show Login page
    public function login(){
        return view('user.login');
    }

    // User Login
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/recipe')->with('Success', 'You have been Logged in!'); 
        }

        return back()->withErrors(['email' => 'invalid Credentials!'])->onlyInput('email');
    }
}
