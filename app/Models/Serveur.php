<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Requete;
use App\Models\Module;

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
        return $this->belongsToMany(Module::class,'module_serveur','idModule','idServeur')
                    ->withPivot('intitule');
    }

    public function requetes()
    {
        return $this->belongsToMany(Requete::class,'deploiments','idRequete','idServeur')
                    ->withPivot('typeDep','listToDo','descr');
    }  
};

