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
                    <h1>Daftar Rak</h1>
                </div>
                <div class="col-7">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Rak
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Masukan data rak</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/rak/create" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Rak</label>
                                            <input type="name" name="kode_rak" class="form-control" id="kode_rak" placeholder="Kode Rak">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Rak</label>
                                            <input type="name" name="nama_rak" class="form-control" id="nama_rak" placeholder="Nama Rak">
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
                            <th>Kode Rak</th>
                            <th>Nama Rak</th>
                            <th>Kode Buku</th>
                            <th>AKSI</th>
                    </thead>
                    <tbody>
                        @foreach($data_rak as $rak)
                        <tr>

                            <td>{{$rak->kode_rak}}</td>
                            <td>{{$rak->nama_rak}}</td>
                            <td>{{$rak->kode_buku}}</td>
                            <td>
                                <a href="/rak/{{$rak->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/rak/{{$rak->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    @endsection