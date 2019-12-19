<?php

namespace App\Imports;

use App\Codes;
use Maatwebsite\Excel\Concerns\ToModel;

class CodesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Codes([
            'code'    => $row[0],
        ]);
    }
}
