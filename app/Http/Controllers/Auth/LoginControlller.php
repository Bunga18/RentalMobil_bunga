<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControlller extends Controller
{
   function index()
   {
    return view('pages.auth.login');
   } 

   function login(Request $request)
   {
    $input = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if(Auth::attempt($input)) {
        return redirect()->to('/merk');
    } else {
        return redirect()->back();
    }
   }

   function logout(Request $request)
   {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->to('/login');
   }
}
