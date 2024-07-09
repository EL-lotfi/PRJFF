<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Serveur;
use App\Models\Requete;
use App\Models\Deploiment;

class DeploimentsTableSeeder extends Seeder
{
    protected $model = Deploiment::class;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all Serveurs and Requetes
        $serveurs = Serveur::all();
        $requetes = Requete::all();

        // Descriptions, To-Do lists, and deployment types
        $descs = [
            'concerne la table ventes',
            'concerne la table appartement',
            'concerne la table produits',
            'concerne les tables appartements, ventes',
            'concerne la table users',
            'concerne la table des taches'
        ];

        $todoLists = [
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
        ];

        $typesDep = [
            'Manuel',
            'Automatique'
        ];

        // Loop through each Serveur
        foreach ($serveurs as $serveur) {
            // Get random Requete IDs
            $randomRequeteIds = $requetes->random(rand(1, $requetes->count()))->pluck('idRequete')->toArray();

            $attachData = [];

            foreach ($randomRequeteIds as $requeteId) {
                if (!$serveur->requetes->contains($requeteId)) {
                    $attachData[$requeteId] = [
                        'typeDep' => $this->randomElement($typesDep),
                        'listToDo' => json_encode($this->randomElement($todoLists)), // Ensure JSON encoding
                        'descr' => $this->randomElement($descs),
                    ];
                }
            }

            if (!empty($attachData)) {
                $serveur->requetes()->attach($attachData);
            }
        }
    }

    private function randomElement($array)
    {
        return $array[array_rand($array)];
    }
}