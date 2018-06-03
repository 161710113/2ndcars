<?php

namespace App\Http\Controllers;

use App\Merk;
use Illuminate\Http\Request;
use Session;

class MerkController extends Controller
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
        $merk= Merk::all();
        return view('Merk.index', compact('merk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Merk.create');
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
            'logo' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required']);
        $merk = Merk::create($request->except('logo'));
        // isi field logo jika ada logo yang diupload
        if ($request->hasFile('logo')) {
        // Mengambil file yang diupload
        $uploaded_logo = $request->file('logo');
        // mengambil extension file
        $extension = $uploaded_logo->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan logo ke folder public/img
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_logo->move($destinationPath, $filename);
        // mengisi field logo di merk dengan filename yang baru dibuat
        $merk->logo = $filename;
        $merk->save();
        }
        $merk = Merk::create($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data Merk : $merk->nama"
        ]);
        return redirect()->route('merk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(Merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit(Merk $merk)
    {
        //
        $merk = Merk::findOrFail($id);
        return view('Merk.edit',compact('merk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merk $merk)
    {
        //
        $this->validate($request, [
            'logo' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required']);
        $merk = Merk::find($id);
        $merk -> update($request->all());
        // isi field logo jika ada logo yang diupload
        if ($request->hasFile('logo')) {
        // Mengambil file yang diupload
        $uploaded_logo = $request->file('logo');
        // mengambil extension file
        $extension = $uploaded_logo->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan logo ke folder public/img
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_logo->move($destinationPath, $filename);
        // mengisi field logo di merk dengan filename yang baru dibuat
        $merk->logo = $filename;
        $merk->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data dengan nama : $merk->nama"
        ]);
        return redirect()->route('merk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merk $merk)
    {
        //
        Merk::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Merk berhasil dihapus"
        ]);
        return redirect()->route('merk.index');
    }
}
