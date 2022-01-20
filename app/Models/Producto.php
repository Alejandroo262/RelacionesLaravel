<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'pais_origen'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token',
    ];

    public function relacion1a1(){
        return $this->hasOne(Cliente::class);
    }
}
