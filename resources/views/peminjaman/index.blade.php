@extends('layouts.master')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <br>
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-5">
                    <h1>Daftar Peminjaman</h1>
                </div>
                <div class="col-7">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data peminjaman
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Masukan data peminjaman buku</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/peminjaman/create" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Pinjam</label>
                                            <input type="name" name="kode_pinjam" class="form-control" id="kode_pinjam" placeholder="Kode Pinjam">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal Pinjam</label>
                                            <input type="name" name="tgl_pinjam" class="form-control" id="tgl_pinjam" placeholder="Tanggal Pinjam">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal Kembali</label>
                                            <input type="name" name="tgl_kembali" class="form-control" id="tgl_kembali" placeholder="Tanggal Kembali">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Petugas</label>
                                            <input type="name" name="kode_petugas" class="form-control" id="kode_petugas" placeholder="Kode Petugas">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Anggota</label>
                                            <input type="name" name="kode_anggota" class="form-control" id="kode_anggota" placeholder="Kode Anggota">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Buku</label>
                                            <input type="name" name="kode_buku" class="form-control" id="kode_buku" placeholder="Kode Buku">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Kode Pinjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Kode Petugas</th>
                            <th>Kode Anggota</th>
                            <th>Kode Buku</th>
                            <th>AKSI</th>
                    </thead>
                    <tbody>
                        @foreach($data_peminjaman as $peminjaman)
                        <tr>

                            <td>{{$peminjaman->kode_pinjam}}</td>
                            <td>{{$peminjaman->tgl_pinjam}}</td>
                            <td>{{$peminjaman->tgl_kembali}}</td>
                            <td>{{$peminjaman->kode_petugas}}</td>
                            <td>{{$peminjaman->kode_anggota}}</td>
                            <td>{{$peminjaman->kode_buku}}</td>
                            <td>
                                <a href="/peminjaman/{{$peminjaman->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/peminjaman/{{$peminjaman->id}}/delete" class="btn btn-danger btn-sm">Delete</a>

                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    @endsection