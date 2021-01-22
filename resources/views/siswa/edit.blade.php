@extends('layouts.master')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <br>
            <h1>Edit data anggota</h1>
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <form action="/siswa/{{$anggota->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Anggota</label>
                            <input type="name" name="kode_anggota" class="form-control" id="kode_anggota" value="{{$anggota->kode_anggota}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Siswa</label>
                            <input type="name" name="nama" class="form-control" id="nama" value="{{$anggota->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jurusan</label>
                            <input type="name" name="jurusan" class="form-control" id="jurusan" value="{{$anggota->jurusan}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Angkatan</label>
                            <input type="name" name="angkatan" class="form-control" id="angkatan" value="{{$anggota->angkatan}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{$anggota->alamat}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </main>
    @endsection