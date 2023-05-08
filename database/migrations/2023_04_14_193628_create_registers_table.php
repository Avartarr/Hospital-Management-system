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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('age')->nullable();
            $table->string('add')->nullable();
            $table->string('gen')->nullable();
            $table->string('phone')->nullable();
            $table->string('bg')->nullable();
            $table->string('reg')->nullable();
            $table->string('name2')->nullable();
            $table->string('phone2')->nullable();
            $table->string('rel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
