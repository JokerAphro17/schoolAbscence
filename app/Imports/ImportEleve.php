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
            'ine' => $row[0],
            'nom' => $row[1],
            'prenom' => $row[2],
            'sexe' => $row[3],
            'date_naissance' => $row[4],
            'lieu_naissance' => $row[5],
        ]);

        
    }


}
