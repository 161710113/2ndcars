<?php

namespace App\Http\Controllers;

use App\Mobil;
use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
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
        $galeri = Galeri::with('Mobi->idl')->get();
        return view('Galeri.index',compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = Mobil::all();
        return view('Galeri.create',compact('mobil'));
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
            'foto' => 'image|max:20048',
            'id_mobil' => 'required'
        ]);
        $galeri = Galeri::create($request->except('foto'));
        // isi field foto jika ada foto yang diupload
        if ($request->hasFile('foto')) {
        // Mengambil file yang diupload
        $uploaded_foto = $request->file('foto');
        // mengambil extension file
        $extension = $uploaded_foto->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan foto ke folder public\img\galeri
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img\galeri';
        $uploaded_foto->move($destinationPath, $filename);
        // mengisi field foto di galeri dengan filename yang baru dibuat
        $galeri->foto = $filename;
        $galeri->save();
        }

        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $galeri = Galeri::findOrFail($id);
        return view('Galeri.show',compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $galeri = Galeri::findOrFail($id);
        $mobil = Mobil::all();
        $mobilselect= Mobil::findOrFail($id)->id_mobil;
        return view('Galeri.edit',compact('galeri','mobil','mobilselect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'foto' => 'image|max:20048',
            'id_mobil' => 'required'
        ]);
        $galeri = Galeri::find($id);
        $galeri -> update($request->all());
        // isi field foto jika ada foto yang diupload
        if ($request->hasFile('foto')) {
        // Mengambil file yang diupload
        $uploaded_foto = $request->file('foto');
        // mengambil extension file
        $extension = $uploaded_foto->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan foto ke folder public\img\galeri
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img\galeri';
        $uploaded_foto->move($destinationPath, $filename);
        // mengisi field foto di galeri dengan filename yang baru dibuat
        $galeri->foto = $filename;
        $galeri->save();
        }
        
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Galeri::destroy($id); 
        return redirect()->route('galeri.index');
    }
}
