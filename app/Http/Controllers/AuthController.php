<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }


public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/moves'); // المسار الذي تريده بعد تسجيل الدخول
        }

        return back()->withErrors([
            'email' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة.',
        ]);
    }

public function showsingupform(){
    return view('auth.register');
}




function register(Request $request)
    {

        $credentials = $request->only('email', 'password');

        $request->validate([
            'email' => 'required|email',
            'password' => '
            ',
        ]);
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]
        );
        return redirect()->route('login');
    }
public function logout(){
Auth::logout();
return redirect() -> route('login');
}
}
