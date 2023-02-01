<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function file(){
        return view('filesUpload');
    }
    public function fileUpload(Request $request){
       $result = $request->file('fileImg')->store('images');
       return $result;
    }


}
