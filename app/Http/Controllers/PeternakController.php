<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeternakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Peternak.index');
    }

    public function datadiri()
    {
        $pengguna = DB::table('peternak')->get();
        return view('datadiri/index', ['pengguna' => $pengguna]);
    }

    public function indextambah()
    {
        return view('datadiri.tambah');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('peternak')->insert([
            'nama' => $request->nama,
            'namapeternakan' => $request->namapeternakan,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'notel' => $request->notel,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datadiri/index')->with('sukses','Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
	    $pengguna = DB::table('peternak')->where('id',$id)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('/datadiri/edit',['pengguna' => $pengguna]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // update data ke table pegawai
        DB::table('peternak')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'namapeternakan' => $request->namapeternakan,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'notel' => $request->notel,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datadiri/index')->with('sukses','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('peternak')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/datadiri/index')->with('sukses','Data Berhasil Dihapus');
    }
}
