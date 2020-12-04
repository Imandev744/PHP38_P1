<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class Category extends Model
{
    use HasFactory;


    //mutators
    public function setSlugAttribute($value){
        return $this->attributes['slug']=Str::slug($this->attributes['title']);
    }



    //relations

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
