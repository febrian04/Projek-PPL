<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanggildokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panggildokter');
    }

    public function cariDokter(Request $request)
    {
        $data = DB::table('dokterbio');
        // dd($data);
        $dataJarak = [];
        foreach ($data->get() as $dokter) {
            if (($request->latitude == $dokter->latitude) && ($request->longitude == $dokter->longitude)) {
                $dataJarak = ['id' => $dokter->id , 'jarak' => $miles];
            } else {
                $theta = $request->longitude - $dokter->longitude;
                $dist = sin(deg2rad($request->latitude)) * sin(deg2rad($dokter->latitude)) +  cos(deg2rad($request->latitude)) * cos(deg2rad($dokter->latitude)) * cos(deg2rad($theta));
                $dist = acos($dist);
                $dist = rad2deg($dist);
                $miles = $dist * 60 * 1.1515;
                $unit = "k";
                $unit = strtoupper($unit);
            
                if ($unit == "K") {
                    $miles = ($miles * 1.609344);
                } elseif ($unit == "N") {
                    $miles = ($miles * 0.8684);
                }
                $dataJarak[] = ['id' => $dokter->id , 'jarak' => $miles];

            }
        }
        $collection = collect($dataJarak);
        $sorted = $collection->sortBy('jarak');
        $idDokter = $sorted->values()->pluck('id')->first();
        $jarak = $sorted->values()->pluck('jarak')->first();
        
        $idHasil = DB::table('dokter_panggilan')->insertGetId([
            'nama_pemanggil' => $request->nama_pemanggil,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'jumlah_hewan_sakit' => $request->jumlah_hewan_sakit,
            'jenis_hewan' => $request->JenisHewan,
            'keluhan' => $request->keluhan,
            'jarak' => $jarak,
            'dokter_id' => $idDokter,
        ]);

        return redirect()->route('hasil.analisis', ['id' => $idHasil]);
    }

    public function hasil($id){
        $hasil = DB::table('dokter_panggilan')->join('dokterbio', 'dokter_panggilan.dokter_id', '=', 'dokterbio.id')->where('dokter_panggilan.id',$id)->first();
        return view('hasil_dokter',compact('hasil'));
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
