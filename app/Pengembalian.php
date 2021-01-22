<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalian';
    protected $fillable = ['kode_kembali', 'tgl_kembali', 'jatuh_tempo', 'denda_per_hari', 'jumlah_hari', 'total', 'kode_petugas', 'kode_anggota', 'kode_buku'];
}
