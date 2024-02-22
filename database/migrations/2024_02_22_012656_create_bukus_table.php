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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("penulis");
            $table->string("penerbit");
            $table->string("thn_terbit");
            $table->text("deskripsi");
            $table->string("gambar");
            $table->unsignedInteger("stok");
            $table->unsignedInteger("jml_pinjam")->default(0);
            $table->string("slug");
            $table->foreignId("id_kategori")->constrained("kategori");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
