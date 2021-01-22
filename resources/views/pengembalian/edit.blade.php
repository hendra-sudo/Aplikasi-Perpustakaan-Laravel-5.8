@extends('layouts.master')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <br>
            <h1>Edit data siswa</h1>
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                Data siswa berhasil di update!
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <form action="/pengembalian/{{$pengembalian->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Kembali</label>
                            <input type="name" name="kode_kembali" class="form-control" id="kode_kembali" value="{{$pengembalian->kode_kembali}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Kembali</label>
                            <input type="name" name="tgl_kembali" class="form-control" id="tgl_kembali" value="{{$pengembalian->tgl_kembali}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jatuh Tempo</label>
                            <input type="name" name="jatuh_tempo" class="form-control" id="jatuh_tempo" value="{{$pengembalian->jatuh_tempo}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Denda Per Hari</label>
                            <input type="text" name="denda_per_hari" class="form-control" id="denda_per_hari" value="{{$pengembalian->denda_per_hari}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Hari</label>
                            <input type="name" name="jumlah_hari" class="form-control" id="jumlah_hari" value="{{$pengembalian->jumlah_hari}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total Denda</label>
                            <input type="name" name="total" class="form-control" id="total" value="{{$pengembalian->total}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Petugas</label>
                            <input type="name" name="kode_petugas" class="form-control" id="kode_petugas" value="{{$pengembalian->kode_petugas}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Anggota</label>
                            <input type="name" name="kode_anggota" class="form-control" id="kode_anggota" value="{{$pengembalian->kode_anggota}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Buku</label>
                            <input type="name" name="kode_buku" class="form-control" id="kode_buku" value="{{$pengembalian->kode_buku}}">
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </main>
    @endsection