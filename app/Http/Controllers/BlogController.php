<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function indexBlog(){
        $posts = Post::get();
        return view('blogView', ['posts' => $posts]);
    }

    public function showPost($id){
        $post = Post::find($id);
        return view('post', ['post' => $post]);
    }
}
