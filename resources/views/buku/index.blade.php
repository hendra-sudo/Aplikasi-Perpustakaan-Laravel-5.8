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
                    <h1>Daftar Buku</h1>
                </div>
                <div class="col-7">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Buku
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Masukan data buku</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/buku/create" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Buku</label>
                                            <input type="name" name="kode_buku" class="form-control" id="kode_buku" placeholder="Kode Buku">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul Buku</label>
                                            <input type="name" name="judul" class="form-control" id="judul" placeholder="Judul Buku">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penulis</label>
                                            <input type="name" name="penulis" class="form-control" id="penulis" placeholder="Penulis">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penerbit</label>
                                            <input type="name" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tahun Terbit</label>
                                            <input type="name" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="Tahun Terbit">
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
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>AKSI</th>
                    </thead>
                    <tbody>
                        @foreach($data_buku as $buku)
                        <tr>

                            <td>{{$buku->kode_buku}}</td>
                            <td>{{$buku->judul}}</td>
                            <td>{{$buku->penulis}}</td>
                            <td>{{$buku->penerbit}}</td>
                            <td>{{$buku->tahun_terbit}}</td>
                            <td>
                                <a href="/buku/{{$buku->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/buku/{{$buku->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    @endsection