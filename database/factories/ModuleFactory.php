<?php

namespace Database\Factories;

use App\Models\Module;
use App\Models\Serveur;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
        // Get random server ID from existing servers
        return [
            'nomModule' => $this->faker->word(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
