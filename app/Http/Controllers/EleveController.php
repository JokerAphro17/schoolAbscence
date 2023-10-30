<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Classe;
use App\Http\Requests\StoreEleveRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateEleveRequest;
use Maatwebsite\Excel\Facades\Excel; 
use Illuminate\Http\Request;

use App\Exports\ExportEleve;
use App\Imports\ImportEleve;
use PhpOffice\PhpSpreadsheet\IOFactory;

use function PHPUnit\Framework\isNan;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($classe_id = null)
    
    {
        if ($classe_id) {
            $eleves = Eleve::where('classe_id', $classe_id)->paginate(10);
            return view('eleves.index', ['eleves' => $eleves, 'classe_id' => $classe_id]);
        }
        $eleves = Eleve::paginate(10);
        return view('eleves.index', ['eleves' => $eleves, 'classe_id' => $classe_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($classe_id = null)
    {
        return view('eleves.form', ['classe_id' => $classe_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEleveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEleveRequest $request)
    {
        $input = $request->all();

        Eleve::create($input);
        Alert::success('success', 'Eleve enregistré avec succès.');
        return redirect()->route('eleves.index', ['classe_id' => $request->classe_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        return view('eleves.show', ['eleve' => $eleve]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        $classes = Classe::all();
        return view('eleves.form', ['eleve' => $eleve, 'classes' => $classes, 'classe_id' => $eleve->classe_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEleveRequest  $request
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEleveRequest $request, Eleve $eleve)
    {
        $input = $request->all();

        $eleve->update($input);
        Alert::success('success', 'Eleve modifié avec succès.');
        return redirect()->route('eleves.index', ['classe_id' => $request->classe_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->route('eleves.index', ['classe_id' => $eleve->classe_id]);
    }

    // importation excel
    public function import(Request $request)
    {
        // $request->validate([
        //     'file' => 'required|mimes:xls,xlsx'
        // ]);

        $file = $request->file('file');

 
        $reader = IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        $spreadsheet = $reader->load($file);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = [];

        foreach ($worksheet->getRowIterator() AS $row) {
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
            $cells = [];

            foreach ($cellIterator as $cell) {
                $cells[] = $cell->getValue() ;
            }

            $rows[] = $cells;
        }

        // slice rows

      

        if (count($rows) <= 1) {
            Alert::error('error', 'Aucune donnée trouvée.');
            return redirect()->route('eleves.index', ['classe_id' => $request->classe_id]);
        }
       
        foreach ($rows as $key => $value) {
            if ($key > 0) {
            
                if ($value[1] == null) {
                    unset($rows[$key]);
                }
            }
        }
      

        $data = [];

        
        foreach ($rows as $key => $value) {
            if ($key > 0 && is_int($value[0])) {
                
                $data[] = [
                    'ine' => $value[1],
                    'nom' => $value[2],
                    'prenom' => $value[3],
                    'sexe' => $value[4] == 'M' ? 'Masculin' : 'Feminin',
                    'date_naissance' => $value[5],
                    'lieu_naissance' => $value[6],
                    'classe_id' => $request->classe_id,
                ];
               

            }
        }

foreach ($data as $key => $value) {
    $eleve = Eleve::where('ine', $value['ine'])->first();
    if ($eleve || isNan($value[0])) {
        unset($data[$key]);
    }
}

        if (count($data) == 0) {
            Alert::error('error', 'Aucune nouvelle donnée trouvée.');
            return redirect()->route('eleves.index', ['classe_id' => $request->classe_id]);
        }

        
        dd($data);
        foreach ($data as $key => $value) {
            Eleve::create($value);
        }

        Alert::success('success', 'Eleves importés avec succès.');
        return redirect()->route('eleves.index', ['classe_id' => $request->classe_id]);
    }
}
