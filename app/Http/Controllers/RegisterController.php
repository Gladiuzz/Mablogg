<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('Registrasi');
    }

    public function postregister(Request $request){
        //buat check form register
        // dd('registration ok');

        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:5|confirmed',

        ]);
        $user = new \App\BuatUser;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $status = $user->save();
        return redirect('Log_in');
    }
}
