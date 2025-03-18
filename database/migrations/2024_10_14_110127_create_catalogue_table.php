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
        Schema::create('catalogue', function (Blueprint $table) {
            $table->id();
            $table->string('serial_image');
            $table->string('serial_title');
            $table->string('serial_url');
            $table->string('number_episodes');
            $table->string('languages');
            $table->string('time');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogue');
    }
};
