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
        Schema::create('atraksi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();         
        });
        Schema::create('atraksi_image', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atraksi_id');
            $table->string('url');
            $table->timestamps();
    
            $table->foreign('atraksi_id')->references('id')->on('atraksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atraksi');
    }
};
