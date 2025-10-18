<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cuota extends Model
{
    use HasFactory;

    protected $table = 'cuotas';

    protected $fillable = [
        'venta_id',
        'numero_cuota',
        'monto',
        'fecha_vencimiento',
        'estado',
        'comprobante_url',
        'medio_pago',
        'fecha_pago',
        'validado_por',
        'observacion',
    ];

    protected $casts = [
        'fecha_vencimiento' => 'date',
        'fecha_pago' => 'datetime',
    ];

    public function venta(): BelongsTo
    {
        return $this->belongsTo(Venta::class, 'venta_id');
    }

    public function validador(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'validado_por');
    }
}
