<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $data_pengembalian = \App\Pengembalian::all();
        return view('pengembalian.index', ['data_pengembalian' => $data_pengembalian]);
    }

    public function create(Request $request)
    {
        \App\Pengembalian::create($request->all());
        return redirect('/pengembalian')->with('sukses', 'Data pengembalian berhasil di tambahkan!');
    }

    public function edit($id)
    {
        $pengembalian = \App\Pengembalian::find($id);
        return view('pengembalian/edit', ['pengembalian' => $pengembalian]);
    }

    public function update(Request $request, $id)
    {
        $pengembalian = \App\Pengembalian::find($id);
        $pengembalian->update($request->all());
        return redirect('/pengembalian')->with('sukses', 'Data pengembalian berhasil di update!');
    }

    public function delete($id)
    {
        $pengembalian = \App\Pengembalian::find($id);
        $pengembalian->delete($pengembalian);
        return redirect('/pengembalian')->with('sukses', 'Data pengembalian berhasil di hapus!');
    }
}
