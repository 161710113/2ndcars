<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Galeri;

class FotoiklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::with('Mobil')->get();
        $mobil = Mobil::all();
        return view('frontend.fotomobil',compact('galeri','mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $galeri = Galeri::with('Mobil')->get();
        $mobil = Mobil::findOrFail($id);
        return view('frontend.fotomobil',compact('galeri','mobil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        return redirect()->route('mobil');
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
        $galeri = Galeri::findOrFail($id);
        $mobil = Mobil::all();
        $mobilselect= Mobil::findOrFail($id)->id_mobil;
        return view('frontend.fotomobil',compact('galeri','mobil','mobilselect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        
        return redirect()->route('foto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galeri::destroy($id); 
        return redirect()->route('foto.index');
    }
}
