<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'phone' => 'required|max:12',
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255'],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('status', 'Task was successful!');
        return redirect('/login')->with('success', 'Registrasi berhasil! Silahkan masuk');
    }
    // name, username, email, phone, password
}
