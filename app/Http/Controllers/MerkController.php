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
            'nama' => 'required']);
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request,$id)
    {
        //
        $this->validate($request, [
            'nama' => 'required']);
        $merk = Merk::findOrFail($id);
        $merk->update($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data Merk"
        ]);
        return redirect()->route('merk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
