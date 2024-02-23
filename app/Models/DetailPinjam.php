<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model
{
    use HasFactory;
    protected $table = "detail_pinjam";
    protected $guarded = ['id'];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }
}
