@extends('layouts.master')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <br>
            <h1>Edit data petugas</h1>
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                Data pustakawan berhasil di update!
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <form action="/pustakawan/{{$petugas->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Petugas</label>
                            <input type="name" name="kode_petugas" class="form-control" id="kode_petugas" value="{{$petugas->kode_petugas}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Petugas</label>
                            <input type="name" name="nama" class="form-control" id="nama" value="{{$petugas->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan</label>
                            <input type="name" name="jabatan" class="form-control" id="jabatan" value="{{$petugas->jabatan}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jam Tugas</label>
                            <input type="name" name="jam_tugas" class="form-control" id="jam_tugas" value="{{$petugas->jam_tugas}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No Telp</label>
                            <input type="name" name="no_telp" class="form-control" id="no_telp" value="{{$petugas->no_telp}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3">{{$petugas->alamat}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </main>
    @endsection