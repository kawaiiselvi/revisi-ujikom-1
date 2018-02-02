<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pers;
use Session;
use Illuminate\Support\Facades\Auth;

class PersController extends Controller
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
        return view('pers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'perusahaan'=>'required',
            'nama'=>'required',
            'jabatan'=>'required',
            'lokasi'=>'required',
            'pendidikan'=>'required',
            'deskripsi'=>'required',
            'gaji'=>'required']);
        $pers = new Pers;
        $pers->perusahaan = $request->perusahaan;
        $pers->nama = $request->nama;
        $pers->jabatan = $request->jabatan;
        $pers->lokasi = $request->lokasi;
        $pers->pendidikan = $request->pendidikan;
        $pers->deskripsi = $request->deskripsi;
        $pers->gaji = $request->gaji;
        $pers->akun_id = Auth::user()->id;
        $pers->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $pers->perusahaan"]);
        return redirect()->route('pers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
