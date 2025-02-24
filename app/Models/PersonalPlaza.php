<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalPlaza extends Model
{
    /** @use HasFactory<\Database\Factories\PersonalPlazaFactory> */
    use HasFactory;
    protected $fillable = 
    ['tipoNombramiento','idPlaza','RFC'];
    protected $primaryKey = 'idPlazaPersonal';
}
