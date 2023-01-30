<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\loginRequest;

class loginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    } 
    public function store(loginRequest $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)) {
            return redirect()->intended('users');
        }
        else{
            $loginFailMSG= "Invalid Email or Password !";
            return redirect()->route('login')->withErrors($loginFailMSG);
        }
        
    }

}
