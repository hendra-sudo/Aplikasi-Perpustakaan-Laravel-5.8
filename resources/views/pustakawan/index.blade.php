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
                    <h1>Data Petugas</h1>
                </div>
                <div class="col-7">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Petugas
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Masukan data petugas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/pustakawan/create" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Petugas</label>
                                            <input type="name" name="kode_petugas" class="form-control" id="kode_petugas" placeholder="Kode Petugas">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Petugas</label>
                                            <input type="name" name="nama" class="form-control" id="nama" placeholder="Nama Petugas">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jabatan</label>
                                            <input type="name" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jam Tugas</label>
                                            <input type="name" name="jam_tugas" class="form-control" id="jam_tugas" placeholder="Jam Tugas">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Telp</label>
                                            <input type="name" name="no_telp" class="form-control" id="no_telp" placeholder="No Telp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat</label>
                                            <input type="name" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
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
                            <th>Kode Petugas</th>
                            <th>Nama Petugas</th>
                            <th>Jabatan</th>
                            <th>Jam Tugas</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>AKSI</th>
                    </thead>
                    <tbody>
                        @foreach($data_petugas as $petugas)
                        <tr>

                            <td>{{$petugas->kode_petugas}}</td>
                            <td>{{$petugas->nama}}</td>
                            <td>{{$petugas->jabatan}}</td>
                            <td>{{$petugas->jam_tugas}}</td>
                            <td>{{$petugas->no_telp}}</td>
                            <td>{{$petugas->alamat}}</td>
                            <td>
                                <a href="/pustakawan/{{$petugas->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/pustakawan/{{$petugas->id}}/delete" class="btn btn-danger btn-sm">Delete</a>

                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    @endsection