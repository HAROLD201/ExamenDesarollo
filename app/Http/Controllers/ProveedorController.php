<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        return response()->json(
            Proveedor::with('materiales')->get()
        );
    }
}
