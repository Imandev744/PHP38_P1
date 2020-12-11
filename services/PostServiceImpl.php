<?php

namespace Services;


use App\Models\Post;

class PostServiceImpl implements PostService
{

    public function all($page,$limit=50)
    {
        return Post::paginate($limit);
    }

    public function show($id)
    {
       return Post::findOrFail($id);
    }
}
