<?php

namespace App\Http\Controllers;

use App\Models\Material;

class MaterialesController extends Controller
{
    public function index()
    {
        return response()->json(
            Material::with('proveedor')->get()
        );
    }
}
