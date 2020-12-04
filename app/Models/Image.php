<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Image extends Model
{
    use HasFactory;

    public $timestamps=false;


    //relations

    public function imageable()
    {
        return $this->morphTo();
     }

}
