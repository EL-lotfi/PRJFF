<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Requete;
use App\Models\Module;
use App\Models\Deploiment;

class Serveur extends Model
{
    use HasFactory;
    protected $primaryKey = 'idServeur';
    

    protected $fillable = [
        'typeServeur',
        'typeConnexion',
        'host',
        'dbName',
        'username',
        'password'
    ];

    public function modules()
    {
        return $this->belongsToMany(Module::class,'module_serveur','idServeur','idModule')
                    ->withPivot('intitule');
    }

    public function requetes()
    {
        return $this->belongsToMany(Requete::class,'deploiment_requete_serveur','idServeur','idRequete');
    }

    public function deploiments()
    {
        return $this->belongsTo(Deploiment::class);
    }
};

