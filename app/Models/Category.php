<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{
    use HasFactory;

  public $timestamps=false;


  protected $guarded=[];


    //mutators
    public function setTitleAttribute($value){

        $this->attributes['title']=$value;
        return $this->attributes['slug']=Str::slug(Str::random(7)."-".$value);
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
