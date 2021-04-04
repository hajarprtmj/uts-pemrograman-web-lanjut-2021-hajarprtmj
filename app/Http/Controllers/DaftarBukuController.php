<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;


class DaftarBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::all();
        $posts = Buku::orderBy('id_buku', 'desc')->paginate(6);
        return view('bukus.index', compact('bukus'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bukus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_buku' => 'required',
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'Kategory' => 'required',
            'Jumlah' => 'required',
        ]);

        Buku::create($request->all());

        return redirect()->route('bukus.index')->with('success', 'Daftar Buku Berhasil Di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_buku)
    {
        $Buku = Buku::find($id_buku);
        return view('bukus.detail', compact('Buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_buku)
    {
        $Buku = Buku::find($id_buku);
        return view('bukus.edit', compact('Buku'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_buku)
    {
        $request->validate([
            'id_buku' => 'required',
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'Kategory' => 'required',
            'Jumlah' => 'required',
        ]);

        Buku::find($id_buku)->update($request->all());

        return redirect()->route('bukus.index')->with('success', 'Daftar Buku berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_buku)
    {
        Buku::find($id_buku)->delete();
        return redirect()->route('bukus.index')->with('success', 'Daftar Buku Berhasil Di Hapus');
    }
}
