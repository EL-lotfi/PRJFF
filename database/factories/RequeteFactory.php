<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Requete;
use App\Models\Version;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequeteFactory extends Factory
{
    protected $model = Requete::class;
    
    public function definition()
    {
        $versionId = Version::inRandomOrder()->value('idVersion');
        $userId = User::inRandomOrder()->value('idUser');
        return [
            'idUser' => $userId,
            'requetesSql' => $this->faker->sentence(), 
            'idVersion' => $versionId
        ];
    }
}
