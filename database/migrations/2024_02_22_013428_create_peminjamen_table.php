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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_user")->constrained("users");
            $table->date("tgl_pinjam");
            $table->date("tgl_kembali")->nullable();
            $table->date("tenggat_pinjam")->nullable();
            $table->enum("status", ['pending', 'pinjam', 'kembali'])->default("pending");
            $table->string("invoice");  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
