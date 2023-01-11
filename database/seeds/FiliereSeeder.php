<?php

namespace Database\Seeders;

use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Filiere;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

        $filieres = [
            [
                "nom" =>"informatique",
            ],
            [
                "nom" =>"Telecom",
            ]
            ];
            foreach($filieres as $filiere){
                Filiere::create($filiere);
            } 
            $filieres = Filiere::all();
            
            foreach($filieres as $filiere){
                Classe::create([
                    'nom' => $filiere->nom =="infomatique" ? 'infomatique 1' : "telecom 1",
                    'filiere_id' => $filiere->id,
                ]);
                $classes=Classe::all();
        foreach($classes as $classe){
            Eleve::factory(20)->create(['classe_id'=>$classe->id]);
        };    
    }
}
}
