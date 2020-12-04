<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
   private $table="images";
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
           $this->string('title');
            $this->string('alt');
            $this->string('path');
            $this->morphs('imagebale');
        });
    }


    public function down()
    {
        Schema::dropIfExists('images');
    }
}
