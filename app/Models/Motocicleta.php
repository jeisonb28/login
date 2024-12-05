<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motocicleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nombre',
        'apellido',
        'cedula',
        'ciudad',
        'tipo_moto',
        'cilindraje',
        'kilometraje',
        'fecha_soat',
        'fecha_tecnomecanica',
        'expedicion_tarjeta',
        'estado_llantas',
        'estado_luces',
        'espejos',
        'bocina',
        'documentacion',
        'liquido_frenos',
        'aceite',
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}