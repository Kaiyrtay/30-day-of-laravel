<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisteredUserController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        $validated_attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed']//Password::min(8)->letters()->numbers(), 'confirmed'] //email confirmation
        ]);
        //create a new user
        $user = User::create($validated_attributes);
        //login
        Auth::login($user);
        //redirect
        return redirect('/jobs');
    }
}
