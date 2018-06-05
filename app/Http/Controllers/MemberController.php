<?php

namespace App\Http\Controllers;

use Session;
use App\Member;
use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $member= Member::all();
        return view('Member.index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::all();
        return view('Member.create',compact('user'));
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
            'foto' => 'image|max:20048',
            'alamat' => 'required',
            'user_id' => 'required']);
        $member = Member::create($request->except('foto'));
        if ($request->hasFile('foto')) {
        $uploaded_foto = $request->file('foto');
        $extension = $uploaded_foto->getClientOriginalExtension();
        $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img\member';
        $uploaded_foto->move($destinationPath, $filename);
        $member->foto = $filename;
        $member->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil Menambah Member"
        ]);
        return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $member = Member::findOrFail($id);
        return view('Member.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $member = Member::findOrFail($id);
        return view('Member.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request, [
            'foto' => 'image|max:20048',
            'alamat' => 'required',
            'user_id' => 'required']);
        $member = Member::findOrFail($id);
        $member->update($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil Mengupdate Member"
        ]);
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Member::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Member berhasil dihapus"
        ]);
        return redirect()->route('member.index');
    }
}
