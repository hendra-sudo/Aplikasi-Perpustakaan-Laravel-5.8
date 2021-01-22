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
                    <form action="/peminjaman/{{$peminjaman->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Pinjam</label>
                            <input type="name" name="kode_pinjam" class="form-control" id="kode_pinjam" value="{{$peminjaman->kode_pinjam}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Pinjam</label>
                            <input type="name" name="tgl_pinjam" class="form-control" id="tgl_pinjam" value="{{$peminjaman->tgl_pinjam}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Kembali</label>
                            <input type="name" name="tgl_kembali" class="form-control" id="tgl_kembali" value="{{$peminjaman->tgl_kembali}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kode Petugas</label>
                            <input type="text" name="kode_petugas" class="form-control" id="kode_petugas" value="{{$peminjaman->kode_petugas}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kode Anggota</label>
                            <input type="text" name="kode_anggota" class="form-control" id="kode_anggota" value="{{$peminjaman->kode_anggota}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kode Buku</label>
                            <input type="text" name="kode_buku" class="form-control" id="kode_buku" value="{{$peminjaman->kode_buku}}">
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </main>
    @endsection