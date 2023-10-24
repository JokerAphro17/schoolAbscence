<?php

namespace App\Exports;

use App\Models\Eleve;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportEleve implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Eleve::all();
    }
}
