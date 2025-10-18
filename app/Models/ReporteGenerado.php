<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReporteGenerado extends Model
{
    use HasFactory;

    protected $table = 'reportes_generados';

    protected $fillable = [
        'usuario_id',
        'tipo_reporte',
        'formato',
        'fecha_generacion',
    ];

    protected $casts = [
        'fecha_generacion' => 'datetime',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
