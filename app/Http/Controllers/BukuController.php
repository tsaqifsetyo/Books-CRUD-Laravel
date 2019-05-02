<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku = \App\buku::all();
        return view ('buku.index',['data_buku' => $data_buku]);
    }

    public function create (Request $request)
    {
        \App\buku::create($request->all());
        return redirect("/buku")->with('sukses','Data berhasil di tambahkan');
    }

    public function edit($id)
    {
        $buku = \App\buku::find($id);
        return view('buku/edit',['buku' => $buku]);
    }

    public function update(Request $request,$id)
    {
        $buku = \App\buku::find($id);
        $buku->update($request->all());
        return redirect('/buku')->with('sukses','Data berhasil di update');
    }

    public function delete($id)
    {
        $buku = \App\buku::find($id);
        $buku->delete($buku);
        return redirect('/buku')->with('sukses','Data berhasil dihapus');
    }
}
