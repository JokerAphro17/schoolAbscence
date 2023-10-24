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

      

       
            \App\Models\Enseignant::create([
                'nom' => 'Zakaria',
                'prenom' => 'Zakaria',
                'email' => 'zakaria@m.com',
                'telephone' => '0000000000',
                'adresse' => 'zakaria',

            ]
        );
            
        

        $modules = [
            [
                'code'=> '5426',
                'nom'=> 'Programmation web',
                'nombre_heures' =>30
            ],
            [
                'code'=> '5427',
                'nom'=> 'Programmation mobile',
                'nombre_heures' =>30
            ]
        ];
        

        foreach ($modules as $module) {
            \App\Models\Module::create($module);
        }

        $enseignants = \App\Models\Enseignant::all();

        // cretae for each module a SceanceCourse with a random enseignant
        foreach (\App\Models\Module::all() as $module) {
            \App\Models\SceanceCour::create([
                'module_id' => $module->id,
                'enseignant_id' => $enseignants->random()->id,
                'classe_id' => $classes->random()->id,
                'date' => now(),
                'heure_debut' => '08:00',
                'duree' => 2,
            ]);
        }
    }
}
}
