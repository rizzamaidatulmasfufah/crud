<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk menjalankan query builder
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data dari tabel buku ,(get) menangkap data yang dikirim melalui atau yang ada di URL
        $buku = DB::table('buku')->get();
        //mengirim data ke view mahasiswa
        return view('index' , ['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('buku')->insert([
            'kodebuku' => $request->kodebuku,
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'stok' => $request->stok,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengambil data buku berdasarkan id yang dipilih
        $buku = DB::table('buku')
        ->where('id', $id)
        ->first();
        // passing data buku yang didapat ke view edit.blade.php
        return view('edit' , ['buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //update data buku berdasarkan id
        DB::table('buku')->where('id', $request->id)->update([
            'kodebuku' => $request->kodebuku,
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'stok' => $request->stok,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at

        ]);
        //alihkan ke halaman home
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
         //menghapus data buku berdasarkan id
         DB::table('buku')->where('id', $id)->delete();
         return redirect('/buku');    }
}
