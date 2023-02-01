<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SesCookController extends Controller
{

    ////// Session Area /////

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



    //// Cookies Area ////

    // Cookies Add
    public function cookieAdd(Request $request){
        $result = Cookie::queue('nameKey','Mahmudul Hasan') ;
        return "Cookie Add";
      }
    // Cookies Get
    public function cookieGet(){
        $result = Cookie::get('nameKey');
    if ($result == true) {
        return $result;
    }
    else{
        return "Cookie Destroy";
    }
 }
  // Cookies Forget
  public function cookieForget(){
    $result = Cookie::queue(Cookie::forget('nameKey'));
    return "Cookie Forget";
  }


}
