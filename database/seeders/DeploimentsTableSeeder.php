<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Serveur;
use App\Models\Requete;
use App\Models\Deploiment;

class DeploimentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all Serveurs
        $serveurs = Serveur::all();
    
        // Get all Requetes
        $requetes = Requete::all();
    
        // Loop to create multiple Deploiements
        for ($i = 0; $i < 20; $i++) {
            // Create a new Deploiment record
            $deploiment = Deploiment::create([
                'typeDep' => $this->randomElement(['Manuel', 'Automatique']),
                'listToDo' => json_encode($this->randomElement([
                    [
                        [
                            'title' => 'Vérifier les tests unitaires',
                            'description' => 'S\'assurer que tous les tests unitaires passent sans erreur'
                        ],
                        [
                            'title' => 'Mettre à jour la documentation',
                            'description' => 'Vérifier et mettre à jour la documentation technique et utilisateur'
                        ],
                        [
                            'title' => 'Sauvegarder la base de données',
                            'description' => 'Effectuer une sauvegarde complète de la base de données'
                        ]
                    ],
                    [
                        [
                            'title' => 'Configurer l\'environnement de production',
                            'description' => 'Configurer les variables d\'environnement et les paramètres de production'
                        ],
                        [
                            'title' => 'Vérifier les performances',
                            'description' => 'Effectuer des tests de performance pour s\'assurer que l\'application répond aux critères de performance'
                        ],
                        [
                            'title' => 'Notifier les utilisateurs',
                            'description' => 'Informer les utilisateurs du déploiement imminent et de tout impact potentiel'
                        ]
                    ]
                ])), // Ensure JSON encoding
                'descr' => $this->randomElement([
                    'concerne la table ventes',
                    'concerne la table appartement',
                    'concerne la table produits',
                    'concerne les tables appartements, ventes',
                    'concerne la table users',
                    'concerne la table des taches'
                ]),
            ]);
        }
    }
    
    private function randomElement($array)
    {
        return $array[array_rand($array)];
    }
}