<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() { 
        $posts=Post::all();
        return view('posts', compact('posts'));       

        
    }

    public function create() {
        // $postArr=[
        //     [
        //        'title' => 'title for add',
        //        'content' => 'content for add',
        //        'image' => 'image for add',
        //        'likes' => 20,
        //        'is_published' => 1,
        //     ],
        //     // [
        //     //     'title' => 'another title for add',
        //     //     'content' => 'another content for add',
        //     //     'image' => 'another image for add',
        //     //     'likes' => 30,
        //     //     'is_published' => 1,
        //     //  ],
        //     ];

            Post::create([
                'title' => '3another title for add',
                'content' => '3another content for add',
                'image' => '3another image for add',
                'likes' => 50,
                'is_published' => 1,
            ]);
    }

    public function update() {
        $post=POST::find(4);
        
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 40,
            'is_published' => 0,
        ]);

    }

    public function delete() {
        $post=POST::find(3);
        $post->delete();
        dd('deleted');

    }
}
