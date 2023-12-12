<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatabaseLogin;

class LoginCtr extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'txtUname' => 'required',
            'txtPass' => 'required',
        ]);

        $username = $request->txtUname;
        $password = $request->txtPass;

        $user = DatabaseLogin::where('username', $username)
            ->where('password', $password)
            ->first();

        if ($user) {
            session(['username' => $user->username]);

            $request->session()->put('key', 'value', 1440);

            return redirect('/');
        } else {
            return back()->with('error', 'Lu kayaknya salah username or password');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'txtUname' => 'required|max:20',
            'txtEmail' => 'required',
            'txtPass' => 'required',
        ]);

        $username = $request->txtUname;

        $user = DatabaseLogin::where('username', $username)->first();

        if (!$user) {
            DatabaseLogin::create([
                'username' => $request->input('txtUname'),
                'email' => $request->input('txtEmail'),
                'password' => $request->input('txtPass'),
                'role' => 'user'
            ]);
            return redirect('/login')->with('success', 'Registrasi sukses! Mohon log in.');
        } else {
        return back()->with('error', 'Username sudah ada');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/login');
    }
}
