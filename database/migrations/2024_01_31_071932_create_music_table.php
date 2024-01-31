<?php

use App\Models\User;
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
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('slug')->unique();
            $table->string('title');
            $table->longText('description');
            $table->string('search')->nullable();
            $table->string('artist');
            $table->string('cover_path');
            $table->string('audio_path');
            $table->integer('download')->default(0);
            $table->boolean('is_publish')->default(false);
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
