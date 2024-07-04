<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class KategoriBuku extends Model
{
    use HasFactory;
    protected $table = 'kategori_bukus';

    protected $primaryKey = 'id_kategori';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_kategori',
        'deskripsi_kategori',
        'image_url',
    ];

    public function Buku()
    {
        return $this->hasMany(Buku::class, 'kategori_id');
    }
}
