<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buku;
use App\Models\Kategori;
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
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'jk' => 'L',
            'tgl_lahir' => '2009-01-20',
            'telp' => '098712345',
            'alamat' => 'jalan jalan',
            'role' => 'admin',
            'slug' => str()->slug('admin'),
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'nama' => 'budi sedunia',
            'email' => 'petugas@gmail.com',
            'jk' => 'P',
            'tgl_lahir' => '2009-01-20',
            'telp' => '098712345',
            'alamat' => 'jalan jalan',
            'role' => 'petugas',
            'slug' => str()->slug('budi sedunia'),
            'password' => bcrypt('petugas123'),
        ]);
        User::create([
            'nama' => 'udin sedunia',
            'email' => 'udin@gmail.com',
            'jk' => 'L',
            'tgl_lahir' => '2009-01-20',
            'telp' => '098712345',
            'alamat' => 'jalan jalan',
            'role' => 'peminjam',
            'slug' => str()->slug('udin sedunia'),
            'password' => bcrypt('peminjam123'),
        ]);
        User::create([
            'nama' => 'surya',
            'email' => 'surya@gmail.com',
            'jk' => 'L',
            'tgl_lahir' => '2009-01-20',
            'telp' => '098712345',
            'alamat' => 'jalan jalan',
            'role' => 'peminjam',
            'slug' => str()->slug('surya'),
            'password' => bcrypt('peminjam123'),
        ]);
        User::create([
            'nama' => 'mariadi',
            'email' => 'mariadi@gmail.com',
            'jk' => 'P',
            'tgl_lahir' => '2009-01-20',
            'telp' => '098712345',
            'alamat' => 'jalan jalan',
            'role' => 'peminjam',
            'slug' => str()->slug('mariadi'),
            'password' => bcrypt('peminjam123'),
        ]);

        Kategori::create([
            'id' => 1,
            'kategori' => 'Novel',
        ]);

        Kategori::create([
            'id' => 2,
            'kategori' => 'Komik',
        ]);
        Kategori::create([
            'id' => 3,
            'kategori' => 'Motivasi',
        ]);
        Kategori::create([
            'id' => 4,
            'kategori' => 'Edukasi',
        ]);

        Buku::create([
            'id' => 1,
            'judul' => 'Lukisan Senja',
            'penulis' => 'Petere Davidson',
            'penerbit' => 'Pustaka Putra',
            'thn_terbit' => '2020',
            'deskripsi' => 'Lukisan senjaaaaaaaaaaaaaaaaaaaaaaa',
            'stok' => 5,
            'jml_pinjam' => 0,
            'slug' => str()->slug('Lukisan Senja'),
            'id_kategori' => 1,
            'gambar' => '1708734656.png
            ',
        ]);
        Buku::create([
            'id' => 2,
            'judul' => 'One Piece',
            'penulis' => 'eichiro oda',
            'penerbit' => 'Pustaka Putra',
            'thn_terbit' => '1998',
            'deskripsi' => 'Kaizokuoni naru!! emang gitu konsep nya',
            'stok' => 2,
            'jml_pinjam' => 0,
            'slug' => str()->slug('One Piece'),
            'id_kategori' => 2,
            'gambar' => '1708734679.jpg',
        ]);
        Buku::create([
            'id' => 3,
            'judul' => 'Atomic Habbits',
            'penulis' => 'Udin di jalan',
            'penerbit' => 'Pustaka Putra',
            'thn_terbit' => '2020',
            'deskripsi' => 'Atomic Habbits kecil',
            'stok' => 3,
            'jml_pinjam' => 0,
            'slug' => str()->slug('Atomic Habbits'),
            'id_kategori' => 3,
            'gambar' => '1708734638.jpg',
        ]);
        Buku::create([
            'id' => 4,
            'judul' => 'Bahasa Indonesia',
            'penulis' => 'KEMENDIKBUD',
            'penerbit' => 'Pustaka Putra',
            'thn_terbit' => '2020',
            'deskripsi' => 'Buku Pelajaran Bahasa Indonesia',
            'stok' => 4,
            'jml_pinjam' => 0,
            'slug' => str()->slug('Bahasa Indonesia'),
            'id_kategori' => 4,
            'gambar' => '1708734648.jpg',
        ]);
        Buku::create([
            'id' => 5,
            'judul' => 'The King',
            'penulis' => 'Udin di jalan',
            'penerbit' => 'Pustaka Putra',
            'thn_terbit' => '2020',
            'deskripsi' => 'The King buku siap lolos snbt, auto win 100%',
            'stok' => 7,
            'jml_pinjam' => 0,
            'slug' => str()->slug('The King'),
            'id_kategori' => 4,
            'gambar' => '1708734692.jpg',
        ]);
    }
}
