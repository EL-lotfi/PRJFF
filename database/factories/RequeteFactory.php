<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Version;
use App\Models\User;
use App\Models\Requete;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequeteFactory extends Factory
{
    protected $model = Requete::class;
    
    public function definition()
    {
        $userId = User::inRandomOrder()->value('idUser');
        $versionId = Version::inRandomOrder()->value('idVersion');
        $moduleId = Module::inRandomOrder()->value('idModule');
        $sqltypes = [
            'CREATE TABLE IF NOT EXISTS employes (id INT PRIMARY KEY, name VARCHAR(100), position VARCHAR(100), salary DECIMAL(10, 2))',
            'SELECT * FROM employes',
            "INSERT INTO employes (id, name, position, salary) VALUES (1, 'fatima', 'lotfi', 75000.00); ",
            "INSERT INTO employes (id, name, position, salary) VALUES (2, 'yasser', 'tamasty', 68000.00);",
            "INSERT INTO employes (id, name, position, salary) VALUES (3, 'aymen', 'khelladi', 70000.00);",
            "UPDATE employes SET name = 'Khaled', position = 'Modir Qesm' WHERE id = 1;",
            "UPDATE employes SET salary = 72000.00 WHERE id = 2;",
            "DELETE FROM employes WHERE id = 2;",
            "CREATE INDEX idx_employes_name ON employes(name);",
            "ALTER TABLE employes ADD COLUMN hire_date DATE;",
            "DROP TABLE employes;",
            "SELECT name, position FROM employes WHERE salary > 70000;"
        ];

        return [
            'idUser' => $userId,
            'idModule' => $moduleId,
            'idVersion' => $versionId,
            'requetesSql' => $this->faker->randomElement($sqltypes),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
        
    }
}
