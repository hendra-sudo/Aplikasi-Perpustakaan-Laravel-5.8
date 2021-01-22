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
                    <h1>Daftar Pengembalian</h1>
                </div>
                <div class="col-7">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Pengembalian
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Masukan data pengembalian buku</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/pengembalian/create" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Kembali</label>
                                            <input type="name" name="kode_kembali" class="form-control" id="kode_kembali" placeholder="Kode Kembali">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal Kembali</label>
                                            <input type="name" name="tgl_kembali" class="form-control" id="tgl_kembali" placeholder="Tanggal Kembali">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jatuh Tempo</label>
                                            <input type="name" name="jatuh_tempo" class="form-control" id="jatuh_tempo" placeholder="Jatuh Tempo">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Denda Per Hari</label>
                                            <input type="text" name="denda_per_hari" class="form-control" id="denda_per_hari" placeholder="Denda Per Hari">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jumlah Hari</label>
                                            <input type="name" name="jumlah_hari" class="form-control" id="jumlah_hari" placeholder="Jumlah Hari">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total Denda</label>
                                            <input type="name" name="total" class="form-control" id="total" placeholder="Total Denda">
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
                            <th>Kode Kembali</th>
                            <th>Tanggal Kembali</th>
                            <th>Jatuh Tempo</th>
                            <th>Denda Per Hari</th>
                            <th>Jumlah Hari</th>
                            <th>Total Denda</th>
                            <th>Kode Petugas</th>
                            <th>Kode Anggota</th>
                            <th>Kode Buku</th>
                            <th>AKSI</th>
                    </thead>
                    <tbody>
                        @foreach($data_pengembalian as $pengembalian)
                        <tr>

                            <td>{{$pengembalian->kode_kembali}}</td>
                            <td>{{$pengembalian->tgl_kembali}}</td>
                            <td>{{$pengembalian->jatuh_tempo}}</td>
                            <td>{{$pengembalian->denda_per_hari}}</td>
                            <td>{{$pengembalian->jumlah_hari}}</td>
                            <td>{{$pengembalian->total}}</td>
                            <td>{{$pengembalian->kode_petugas}}</td>
                            <td>{{$pengembalian->kode_anggota}}</td>
                            <td>{{$pengembalian->kode_buku}}</td>
                            <td>
                                <a href="/pengembalian/{{$pengembalian->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/pengembalian/{{$pengembalian->id}}/delete" class="btn btn-danger btn-sm">Delete</a>

                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    @endsection