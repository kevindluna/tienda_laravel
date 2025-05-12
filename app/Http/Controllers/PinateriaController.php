<?php

namespace App\Http\Controllers;

use App\Models\Pinateria\Producto;
use Illuminate\Http\Request;

class PinateriaController extends Controller
{
    public function index()
    {
        $productos = Producto::join('descuentos', 'productos.codigo', '=', 'descuentos.producto_codigo')
            ->where('descuentos.porcentaje', '>', 1)
            ->select('productos.*', 'descuentos.porcentaje')
            ->limit(15)
            ->get();
        //dd($productos->toArray());
        return view('pinateria/index', ['productos' => $productos]);
    }

    public function viewProducts()
    {
        $productos = Producto::paginate(20);

        return view('pinateria/productos', ['productos' => $productos]);
    }
}
