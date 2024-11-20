<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Storage;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $fileds = $request->validate([
            'avatar' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:3072'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],

        ]);

        if ($request->hasFile('avatar')) {
            $fileds['avatar'] = Storage::disk('public')->put('avatars', $request->avatar);
        }

        $user = User::create($fileds);

        Auth::login($user);

        return redirect()->route('dashboard')->with('greet', 'welcome to laravel inertia app');

    }

    public function login(Request $request)
    {

        $feilds = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($feilds, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
