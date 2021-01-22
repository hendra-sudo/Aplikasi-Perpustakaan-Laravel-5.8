<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RakController extends Controller
{
    public function index()
    {
        $data_rak = \App\Rak::all();
        return view('rak.index', ['data_rak' => $data_rak]);
    }

    public function create(Request $request)
    {
        \App\Rak::create($request->all());
        return redirect('/rak')->with('sukses', 'Data rak berhasil di tambahkan!');
    }

    public function edit($id)
    {
        $rak = \App\Rak::find($id);
        return view('rak/edit', ['rak' => $rak]);
    }

    public function update(Request $request, $id)
    {
        $rak = \App\Rak::find($id);
        $rak->update($request->all());
        return redirect('/rak')->with('sukses', 'Data rak berhasil di update!');
    }

    public function delete($id)
    {
        $rak = \App\Rak::find($id);
        $rak->delete($rak);
        return redirect('/rak')->with('sukses', 'Data rak berhasil di hapus!');
    }
}
