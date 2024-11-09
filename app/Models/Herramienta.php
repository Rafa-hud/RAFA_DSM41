<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    use HasFactory;
    protected $table = 'herramientas';

    protected $fillable = ['nombre', 'descripcion', 'cantidad', 'disponible']; //campos que se pueden llenar
    
}
