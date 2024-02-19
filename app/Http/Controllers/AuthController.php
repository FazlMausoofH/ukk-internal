<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credenial =  $request->only(['email','password']);
        
        if(Auth::attempt($credenial)){
            return redirect('menu');
        } else {
            return redirect('login')->with('error', 'Email dan Password Salah!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
