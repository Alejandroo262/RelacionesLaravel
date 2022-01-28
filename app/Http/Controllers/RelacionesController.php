<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class RelacionesController extends Controller
{
    public function getClientes(Request $request, $id){
        return Asignatura::find($id)->toJson();
    }
}
