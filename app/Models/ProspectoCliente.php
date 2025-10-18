<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProspectoCliente extends Model
{
    use HasFactory;

    protected $table = 'prospectos_clientes';

    protected $fillable = [
        'tipo',
        'asesor_id',
        'nombre',
        'dni',
        'fecha_nacimiento',
        'edad',
        'genero',
        'telefono',
        'email',
        'direccion',
        'distrito_ciudad',
        'grado_estudio',
        'centro_educativo',
        'estado_general',
        'subestado',
        'comentarios',
        'contrato_url',
        'firma_tipo',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
        'fecha_registro' => 'datetime',
    ];

    public function asesor(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'asesor_id');
    }

    public function ventas(): HasMany
    {
        return $this->hasMany(Venta::class, 'cliente_id');
    }
}
