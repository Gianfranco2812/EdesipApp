<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    protected $fillable = [
        'cliente_id',
        'asesor_id',
        'programa_id',
        'estado',
        'comentarios_cierre',
        'fecha_venta',
        'total',
        'numero_cuotas',
        'matricula_pagada',
    ];

    protected $casts = [
        'fecha_venta' => 'datetime',
        'fecha_registro' => 'datetime',
        'matricula_pagada' => 'boolean',
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(ProspectoCliente::class, 'cliente_id');
    }

    public function asesor(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'asesor_id');
    }

    public function programa(): BelongsTo
    {
        return $this->belongsTo(Programa::class, 'programa_id');
    }

    public function cuotas(): HasMany
    {
        return $this->hasMany(Cuota::class, 'venta_id');
    }
}
