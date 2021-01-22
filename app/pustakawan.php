<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pustakawan extends Model
{

    protected $table = 'petugas';
    protected $fillable = ['kode_petugas', 'nama', 'jabatan', 'jam_tugas', 'no_telp', 'alamat'];
}
