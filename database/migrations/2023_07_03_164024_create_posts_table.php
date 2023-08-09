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
        $table->timestamps();
        $table->string('title_post')->nullable();
        $table->string('category_post')->nullable();
        $table->string('profile_type')->nullable();
        $table->string('profile_name')->nullable();
        $table->string('user_email')->nullable();
        $table->text('body_post')->nullable();

        $table->text('comment_body')->nullable();
    });
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
