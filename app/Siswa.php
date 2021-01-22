<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{

    protected $table = 'anggota';
    protected $fillable = ['kode_anggota', 'nama', 'jurusan', 'angkatan', 'alamat'];
}
