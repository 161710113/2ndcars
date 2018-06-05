<?php

namespace App\Http\Controllers;

use App\User;
use App\Berita;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comment= Comment::all();
        return view('Comment.index', compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $berita= Berita::all();
        $user= User::all();
        return view('Comment.create',compact('berita','user'));
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
            'komentar' => 'required',
            'member_id' => 'required',
            'berita_id' => 'required']);
        $comment = Comment::create($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil Mengirim Komentar"
        ]);
        return redirect()->route('comment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comment = Comment::findOrFail($id);
        return view('Comment.show',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::all();
        $comment = Comment::findOrFail($id);
        return view('Comment.edit',compact('comment','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request, [
            'komentar' => 'required',
            'member_id' => 'required',
            'berita_id' => 'required']);
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil Mengupdate Komentar"
        ]);
        return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Comment::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Comment berhasil dihapus"
        ]);
        return redirect()->route('comment.index');
    }
}
