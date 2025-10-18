<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Programa extends Model
{
    use HasFactory;

    protected $table = 'programas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'modalidad',
        'horario',
        'fecha_inicio',
        'fecha_fin',
        'cronograma',
        'activo',
    ];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
    ];

    public function ventas(): HasMany
    {
        return $this->hasMany(Venta::class, 'programa_id');
    }
}
