<?php

namespace App\Http\Controllers;

use App\Buku;
use App\pustakawan;
use App\Siswa;
use App\rak;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = Siswa::count();
        $buku = Buku::count();
        $petugas = Pustakawan::count();
        $rak = Rak::count();
        return view('home')->with('siswa', $siswa)->with('buku', $buku)->with('petugas', $petugas)->with('rak', $rak);
    }
}
