<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index()
    {
        $data_petugas = \App\Pustakawan::all();
        return view('pustakawan.index', ['data_petugas' => $data_petugas]);
    }

    public function create(Request $request)
    {
        \App\Pustakawan::create($request->all());
        return redirect('/pustakawan')->with('sukses', 'Data petugas berhasil di tambahkan!');
    }

    public function edit($id)
    {
        $petugas = \App\Pustakawan::find($id);
        return view('pustakawan/edit', ['petugas' => $petugas]);
    }

    public function update(Request $request, $id)
    {
        $petugas = \App\Pustakawan::find($id);
        $petugas->update($request->all());
        return redirect('/pustakawan')->with('sukses', 'Data petugas berhasil di update!');
    }

    public function delete($id)
    {
        $petugas = \App\Pustakawan::find($id);
        $petugas->delete($petugas);
        return redirect('/pustakawan')->with('sukses', 'Data petugas berhasil di hapus!');
    }
}
