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
        Schema::create('kategori_bukus', function (Blueprint $table) {
            $table->id('id_kategori'); // ID Kategori Buku
            $table->string('nama_kategori'); // Nama Kategori Buku
            $table->text('deskripsi_kategori')->nullable(); // Deskripsi Kategori Buku, opsional
            // $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_bukus');
    }
};
