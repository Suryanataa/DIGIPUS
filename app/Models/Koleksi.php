<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;
    protected $table = "koleksi";
    protected $guarded = ["id"];

    public function buku(){
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }
}
