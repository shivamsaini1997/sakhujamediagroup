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
        Schema::table('globalsetting', function (Blueprint $table) {
            $table->string('twitter_link')->nullable()->after('linkedinlink');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('globalsetting', function (Blueprint $table) {
            //
        });
    }
};
