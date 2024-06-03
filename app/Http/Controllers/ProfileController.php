<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile', [
            'title' => 'Profile',
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'gender' => 'required|string|in:Laki-Laki,Perempuan',
            'email' => 'required|string|max:255|unique:users,email,'. Auth::id(),
            'phone' => 'required|string|max:255',
        ]);
        
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->back()->with('success', 'Profil Anda berhasil diubah.');
    }
}
