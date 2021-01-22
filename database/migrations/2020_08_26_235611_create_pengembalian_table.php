<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kembali');
            $table->string('tgl_kembali');
            $table->string('jatuh_tempo');
            $table->string('denda_per_hari');
            $table->string('jumlah_hari');
            $table->string('total');
            $table->string('kode_petugas');
            $table->string('kode_anggota');
            $table->string('kode_buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian');
    }
}
