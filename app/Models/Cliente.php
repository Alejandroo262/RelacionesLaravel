<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cliente extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'email',
        'password',
        'remember_token'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token',
    ];

    public function relacion1aN(){
        return $this->hasMany(Producto::class);
    }
}
