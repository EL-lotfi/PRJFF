<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Serveur;
use App\Models\Module;

class deploiment extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all Serveurs and Modules
        $serveurs = Serveur::all();
        $modules = Module::all();

        // Loop through each Serveur
        foreach ($serveurs as $serveur) {
            // Get random module IDs
            $randomModuleIds = $modules->random(rand(1, $modules->count()))->pluck('id')->toArray();
            // Attach modules to the current serveur
            $serveur->modules()->attach($randomModuleIds);
        }
    }

}
