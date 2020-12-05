<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::with('tags','categories','image','author')->get();





//        dd($posts[0]->tags);



        return view('post.list')->withPosts($posts);
    }
}
