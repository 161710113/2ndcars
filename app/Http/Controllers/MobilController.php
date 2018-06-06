<?php

namespace App\Http\Controllers;

use App\Merk;
use App\Tipe;
use App\Lokasi;
use App\User;
use App\Mobil;
use Illuminate\Http\Request;

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
        $mobil= Mobil::with('Merk')->get();
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
        $merk = Merk::all();
        $tipe = Tipe::all();
        $lokasi = Lokasi::all();
        $user = User::all();
        return view('Mobil.create',compact('merk','tipe','lokasi','user'));
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
            'plat_nomor' => 'required',
            'nama_mobil' => 'required',
            'transmisi' => 'required',
            'no_hp' => 'required||numeric',
            'harga' => 'required||numeric',
            'deskripsi' => 'required',
            'id_merk' => 'required',
            'id_tipe' => 'required',
            'id_lokasi' => 'required',
            'id_user' => 'required']);
        $mobil = Mobil::create($request->all());
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
        // $mobil = Mobil::findOrFail($id);
        // return view('Mobil.show',compact('mobil'));
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
        $merk = Merk::all();
        $tipe = Tipe::all();
        $lokasi = Lokasi::all();
        $user = User::all();
        $merkselect= Merk::findOrFail($id)->id_merk;
        $tipeselect= Tipe::findOrFail($id)->id_tipe;
        $lokasiselect= Lokasi::findOrFail($id)->id_lokasi;
        $userselect= User::findOrFail($id)->id_user;
        return view('Mobil.edit',compact('mobil','merk','merkselect','tipe','tipeselect','lokasi','lokasiselect','user','userselect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'plat_nomor' => 'required',
            'nama_mobil' => 'required',
            'transmisi' => 'required',
            'no_hp' => 'required||numeric',
            'harga' => 'required||numeric',
            'deskripsi' => 'required',
            'id_merk' => 'required',
            'id_tipe' => 'required',
            'id_lokasi' => 'required',
            'id_user' => 'required']);
        $mobil = Mobil::find($id);
        $mobil->update($request->all());
        
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
        Mobil::destroy($id);
        
        return redirect()->route('mobil.index');
    }
}
