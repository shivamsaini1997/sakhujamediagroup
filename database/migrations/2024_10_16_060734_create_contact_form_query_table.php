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
        Schema::create('contact_form_query', function (Blueprint $table) {
            $table->id();
            $table->string('your_name');
            $table->string('email');
            $table->string('phone');
            $table->string('how_can_we_help');
            $table->string('your_query')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_form_query');
    }
};
