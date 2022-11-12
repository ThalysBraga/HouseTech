<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varal extends Model
{
    use HasFactory;

    protected $table = 'Varais';

    protected $fillable = [
        'nome',
        'grupo',
        'tamanho',
        'status'
    ];
}
