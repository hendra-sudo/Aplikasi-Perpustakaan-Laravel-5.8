<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $data_anggota = \App\Siswa::all();
        $anggota = DB::table('anggota')->paginate(10);
        return view('siswa.index', ['data_anggota' => $data_anggota]);
    }

    public function create(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses', 'Data siswa berhasil di tambahkan!');
    }

    public function edit($id)
    {
        $anggota = \App\Siswa::find($id);
        return view('siswa/edit', ['anggota' => $anggota]);
    }

    public function update(Request $request, $id)
    {
        $anggota = \App\Siswa::find($id);
        $anggota->update($request->all());
        return redirect('/siswa')->with('sukses', 'Data siswa berhasil di update!');
    }

    public function delete($id)
    {
        $anggota = \App\Siswa::find($id);
        $anggota->delete($anggota);
        return redirect('/siswa')->with('sukses', 'Data siswa berhasil di hapus!');
    }
}
