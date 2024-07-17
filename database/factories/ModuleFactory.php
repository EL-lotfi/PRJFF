<?php

namespace Database\Factories;

use App\Models\Module;
use App\Models\Serveur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
        // Get random server ID from existing servers
        $noms = [
            "CRM",
            "GESAPP",            
        ];
        return [
            'nomModule' => fake()->randomElement($noms) . fake()->randomNumber(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
