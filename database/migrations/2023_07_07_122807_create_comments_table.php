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
    Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->unsignedBigInteger('post_id'); // Foreign key for post association
        $table->string('profile_type');
        $table->string('profile_name');
        $table->string('user_email')->nullable();
        $table->text('comment_body');

        // Define foreign key constraint
        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
