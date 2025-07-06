<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show() {
        return view('register');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'gender' => 'required|in:Male,Female',
            'password' => 'required|confirmed|min:6',
        ]);

        $email = strtolower($request->email);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'User',
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
