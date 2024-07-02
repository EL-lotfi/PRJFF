<?php

namespace Database\Factories;

use App\Models\Serveur;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServeurFactory extends Factory
{
    protected $model = Serveur::class;


    public function definition()
    {
        return [
            'intitule'=>fake()->name(),
            'type' =>fake()->word(),
            'dbName' => fake()->word(),
            'host' => fake()->ipv4,
            'username'=>fake()->name(),
            'password'=>fake()->name()
        ];
    }
}
