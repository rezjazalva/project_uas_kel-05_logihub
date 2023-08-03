<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjamans';
    protected $fillable = ['kode_item', 'nama_item', 'jumlah', 'tujuan', 'tanggal_pinjam', 'tanggal_kembali', 'status', 'bukti_peminjaman'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
