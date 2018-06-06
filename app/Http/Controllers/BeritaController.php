<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

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
        //
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
        $this->validate($request, ['judul' => 'required',
                                'isi' => 'required',
                                'foto' => 'image|max:20048']);
        $berita = Berita::create($request->except('foto'));
        // isi field foto jika ada foto yang diupload
        if ($request->hasFile('foto')) {
        // Mengambil file yang diupload
        $uploaded_foto = $request->file('foto');
        // mengambil extension file
        $extension = $uploaded_foto->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan foto ke folder public\img\berita
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img\berita';
        $uploaded_foto->move($destinationPath, $filename);
        // mengisi field foto di berita dengan filename yang baru dibuat
        $berita->foto = $filename;
        $berita->save();
        }
        
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $berita = Berita::findOrFail($id);
        return view('Berita.show',compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request,$id)
    {
        //
        $this->validate($request, ['judul' => 'required',
                                'isi' => 'required',
                                'foto' => 'image|max:20048']);
        $berita = Berita::find($id);
        $berita -> update($request->all());
        // isi field logo jika ada logo yang diupload
        if ($request->hasFile('foto')) {
        // Mengambil file yang diupload
        $uploaded_foto = $request->file('foto');
        // mengambil extension file
        $extension = $uploaded_foto->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan foto ke folder public\img\berita
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img\berita';
        $uploaded_foto->move($destinationPath, $filename);
        // mengisi field foto di berita dengan filename yang baru dibuat
        $berita->foto = $filename;
        $berita->save();
        }

        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Berita::destroy($id); 
        return redirect()->route('berita.index');
    }
}
