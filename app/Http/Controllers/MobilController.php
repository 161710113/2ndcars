<?php

namespace App\Http\Controllers;

use App\Mobil;
use Illuminate\Http\Request;
use Session;

class MobilController extends Controller
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
        $mobil = Mobil::with('Merk')->get();
        return view('Mobil.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Mobil.create');
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
            'nama' => 'required',
            'warna' => 'required',
            'transmisi' => 'required',
            'no_hp' => 'numeric',
            'harga' => 'numeric',
            'deskripsi' => 'required',
            'Merk_id' => 'required',
            'tipe_id' => 'required'
        ]);
        $mobil = Mobil::create($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $mobil->nama, dengan harga $mobil->harga"
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mobil = Mobil::findOrFail($id);
        return view('Mobil.show',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mobil = Mobil::findOrFail($id);
        return view('Mobil.edit',compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request, [
            'nama' => 'required',
            'warna' => 'required',
            'transmisi' => 'required',
            'no_hp' => 'numeric',
            'harga' => 'numeric',
            'deskripsi' => 'required',
            'Merk_id' => 'required',
            'tipe_id' => 'required'
        ]);
        $mobil = Mobil::find($id);
        $mobil->update($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $mobil->nama"
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(!Mobil::destroy($id)) return redirect()->back();
    }
}
