<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Serveur;
use App\Models\Version;

class Module extends Model
{
    use HasFactory;
    protected $primaryKey = 'idModule';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nomModule',
    ];
    public function server()
    {
        return $this->belongsToMany(Serveur::class,'module_serveur', 'idModule', 'idServeur')
                    ->withPivot('intitule');

    }

    public function versions()
    {
        return $this->hasMany(Version::class,'idVersion');
    }

}
