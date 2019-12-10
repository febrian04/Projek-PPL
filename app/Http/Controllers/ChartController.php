<?php

namespace App\Http\Controllers;

use App\dokter_panggilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $data = DB::table('dokter_panggilan')
                ->select(DB::raw('jenispenyakit, count(jenispenyakit) as jumlah'),'dokter_panggilan.jenispenyakit')
                ->groupBy('dokter_panggilan.jenispenyakit')
                ->get();
                
        
        //dd($categories);
        $produk = dokter_panggilan::all();

        //chart
        $categories = [];

        foreach($produk as $p){
        $categories2[] = $p->jenispenyakit;
        $data2[] = $p->jumlah_hewan_sakit;
        }

        //dd($categories);

        // return view('Produk.index', ['produk' => $produk, 'categories' => $categories, 'data' => $data]);

        return view('chart', compact('data', 'data2','categories2','produk'));
    }

}
