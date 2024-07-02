<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deploiment;
use App\Models\Requete;
use App\Models\Module;
use App\Models\Version;



class Serveur extends Model
{
    use HasFactory;
    protected $primaryKey = 'idServeur';
    

    protected $fillable = [
        'intitule',
        'type',
        'host',
        'dbName',
        'username',
        'password'
    ];

    public function module()
    {
        return $this->belongsToMany(Module::class,'module_serveur', 'idModule', 'idServeur')
                    ->withPivot('intitule');
    }
   
};

