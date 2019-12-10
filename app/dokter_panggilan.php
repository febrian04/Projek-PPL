<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter_panggilan extends Model
{
    protected $table = "dokter_panggilan";
 
    protected $fillable = ['nama_pemanggil', 'no_telp', 'alamat', 'jumlah_hewan_sakit', 'jenis_hewan', 'keluhan', 'jenispenyakit', 'hasil'];
}
