<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Serveur;
use App\Models\Requete;

class Deploiment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    use HasFactory;
    
    protected $primaryKey = 'idDeploiment';

    protected $fillable = [
        'typeDep',
        'listToDo',
        'descr'
    ];

    protected $casts = [
        'listToDo' => 'array',
    ];

    public function serveurs()
    {
        return $this->belongsToMany(Serveur::class, 'deploiment_requete_serveur','idDeploiment','idServeur');
    }

    public function requetes()
    {
        return $this->belongsToMany(Requete::class, 'deploiment_requete_serveur','idDeploiment','idRequete');
    }
}
