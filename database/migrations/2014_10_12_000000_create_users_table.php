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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama');
            $table->enum("jk", ["L", "P"]);
            $table->date("tgl_lahir");
            $table->string("telp");
            $table->text("alamat");
            $table->enum("role", ['peminjam', 'petugas', 'admin'])->default("peminjam");
            $table->string("slug");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
