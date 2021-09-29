<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class SessionController extends Controller
{
    public function destroy(){
        Auth::logout();
        return redirect("/")->with("success","Good Bye");
    }
    public function create(){

        $user_credentials = request()->validate([
            "email"=>['required','email'],
            "password"=>["required"]
        ]);
        if(Auth::attempt($user_credentials)){
            return redirect("/")->with("Success", "Welcome Back");
        }

        return back()->withInput()->withErrors([
            "credentials" => "You entered invalid credentials Please Try again"
        ]);
    }
}
    