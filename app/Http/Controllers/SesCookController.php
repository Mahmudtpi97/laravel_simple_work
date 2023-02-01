<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesCookController extends Controller
{
    // Session Add
    public function sessionPut(Request $request){
      $result = $request->session()->put('nameKey', 'Mahmudul Hasan');
      return "Session Add";
    }
    // Session Get
    public function sessionGet(Request $request){
       $result = $request->session()->get('nameKey');
      if ($result == true) {
        return $result;
      }
      else{
        return "Session Destroy";
      }

    }

    // Session Forget Specific Key
    public function sessionForget(Request $request){
      $result = $request->session()->forget('nameKey');
      return "Session Forget Specific Key";
    }
    // All Session Forget
    public function sessionFlush(Request $request){
        $result = $request->session()->flush();
        return "All Session Forget ";
      }
}
