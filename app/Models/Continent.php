<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla con la cual el modelo se relaciona
    protected $table = "continents";
    //La clave primara de la tabla
    protected $primaryKey = "continent_id";
    //Anular campos de auditoria
    public $timestamps = false;
    use HasFactory;
}
