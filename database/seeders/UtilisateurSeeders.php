<?php

namespace Database\Seeders;

use App\Models\Utilisateur;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UtilisateurSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Utilisateur::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'sexe' => 'M',
            'status' => 'Enable',
            'token' => Str::radom(8)
        ]);

        Utilisateur::factory(9)->create();
    }
}
