<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index()
    {
        $data_mhs = \App\Mhs::All();
        return view('mhs.index',['data_mhs'=> $data_mhs]);
    }
    public function create(Request $request)
    {
        \App\Mhs::create ($request->all());
        return redirect('/mhs')->with('sukses','Data berhasil disimpan');
    }

    public function edit($id)
    {
        $mhs = \App\Mhs::find($id);
        return view('mhs/edit',['mhs' => $mhs]);
    }

    public function update(Request $request,$id)
    {
        $mhs = \App\Mhs::find($id);
        $mhs->update($request->all());
        return redirect('/mhs')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $mhs = \App\Mhs::find($id);
        $mhs->delete();
        return redirect('/mhs')->with('sukses','Data berhasil dihapus');
    }
}
