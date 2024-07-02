<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Requete;
use App\Models\Module;

class Version extends Model
{
    use HasFactory;

    protected $primaryKey = 'idVersion';

    protected $fillable = [
        'numVersion',
    ];
    
    public function module()
    {
        return $this->belongsTo(Module::class,'idModule');
    }
    public function requete()
    {
        return $this->hasMany(Requete::class, 'idRequete');
    }
}
