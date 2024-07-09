<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deploiment extends Model
{
    use HasFactory;
    protected $fillable=[
        'typeDep',
        'listToDo',
        'descr'
    ];

    protected $casts = [
        'listToDo' => 'array',
    ];

    


}
