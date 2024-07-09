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
        $serveurTypes =[
            'Database Server',
            'Chat Server',
            'BuckUp Server',
        ];

        $connexiontypes =[
            'sqlsrv',
            'mysql',
            'pgsql',
            'sqlite',
        ];
        $dbNames =[
            'dbTest',
            'db1',
            'Gesimmo',
        ];
        $dbNames = [
            'dbTest',
            'db1',
            'Gesimmo',
            'test_db',         
            'production',     
            'development',     
            'staging',         
            'inventory_db',    
            'sales_db',       
            'customer_db',     
            'employee_db',     
            'finance_db',     
            'analytics_db',    
            'marketing_db',  
            'support_db',     
            'project_db',   
            'education_db',    
            'retail_db',       
            'ecommerce_db',
            'hr_db',   
            'research_db',    
            'logistics_db',    
            'realestate_db',  
            'events_db',       
        ];
        
        $users =[
            'user',
            'owner',
        ];
        
        return [
            'typeServeur'=>fake()->randomElement($serveurTypes),
            'typeConnexion'=>fake()->randomElement($connexiontypes),
            'dbName' => fake()->randomElement(),
            'host' => fake()->ipv4,
            'username'=>fake()->name(),
            'password'=>0000,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }

    private function randomElement($array)
    {
        return $array[array_rand($array)];
    }
}
