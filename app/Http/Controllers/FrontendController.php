<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Galeri;
use App\Lokasi;
use App\Merk;
use App\Mobil;
use App\Role;
use App\Tipe;
use App\User;
use Auth;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::all();
        return view('frontend.index',compact('mobil'));
    }

    public function mobil()
    {
        $merk = Merk::all();
        $tipe = Tipe::all();
        $galeri = Galeri::all();
        $mobil = Mobil::orderBy('created_at','desc')->paginate(10);
        return view('frontend.scndcars',compact('mobil','merk','galeri','tipe')); 
    }
    public function jualmobil()
    {
        $mobil = Mobil::all();
        $merk = Merk::all();
        $tipe = Tipe::all();
        $lokasi = Lokasi::all();
        $user = User::all();
        //return view('frontend.mobil');
        return view('frontend.jualmobil',compact('mobil','merk','tipe','lokasi','user'));
    }

    public function store(Request $request)
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
            'id_user' => 'required']);

        $mobil = Mobil::create($request->all());
        return redirect()->route('sell.jualmobil');
    }

    public function detailmobil($id)
    {        
        $mobil = Mobil::findOrFail($id);
        return view ('frontend.detailcars',compact('mobil'));
    }
    public function detailberita($id)
    {
        $berita = Berita::findOrFail($id);
        return view ('frontend.detailnews',compact('berita'));
    }
    public function news()
    {
        $berita = Berita::orderBy('created_at','desc')->paginate(10);
        //return view('frontend.mobil');
        return view('frontend.news',compact('berita'));
    }    
}
