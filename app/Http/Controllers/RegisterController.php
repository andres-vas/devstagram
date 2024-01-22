<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request) 
    {
        // dd($request);

        $this->validate($request, [
            'name'=>'required|max:30',
            'email'=>'required|unique:users|max:60|email',
            'username' => 'required|unique:users|min:3|max:20',
            'password' => 'required|confirmed|min:4'
        ]);
        dd('Creando Usuario');
    }

}
