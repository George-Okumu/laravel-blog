<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //

    public function __construct()
    {
        return $this->middleware('guest');
    }

    public function create(){
        return view("auth/login");
    }

    public function store(Request $request)
    {
        // authenticate user here

        if(!auth()->attempt([$request])){
            return back();
        }

        // sign them in


        // redirect home page

    }

    //logout user

    public function destroy(){
        auth()->logout();

        return redirect('/');
    }
    
}
