<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;


    public function definition()
    {
        return [
                'title'=>$this->faker->title,
                'content'=>$this->faker->sentence(rand(10,20)),
                'slug'=>' ',
                'author_id'=>rand(1,20)
        ];
    }
}
