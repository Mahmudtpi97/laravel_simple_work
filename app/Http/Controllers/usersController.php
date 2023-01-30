<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class usersController extends Controller
{
    public function index()
    {
        $this->data['users']      = User::all();
        $this->data['mode']       = 'all_data';
        $this->data['headline']   = 'All Users List';

        return view('users.index',$this->data);    
    } 

    public function show($id)
    {
        $this->data['users']      = User::findOrFail($id);
        $this->data['mode']       = 'show';

        return view('users.show',$this->data);    
    }  

    public function edit($id)
    {
        $this->data['users']      = User::findOrFail($id);
        $this->data['mode']       = 'edit';
        $this->data['headline']   = 'Information Update';

        return view('users.form',$this->data);    
    }

    public function update(Request $request,$id)
    {
        $data=$request->all();

        $users             = User::find($id);
        $users->name       = $data['name'];
        $users->email      = $data['email'];
        $users->phone      = $data['phone'];
        $users->address    = $data['address'];
        // $user->image      = $data['image'];

        // $users->save();


       if ( $users->save() ) {
           Session::flash('success', 'User Updated Successfully');
       }
        return redirect()->to('users');

    }

    public function destroy($id){
        // if ( 
        User::find($id)->delete();
           // echo 'User Delete Successfully!';
       // }
       // else{
        return redirect('users')->with('success','User Delete Successfully!');
       // }
    }


}
