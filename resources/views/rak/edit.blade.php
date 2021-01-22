@extends('layouts.master')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <br>
            <h1>Edit data rak</h1>
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                Data rak berhasil di update!
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <form action="/rak/{{$rak->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rak</label>
                            <input type="name" name="kode_rak" class="form-control" id="kode_rak" value="{{$rak->kode_rak}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Rak</label>
                            <input type="name" name="nama_rak" class="form-control" id="nama_rak" value="{{$rak->nama_rak}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Buku</label>
                            <input type="name" name="kode_buku" class="form-control" id="kode_buku" value="{{$rak->kode_buku}}">
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </main>
    @endsection