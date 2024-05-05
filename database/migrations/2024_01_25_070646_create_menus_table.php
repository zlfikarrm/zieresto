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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_id')->references('id')->on('jenis')->cascadeOnDelete();
            $table->string('nama_menu', 255);
            $table->string('harga', 10);
            $table->string('image');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus', function (Blueprint $table){
            $table->dropColumn('image');    
        });
    }
};
