<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KategoriBuku;
class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    
    protected $primaryKey = 'id_buku';
    
    // Kolom yang dapat diisi
    protected $fillable = [
        'judul_buku',
        'penulis_buku',
        'tahun_terbit',
        'jumlah_halaman',
        'kategori_id',
    ];
    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class, 'kategori_id');
    }
   
}
