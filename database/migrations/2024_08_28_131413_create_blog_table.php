<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id('blog_id');
            $table->unsignedBigInteger('category_id');
            $table->string('blog_image');
            $table->string('title');
            $table->string('slug');
            $table->longText('blog_detail');
            $table->boolean('status')->default(1);
            $table->foreign('category_id')->references('category_id')->on('blogcategory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
