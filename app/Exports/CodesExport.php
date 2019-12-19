<?php

namespace App\Exports;

use App\Codes;
use Maatwebsite\Excel\Concerns\FromCollection;

class CodesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Codes::all();
    }
}
