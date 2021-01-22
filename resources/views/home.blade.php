@extends('layouts.master')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6" href="#">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <h1><i class="fas fa-user-graduate"></i> {{$siswa}} </h1>
                            <p>Jumlah Anggota Perpustakaan</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <h1><i class="fas fa-users-cog"></i> {{$petugas}}</h1>
                            <p>Jumlah Petugas Perpustakaan</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">
                            <h1><i class="fas fa-book-open"></i> {{$buku}}</h1>
                            <p>Jumlah Buku Perpustakaan</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            <h1><i class="fas fa-swatchbook"></i> {{$rak}}</h1>
                            <p>Jumlah Rak Perpustakaan</p>
                        </div>
                    </div>
                </div>
                </img>
            </div>
        </div>
    </main>
    @endsection