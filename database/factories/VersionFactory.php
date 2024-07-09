<?php

namespace Database\Factories;

use App\Models\Module;
use App\Models\Version;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class VersionFactory extends Factory
{
    protected $model = Version::class;

    public function definition()
    {
        // Get random module ID from existing modules
        $moduleId = Module::inRandomOrder()->value('idModule');

        return [
            'idModule' => $moduleId,
            'numVersion' => $this->faker->randomFloat(1, 1, 10),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
