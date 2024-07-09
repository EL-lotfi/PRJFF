<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Serveur;
use App\Models\Module;
use App\Models\Deploiment;
use App\Models\module_serveur;

class ModuleserveurTableSeeder extends Seeder
{
    protected $model = module_serveur::class;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serveurs = Serveur::all();
        $modules = Module::all();

        $counter = 1;

        foreach ($serveurs as $serveur) {
            $randomModuleIds = $modules->random(rand(1, $modules->count()))->pluck('idModule')->toArray();
            $attachData = [];
            foreach ($randomModuleIds as $moduleId) {
                if (!$serveur->modules->contains($moduleId)) {
                    $attachData[$moduleId] = [
                        'intitule' => 'hebergementTest' . $counter,
                    ];
                    $counter++;
                }
            }

            if (!empty($attachData)) {
                $serveur->modules()->attach($attachData);
            }
        }
    }
    
    private function randomElement($array)
    {
        return $array[array_rand($array)];
    }
}


