<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Importante para login
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'password',
        'rol_id',
        'activo'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_registro' => 'datetime',
    ];

    // === Relaciones ===

    public function rol(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'rol_id');
    }

    public function prospectos(): HasMany
    {
        return $this->hasMany(ProspectoCliente::class, 'asesor_id');
    }

    public function ventas(): HasMany
    {
        return $this->hasMany(Venta::class, 'asesor_id');
    }

    public function validaciones(): HasMany
    {
        return $this->hasMany(Cuota::class, 'validado_por');
    }
}
