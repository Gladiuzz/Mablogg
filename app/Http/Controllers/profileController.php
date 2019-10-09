<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class profileController extends Controller
{
    public function profile(){
        return view('/extension/profile', array('users' => \Auth::user()));
    }
    public function editPost($id) {
        $user = User::find($id);
        return view('profile.edit', ['users' => $user]);
    }

    public function update_avatar(Request $request){
        //  $this->validate($request, [
        //     'name' => 'required|min:3',
        //     'email' => 'required|email',
        //     'password' => 'required|min:5',
        // ]);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('css/img/' . $filename) );

            // $user = new \App\BuatUser;
            $user = \Auth::user();
            // $user->name = $request->name;
            // $user->email = $request->email;
            // $user->password = bcrypt($request->password);
            $user->avatar = $filename;
            $user->save();
        }
        return view ('/extension/profile', array('users' => \Auth::user() ));

    }
}
