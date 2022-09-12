<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //

    public function create(){
        return view('register.create');
    }

    public function store(){

       $attributes = $this->validateNewUser();

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created');
    }

    protected function validateNewUser():array
    {
        return request()->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users','email')],
            'password' => ['required','string', 'max:255', 'min:8'],
        ]);
    }
}
