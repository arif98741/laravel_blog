<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->withPosts($posts);
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
        // Validate Data
        $this->validate($request,array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        // store Data
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        Session::flash('success','Blog has been successfully posted');

        return redirect()->route('posts.show',$post->id);

        
    }

   
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
