<?php

namespace App\Exports;

use App\dokter_panggilan;
use Maatwebsite\Excel\Concerns\FromCollection;

class HasilExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dokter_panggilan::all();
    }
}
