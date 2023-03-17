<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->longText('description');
            $table->string('image_path');
            // $table->timestamp('last_used_at')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            // $table->string('category_option');
            $table->unsignedBigInteger('user_id')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();


            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Schema::table('posts', function($table) {
        //     $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');

    }
};
