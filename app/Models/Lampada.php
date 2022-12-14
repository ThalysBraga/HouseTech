<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampada extends Model
{
    use HasFactory;

    protected $table = 'Lampadas';

    protected $fillable = [
        'nome',
        'grupo',
        'descricao',
        'status'
    ];
}
