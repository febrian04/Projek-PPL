<?php

namespace App\Http\Controllers;

use App\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPanggilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datapanggil');
    }

    public function hasildata()
    {
        $panggil = DB::table('dokter_panggilan')->get();
        return view('hasildata', ['panggil' => $panggil]);
    }

    public function datapanggil()
    {
        $panggil = DB::table('dokter_panggilan')->get();
        return view('datapanggil', ['panggil' => $panggil]);
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
        //
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


    public function hasil($id)
    {
        $hasildokter = DB::table('dokter_panggilan')->where('id',$id)->get();
        
        return view('/hasil', ['hasildokter' => $hasildokter]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
	    $hasildokter = DB::table('dokter_panggilan')->where('id',$id)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('/hasil',['hasildokter' => $hasildokter]);
        
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
        DB::table('dokter_panggilan')->where('id',$request->id)->update([
            'nama_pemanggil' => $request->nama_pemanggil,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'jumlah_hewan_sakit' => $request->jumlah_hewan_sakit,
            'jenis_hewan' => $request->jenis_hewan,
            'keluhan' => $request->keluhan,
            'jenispenyakit' => $request->JenisPenyakit,
            'hasil' => $request->hasil,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datapanggil')->with('sukses','Hasil Berhasil Input');
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
        DB::table('dokter_panggilan')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/datapanggil')->with('sukses','Data Berhasil Dihapus');
    }
}
