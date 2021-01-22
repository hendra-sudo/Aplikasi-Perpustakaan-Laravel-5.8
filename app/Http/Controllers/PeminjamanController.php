<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data_peminjaman = \App\Peminjaman::all();
        return view('peminjaman.index', ['data_peminjaman' => $data_peminjaman]);
    }

    public function create(Request $request)
    {
        \App\Peminjaman::create($request->all());
        return redirect('/peminjaman')->with('sukses', 'Data peminjaman berhasil di tambahkan!');
    }

    public function edit($id)
    {
        $peminjaman = \App\Peminjaman::find($id);
        return view('peminjaman/edit', ['peminjaman' => $peminjaman]);
    }

    public function update(Request $request, $id)
    {
        $peminjaman = \App\Peminjaman::find($id);
        $peminjaman->update($request->all());
        return redirect('/peminjaman')->with('sukses', 'Data peminjaman berhasil di update!');
    }

    public function delete($id)
    {
        $peminjaman = \App\Peminjaman::find($id);
        $peminjaman->delete($peminjaman);
        return redirect('/peminjaman')->with('sukses', 'Data peminjaman berhasil di hapus!');
    }
}
