<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Reporte extends Model
{
    use HasFactory;

    protected $fillable = ['tipo_mascota', 'tipo_reporte', 'descripcion', 'ubicacion', 'estado', 'prioridad', 'ubicacion', 'user_id'];

    protected static function boot()
    {
        parent::boot();

        // Asignar un ID único anónimo al usuario si no está autenticado
        static::creating(function ($reporte) {
            if (!Auth::check()) {
                $reporte->user_id = Str::uuid();
            }
        });
    }
}
