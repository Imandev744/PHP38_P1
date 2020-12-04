<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $guarded=[];



    //mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(Str::random(7) . '-' .  $this->attributes['title']);
    }


    //relations
    public function post()
    {
        return $this->belongsToMany(Post::class);
    }





}
