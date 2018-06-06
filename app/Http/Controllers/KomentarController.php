<?php

namespace App\Http\Controllers;

use App\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
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
        $komentar= Komentar::with('Berita')->get();
        return view('Komentar.index', compact('komentar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Komentar.create');
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
        $this->validate($request, ['komentar' => 'required',
            'id_berita' => 'required',
            'id_user' => 'required']);
        $komentar = Komentar::create($request->all());
        
        return redirect()->route('komentar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $komentar = Komentar::findOrFail($id);
        return view('Komentar.show',compact('komentar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $komentar = Komentar::findOrFail($id);
        return view('Komentar.edit',compact('komentar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, ['komentar' => 'required',
            'id_berita' => 'required',
            'id_user' => 'required']);
        $komentar = Komentar::find($id);
        $komentar->update($request->all());
        
        return redirect()->route('komentar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Komentar::destroy($id);
        
        return redirect()->route('komentar.index');
    }
}
