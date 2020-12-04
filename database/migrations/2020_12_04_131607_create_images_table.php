<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    private $table = "images";


    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alt');
            $table->string('path');
            $table->morphs('imageable');
        });
    }


    public function down()
    {
        Schema::dropIfExists('images');
    }
}
