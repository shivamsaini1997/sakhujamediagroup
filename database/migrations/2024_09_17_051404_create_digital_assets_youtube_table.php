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
        Schema::create('digital_assets_youtube', function (Blueprint $table) {
            $table->id();
            $table->string('channel_logo',500);
            $table->string('channel_url',1000);
            $table->string('channel_title',200);
            $table->string('channel_username',200);
            $table->string('channel_subscribers',100);
            $table->string('channel_total_video',);
            $table->string('channel_discreption',2000);
            $table->string('serial_thumbnail1',200);
            $table->string('serial_url1');
            $table->string('serial_thumbnail2');
            $table->string('serial_url2');
            $table->string('serial_thumbnail3');
            $table->string('serial_url3');
            $table->string('serial_thumbnail4');
            $table->string('serial_url4');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digital_assets_youtube');
    }
};
