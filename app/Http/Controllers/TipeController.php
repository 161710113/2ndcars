<?php

namespace App\Http\Controllers;

use App\Tipe;
use Illuminate\Http\Request;
use Session;

class TipeController extends Controller
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
        $tipe= Tipe::all();
        return view('Tipe.index', compact('tipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Tipe.create');
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
        $tipe = Tipe::create($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data Tipe : $tipe->nama"
        ]);
        return redirect()->route('tipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show(Tipe $tipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipe $tipe)
    {
        //
        $tipe = Tipe::findOrFail($id);
        return view('Tipe.edit',compact('tipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipe $tipe)
    {
        //
        $this->validate($request, [
            'nama' => 'required']);
        $tipe = Tipe::findOrFail($id);
        $tipe->update($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data dengan nama : $tipe->nama"
        ]);
        return redirect()->route('tipe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipe $tipe)
    {
        //
        Tipe::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Tipe berhasil dihapus"
        ]);
        return redirect()->route('tipe.index');
    }
}
