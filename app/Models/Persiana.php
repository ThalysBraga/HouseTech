<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persiana extends Model
{
    use HasFactory;

    protected $table = 'Persianas';

    protected $fillable = [
        'nome',
        'tipo',
        'tamanho',
        'status'
    ];
}
