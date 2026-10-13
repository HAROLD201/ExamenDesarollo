<?php

namespace App\Http\Controllers;

use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        return response()->json(
            Pedido::with([
                'cliente',
                'empleado',
                'detalles.producto'
            ])->get()
        );
    }
}
