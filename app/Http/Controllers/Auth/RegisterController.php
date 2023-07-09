<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    function index()
    {
        return view('pages.auth.register');
    }

    function register(Request $request)
    {
        $validateUser = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:Users',
            'contact' => 'required',
            'password' => 'required',
        ]);

        //simpan databese
        $userData = new User;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->contact = $request->contact;
        $userData->password = bcrypt($request->password); //12345 ->askljuduy321
        $userData->save();

        return redirect()->to('/login')->with('success', 'Berhasil Register');
    }
}
