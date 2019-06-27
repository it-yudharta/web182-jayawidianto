<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
{
    public function index()
    {
        $data_mhs = \App\Siswa::All();
        return view('mhs.index',['data_mhs'=> $data_mhs]);
    }
    public function create(Request $request)
    {
        \App\mhs::create ($request->all());
        return redirect('/mhs')->with('sukses','Data berhasil disimpan');
    }

    public function edit($id)
    {
        $mhs = \App\mhs::find($id);
        return view('mhs/edit',['mhs' => $mhs]);
    }

    public function update(Request $request,$id)
    {
        $mhs = \App\mhs::find($id);
        $mhs->update($request->all());
        return redirect('/mhs')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $mhs = \App\mhs::find($id);
        $mhs->delete();
        return redirect('/mhs')->with('sukses','Data berhasil dihapus');
    }
}
