<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class Image extends Model
{
    use HasFactory;



    //mutators
    public function setSAltAttribute($value){
        return $this->attributes['alt']=$value ?? $this->attributes['title'];
    }

    //relations

    public function imageable()
    {
        return $this->morphTo();
     }

}
