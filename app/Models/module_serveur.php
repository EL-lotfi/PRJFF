<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module_serveur extends Model
{
    use HasFactory;
    protected $table =  'module_serveur';
    protected $fillable = [
        'intitule',
    ];

}
