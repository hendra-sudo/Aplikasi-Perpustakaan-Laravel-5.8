@extends('layouts.master')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <br>
            <h1>Edit data buku</h1>
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                Data pustakawan berhasil di update!
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <form action="/buku/{{$buku->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Buku</label>
                            <input type="name" name="kode_buku" class="form-control" id="kode_buku" value="{{$buku->kode_buku}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul Buku</label>
                            <input type="name" name="judul" class="form-control" id="judul" value="{{$buku->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Penulis</label>
                            <input type="name" name="penulis" class="form-control" id="penulis" value="{{$buku->penulis}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Penerbit</label>
                            <input type="name" name="penerbit" class="form-control" id="penerbit" value="{{$buku->penerbit}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tahun Terbit</label>
                            <input type="name" name="tahun_terbit" class="form-control" id="tahun_terbit" value="{{$buku->tahun_terbit}}">
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </main>
    @endsection