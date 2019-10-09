<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('users')->rightjoin('posts', 'users.id', '=', 'posts.author')->paginate(10);
        return view('/extension/t1', ['posts' => $posts]);
    }

    public function getPostForm() {
        return view('post/post_form');
    }

    public function createPost(Request $request){
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(300, 300)->save('css/img/'.$filename);
        }
        $post = Post::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'author' => Auth::user()->id,
            'file' => $filename
        ));

        $post->save();
        return redirect()->route('t1')->with('success', 'Post has been successfully added!');
    }

    public function getPost($id){
        $post = Post::find($id);
        return view('extension.edit', ['post' => $post]);
    }

    public function editPost($id) {
        $post = Post::find($id);
        return view('/extension/edit', ['post' => $post]);
    }

    public function updatePost(Request $request, $id) {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('t1')->with('success', 'Post has been updated successfully!');
    }

    public function deletePost(Request $request,$id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('t1')->with('success', 'Post has been deleted successfully!');
    }
    public function search(Request $request){
        $posts = DB::table('users')->rightjoin('posts', 'users.id', '=', 'posts.author')->paginate(10);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->get();

        $data = array(
            'posts' => $posts,
            'archives' => $archives
        );

        $title = $request->get('title');
        $post = Post::where('title', 'like','%'.$title.'%')->get();
        return view('viewer/after')->with('posts', $posts);
    }

}
