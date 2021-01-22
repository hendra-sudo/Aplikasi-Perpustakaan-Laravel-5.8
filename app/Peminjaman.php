<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = ['kode_pinjam', 'tgl_pinjam', 'tgl_kembali', 'kode_petugas', 'kode_anggota', 'kode_buku'];
}
