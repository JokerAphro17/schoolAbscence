<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
                'adresse' => 'admin',
                'password' => bcrypt('admin'),
            ]
        ];
        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}
