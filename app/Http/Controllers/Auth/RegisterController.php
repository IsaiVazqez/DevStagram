<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:6',
            'username' => 'required|min:6|unique:users|min:3|max:20',
            'email' => 'required|email|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6|max:20',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password),
        ]);
    }
}
