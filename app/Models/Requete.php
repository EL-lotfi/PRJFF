<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Version;
use App\Models\Module;
use App\Models\Requete;
use App\Models\Serveur;


class Requete extends Model
{
    use HasFactory;
    protected $primaryKey = 'idRequete';

    protected $fillable = [
        'requetesSql',
    ];
    
    public function user()
    {
      return $this->belongsTo(User::class, 'idUser');
    }

    public function module()
    {
      return $this->belongsTo(Module::class, 'idModule');
    }

    public function version()
    {
        return $this->belongsTo(Version::class,'idVersion');
    }

    public function serveurs()
    {
        return $this->belongsToMany(Serveur::class,'deploiments','idRequete','idServeur')
                    ->withPivot('typeDep','listToDo','descr');
    }
    
}
