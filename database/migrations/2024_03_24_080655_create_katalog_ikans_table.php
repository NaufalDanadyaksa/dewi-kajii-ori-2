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
        Schema::create('katalog_ikan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->timestamps();
        });
        Schema::create('katalog_ikan_image', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('katalog_ikan_id');
            $table->string('url');
            $table->timestamps();
    
            $table->foreign('katalog_ikan_id')->references('id')->on('katalog_ikan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalog_ikan');
    }
};
