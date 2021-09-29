<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return  view('auth.register');
    }

    public function store()
    {
        //validate details
        $user_details =  request()->validate([
           'username' => [
               'required',
               'min:4',
               'max:255',
            'unique:users,username'
        ],
           'fullname' => [
               'required',
               'min:4',
                'max:255'
            ],
           'email' => [
            'required',
            'email',
            'unique:users,email'
        ],
        'password' => [
            'required',
            'min:6',
            'max:72'
        ]
        ]);
        //if it gets to this point - all validations are correct

        $user_details['password'] = bcrypt($user_details['password']);

        // ddd($user_details);
        //create a user
     $user =  User::create($user_details);

    //  auth()->login($user);
    Auth::login($user);
        return  redirect("/")->with('Success', 'Sign up successfull');
    }


    public function login()
    {
        return view('auth.login');
    }
}
