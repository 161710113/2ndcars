<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Merk;
use App\Tipe;
use App\Lokasi;
use App\User;
use App\Galeri;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mobil = Mobil::all();
        return view('Mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mobil = Mobil::all();
        $merk = Merk::all();
        $tipe = Tipe::all();
        $lokasi = Lokasi::all();
        $user = User::all();
        return view('mobil.create', compact('mobil','merk','tipe','lokasi','user'));
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
            'plat_nomor' => 'required|unique:mobils',
            'nama_mobil' => 'required',
            'transmisi' => 'required',
            'no_hp' => 'min:11|required||numeric',
            'harga' => 'required||numeric',
            'deskripsi' => 'required',
            'id_merk' => 'required',
            'id_tipe' => 'required',
            'id_lokasi' => 'required',
            'id_user' => 'required',
            'foto' => 'image|max:20048']);
            $mobil = Mobil::create($request->except('foto'));
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $destinationPath = public_path().'/img/mobil/';
                $filename = str_random(5).'_'.$file->getClientOriginalName();
                $uploadSuccess = $file->move($destinationPath, $filename);
                $mobil->foto = $filename;
                }
        $mobil->save();
        return redirect()->route('mob.index');
    }

    public function publish($id)
    {
        $mobil = Mobil::find($id);
        if ($mobil->status === 1) {
            $mobil->status = 0;
        } else {
            $mobil->status= 1;
        }
        $mobil->save();
        return redirect()->route('mob.index');
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
        $mobil = Mobil::findOrFail($id);
        return view ('Mobil.show',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mobil = Mobil::findOrFail($id);
        $merk = Merk::all();
        $merkselect = Mobil::findOrFail($id)->id_merk;
        $tipe = Tipe::all();
        $tipeselect = Mobil::findOrFail($id)->id_tipe;
        $lokasi = Lokasi::all();
        $lokasiselect = Mobil::findOrFail($id)->id_lokasi;
        $user = User::all();
        $userselect = Mobil::findOrFail($id)->id_user;
        return view('mobil.edit',compact('mobil','merk','merkselect','tipe','tipeselect','lokasi','lokasiselect','user','userselect'));
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
            'plat_nomor' => 'required|unique:mobils',
            'nama_mobil' => 'required',
            'transmisi' => 'required',
            'no_hp' => 'min:11|required||numeric',
            'harga' => 'required||numeric',
            'deskripsi' => 'required',
            'id_merk' => 'required',
            'id_tipe' => 'required',
            'id_lokasi' => 'required',
            'id_user' => 'required',
            'foto' => 'image|max:20048']);
            $mobil = Mobil::find($id);
            $mobil -> update($request->all());
            // isi field logo jika ada logo yang diupload
            if ($request->hasFile('foto')) {
            // Mengambil file yang diupload
            $uploaded_foto = $request->file('foto');
            // mengambil extension file
            $extension = $uploaded_foto->getClientOriginalExtension();
            // membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
            // menyimpan foto ke folder public\img\mobil
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/img/mobil/';
            $uploaded_foto->move($destinationPath, $filename);
            // mengisi field foto di mobil dengan filename yang baru dibuat
            $mobil->foto = $filename;
            $mobil->save();
            }
        return redirect()->route('iklan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mobil =Mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mob.index');
    }
}
