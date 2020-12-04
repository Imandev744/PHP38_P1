<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    private $table = "categories";
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $this->string('title');
            $this->string('slug');
        });
    }


    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
