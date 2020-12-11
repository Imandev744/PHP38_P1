<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    protected $service;

    public function __construct(\PostService  $service)
    {
        $this->service = $service;
    }

    public function index(Request  $request)
    {
        $posts = Post::with('tags', 'categories','image', 'author')->get();

        $limit=$request->input('limit',50);
//        return json_encode($this->services->all($limit));


    }

    public function show(Request $request,$id)
    {

    }
}
