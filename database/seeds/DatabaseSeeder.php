<?php

use Database\Seeders\FiliereSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => '1',
                'nom' => 'admin',
                'prenom' => 'admin',
                'email' => 'admin@gmail.com',
                'telephone' => '0000000000',
                'role' => 'admin',
                'password' => bcrypt('admin'),
            ]
        ];
        foreach ($users as $user) {
            \App\User::create($user);
        }
    $this->call([FiliereSeeder::class]);
    
    }


}
