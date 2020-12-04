<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\Util\Str;

class Post extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=[];


    //mutators
    public function setSlugAttribute($value){
        return $this->attributes['slug']=Str::slug($this->attributes['title']);
    }

    //relations

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }




}
