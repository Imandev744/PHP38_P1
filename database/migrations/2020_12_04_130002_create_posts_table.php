<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    private $table = "posts";

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('slug');
            $table->foreignId('author_id')
            ->refrence('id')
            ->on('users')
            ->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
