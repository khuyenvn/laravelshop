<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('registration.index');
    }

    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | same:password_confirm',
            'password_confirm' => 'required '
        ]);
        //Save data

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        //Sign in
        auth()->login($user);

        //Redirect
        return redirect('/user/profile');
    }
}
