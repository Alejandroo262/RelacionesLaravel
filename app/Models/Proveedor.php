<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cif'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token',
    ];
}
