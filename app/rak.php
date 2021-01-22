<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rak extends Model
{
    protected $table = 'rak';
    protected $fillable = ['kode_rak', 'nama_rak', 'kode_buku'];
}
