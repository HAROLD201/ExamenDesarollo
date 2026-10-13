<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
        return response()->json(
            Empleado::with('pedidos')->get()
        );
    }
}
