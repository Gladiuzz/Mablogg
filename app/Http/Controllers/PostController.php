<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getIndex() {
        $posts = DB::table('users')->rightjoin('posts', 'users.id', '=', 'posts.author')->paginate(3);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->get();

        $data = array(
            'posts' => $posts,
            'archives' => $archives
        );

        return view('welcome', $data);
    }

    public function getFullPost($post_id) {
        $post = DB::table('users')->rightjoin('posts', 'users.id', '=', 'posts.author')->where('posts.id', '=', $post_id)->first();
        $archives = DB::table('posts')->orderBy('id', 'DESC')->get();
        $data = array(
            'post' => $post,
            'archives' => $archives
        );
        return view('viewer/read', $data);
    }
    public function getadmin(){
        return view('/extension/t1', $data);
    }

}
