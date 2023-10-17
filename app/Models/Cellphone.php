<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cellphone extends Model
{
    use HasFactory;

    // Primary Key
    protected $primaryKey = 'id_cellphone';

    protected $fillable = [
        'referencia',
        'marca',
        'tamano_pantalla',
        'resolucion',
        'marca_procesador',
        'velocidad_procesador',
        'memoria_ram',
        'memoria_interna',
        'precio',
        'descuento'
    ];
}
