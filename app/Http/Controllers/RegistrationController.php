<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    //

    public function __construct()
    {
        return $this->middleware('guest');
    }

    public function create()
    {
        return view("auth/register");
    }

    public function store(Request $request)
    {
        // dd($request);

        // validate form
        $validated = $request->validate([
            "name"=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|confirmed'
        ]);

        // create and save the user
        $user = User::create($validated);

        //sign them in

        auth()->login($user);

        //redirect them

        return redirect('/home');
    }
}
