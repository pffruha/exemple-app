<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() { 
        $posts=Post::all();
        return view('post.index', compact('posts'));       

        
    }

    public function create() {
        return view('post.create');
    }

    public function store() {
        $data=request()->all();
        
        Post::create($data);

        return redirect()->route('post.index');
    }

    public function show(POST $post) {
        // $post=POST::findOrfail($id);
        return view('post.show', compact('post'));
    }

    public function edit(POST $post) {
        // $post=POST::findOrfail($id);
        // return view('post.show', compact('post'));
        return view('post.edit', compact('post'));
    }

    public function update(POST $post) {
        // $post=POST::findOrfail($id);
        // return view('post.show', compact('post'));

        // return view('post.update', compact('post'));
        $data=request()->all();
        // $data=request()->validate([
        //     'title' => 'string',
        //     'content' => 'string',
        //     'image' => 'string'
        // ]);
        $post->update($data);
        return redirect()->route('post.index');
    }



    public function delete() {
        $post=POST::find(3);
        $post->delete();
        dd('deleted');

    }
}
