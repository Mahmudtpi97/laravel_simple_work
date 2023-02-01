<?php

// use App\Models\User;

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\auth\registerRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class registerController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(registerRequest $request)
    {
        // return $request->all();
        $getData              =$request->only(['name','email','phone','address']);
        $getPassword          = $request->get('password');
        $getData['password']  = Hash::make($getPassword);


        $imageName            =time().'_'.$request->file('image')->getClientOriginalName();
        $imgPath              = $request->file('image')->storeAs('images',$imageName,'public');
        $getData["image"]     = '/storage/'.$imgPath;


   // {
        // $requestData = $request->all();

        // $fileName = time().$request->file('photo')->getClientOriginalName();
        // $path = $request->file('photo')->storeAs('images', $fileName, 'public');

        // $requestData["photo"] = '/storage/'.$path;
        // Employee::create($requestData);
        // return redirect('employee')->with('flash_message', 'Employee Addedd!');
    // }


        // $fullData = $data+$password+$image;


        User::create($getData);
        return redirect()->to('users')->with('success','User Create Successfully!');

    }

    public function show()
    {
        $users = User::all();
        var_dump( $users);
        $a= $users[0]->image;
        echo '</br>'.$users[0]->name;
        echo "<img src='$a'>";
    }


}
