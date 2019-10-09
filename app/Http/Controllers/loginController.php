<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function create(){
        return view('Log_in');
    }





    public function postlogin(Request $request){
        //buat test form
        // dd('Login ok');

        // dd(\Auth::attempt(['email' => $request->email, 'password' => $request->password]));
       if ((!auth()->attempt(['email' => $request->email, 'password' => $request->password]))) {
           return redirect()->back();
       }
       return redirect()->route('t1');
    }

    public function logout(){
        auth()->logout();

        return redirect()->route('hom');
    }
    public function itulah(){
        return view('/extension/t1');
    }
    public function testing(){
        return view('/extension/sidebar');
    }
    public function ss(){
        return view('/extension/post_form');
    }
    public function read(){
        return view('/viewer/read');
    }

}
