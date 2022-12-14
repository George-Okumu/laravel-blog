<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    // this prevents user from accessing login page when is logged in
     public function __construct()
    {
        # except destroy means, if you are signed in, you can access destroy method
        return $this->middleware('guest')->except('destroy');
    }

    public function create(){
        return view("auth/login");
    }

    public function store()
    {
        // authenticate user here

        if(!auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
                'message'=>'Please input a valid email or password.'
            ]);
        }

        // sign them in


        // redirect home page

    }

    //logout user

    public function destroy(){
        auth()->logout();

        return redirect('/home');
    }
    
}
