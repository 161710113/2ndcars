<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Session;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $berita= Berita::all();
        return view('Berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'gambar'=> 'image',
            'judul'=> 'required',
            'isi'=> 'required']);
        $berita = Berita::create($request->except('gambar'));
        if ($request->hasFile('gambar')) {
        $uploaded_gambar = $request->file('gambar');
        $extension = $uploaded_gambar->getClientOriginalExtension();
        $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'assets/admin/images/berita';
        $uploaded_gambar->move($destinationPath, $filename);
        $berita->gambar = $filename;
        $berita->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan Berita!!"
        ]);
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
        $berita = Berita::findOrFail($id);
        return view('Berita.edit',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
        $this->validate($request, [
            'gambar'=> 'required',
            'judul'=> 'required',
            'isi'=> 'required']);
        $berita = Berita::find($id);
        $berita -> update($request->all());
        // isi field gambar jika ada gambar yang diupload
        if ($request->hasFile('gambar')) {
        // Mengambil file yang diupload
        $uploaded_gambar = $request->file('gambar');
        // mengambil extension file
        $extension = $uploaded_gambar->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan gambar ke folder public/img
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_gambar->move($destinationPath, $filename);
        // mengisi field gambar di berita dengan filename yang baru dibuat
        $berita->gambar = $filename;
        $berita->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan Berita!!"
        ]);
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
        Berita::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berita berhasil dihapus"
        ]);
        return redirect()->route('berita.index');
    }
}
