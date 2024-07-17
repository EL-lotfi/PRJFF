<?php
namespace Database\Factories;

use App\Models\Serveur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServeurFactory extends Factory
{
    protected $model = Serveur::class;

    public function definition()
    {
        $serveurTypes = [
            'Database Server',
            'Chat Server',
            'Backup Server',
        ];

        $connexionTypes = [
            'sqlsrv',
            'mysql',
            'pgsql',
            'sqlite',
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

        $users = [
            'user',
            'admin',
        ];

        return [
            'nomServeur'=>"Serveur".$this->faker->randomNumber(),
            'typeServeur' => $this->faker->randomElement($serveurTypes),
            'typeConnexion' => $this->faker->randomElement($connexionTypes),
            'dbName' => $this->faker->randomElement($dbNames),
            'host' => $this->faker->ipv4,
            'username' => $this->faker->randomElement($users) . $this->faker->randomNumber(),
            'password' => '0000',
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
