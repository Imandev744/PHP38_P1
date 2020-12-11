<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    public function run()
    {
        $tags=Tag::all();
        $categories=Category::all();
        Post::factory(2000)->create()
            ->each(function($post)use ($tags,$categories){
           $post->tags()->attach($tags->random(rand(3,10)));
           $post->categories()->attach($categories->random(rand(1,3)));
           Image::factory()->create(['imageable_type'=>Post::class,'imageable_id'=>$post->id]);

        });
    }
}
