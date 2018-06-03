<?php

namespace App\Http\Controllers;

use App\Iklan;
use Illuminate\Http\Request;
use Session;

class IklanController extends Controller
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
        $iklan= Iklan::with('Mobil')->get();
        return view('Iklan.index', compact('iklan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Iklan.index');
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
            'mobil_id' => 'required']);
        $iklan = Iklan::create($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan Iklan"
        ]);
        return redirect()->route('iklan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function show(Iklan $iklan)
    {
        //
        $iklan = Iklan::findOrFail($id);
        return view('Iklan.show',compact('iklan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function edit(Iklan $iklan)
    {
        //
        $iklan = Iklan::findOrFail($id);
        return view('Iklan.edit',compact('iklan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iklan $iklan)
    {
        //
        $this->validate($request, [
            'mobil_id' => 'required']);
        $iklan = Iklan::find($id);
        $iklan->update($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan Iklan"
        ]);
        return redirect()->route('iklan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iklan $iklan)
    {
        //
        Iklan::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Iklan berhasil dihapus"
        ]);
        return redirect()->route('iklan.index');
    }
}
