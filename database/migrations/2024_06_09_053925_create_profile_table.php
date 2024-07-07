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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->text('sejarah_singkat')->nullable();
            $table->string('email')->nullable();
            $table->string('nope');
            $table->string('ig')->nullable();
            $table->string('yt')->nullable();
            $table->string('fb')->nullable();
            $table->string('twite')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
