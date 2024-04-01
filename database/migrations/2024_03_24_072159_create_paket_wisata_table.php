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
        Schema::create('paket_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->timestamps();
        });
        Schema::create('paket_wisata_image', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_wisata_id');
            $table->string('url');
            $table->timestamps();
    
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisata');
        });
        Schema::create('paket_wisata_content', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_wisata_id');
            $table->string('content')->nullable();
            $table->timestamps();
    
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisata');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_wisata');
    }
};
