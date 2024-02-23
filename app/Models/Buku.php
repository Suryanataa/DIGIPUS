<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    
    public function detail_pinjam()
    {
        return $this->hasMany(DetailPinjam::class, 'id_buku', 'id');
    }

    public function koleksi()
    {
        return $this->hasMany(Koleksi::class, 'id_buku', 'id');
    }
}
