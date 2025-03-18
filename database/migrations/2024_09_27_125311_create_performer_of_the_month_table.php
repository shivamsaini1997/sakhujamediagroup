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
        Schema::create('performer_of_the_month', function (Blueprint $table) {
            $table->id();
            $table->string('employeeimage1');
            $table->string('employeeimage2');
            $table->string('employeeimage3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performer_of_the_month');
    }
};
