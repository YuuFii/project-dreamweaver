<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'confirm-password' => 'required|same:password'
        ]);
        $data = $request->except('confirm-password', 'password');
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect('/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         $user = Auth::user();
    //         User::where('id', $user->id)->update(['status' => 'Active now']);

    //         return redirect()->intended('users');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }

    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'fname' => 'required|string|max:255',
    //         'lname' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     $user = new User;
    //     $user->unique_id = rand(time(), 100000000);
    //     $user->fname = $request->fname;
    //     $user->lname = $request->lname;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);

    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $name = time().'.'.$image->getClientOriginalExtension();
    //         $image->move(public_path('images'), $name);
    //         $user->img = $name;
    //     }

    //     $user->status = 'Active now';
    //     $user->save();

    //     Auth::login($user);

    //     return redirect()->route('users');
    // }

    // public function logout(Request $request)
    // {
    //     $user = Auth::user();
    //     User::where('id', $user->id)->update(['status' => 'Offline now']);

    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect()->route('login');
    // }
}
