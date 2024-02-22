<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            "nama" => "admin",
            "email" => "admin@gmail.com",
            "jk" => "L",
            "tgl_lahir" => "2009-01-20",
            "telp" => "098712345",
            "alamat" => "jalan jalan",
            "role" => "admin",
            "slug" => str()->slug("admin"),
            "password" => bcrypt("admin123")
        ]);
    }
}
