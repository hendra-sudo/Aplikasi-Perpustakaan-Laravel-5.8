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
                    <h1>Data Anggota</h1>
                </div>
                <div class="col-7">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Anggota
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Masukan data anggota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/siswa/create" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kode Anggota</label>
                                        <input type="name" name="kode_anggota" class="form-control" id="kode_anggota" placeholder="Kode Anggota">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Siswa</label>
                                        <input type="name" name="nama" class="form-control" id="nama" placeholder="Nama Siswa">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jurusan</label>
                                        <input type="name" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Angkatan</label>
                                        <input type="name" name="angkatan" class="form-control" id="angkatan" placeholder="Angkatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
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
            <br>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Kode Anggota</th>
                        <th>Nama Siswa</th>
                        <th>Jurusan</th>
                        <th>Angkatan</th>
                        <th>Alamat</th>
                        <th>AKSI</th>
                </thead>
                <tbody>
                    @foreach($data_anggota as $anggota)
                    <tr>
                        <td>{{$anggota->kode_anggota}}</td>
                        <td>{{$anggota->nama}}</td>
                        <td>{{$anggota->jurusan}}</td>
                        <td>{{$anggota->angkatan}}</>
                        <td>{{$anggota->alamat}}</td>
                        <td>
                            <a href="/siswa/{{$anggota->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/siswa/{{$anggota->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @endsection