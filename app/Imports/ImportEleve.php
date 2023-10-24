<?php

namespace App\Imports;

use App\Models\Eleve;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportEleve implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Eleve([
            //
        ]);
    }
}
