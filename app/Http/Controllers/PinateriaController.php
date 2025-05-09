<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class PinateriaController extends Controller
{
    public function index()
    {
        $productos = Producto::join('descuentos', 'productos.codigo', '=', 'descuentos.codigo')
            ->where('descuentos.descuento', '>', 1)
            ->select('productos.*', 'descuentos.descuento', 'descuentos.nombre as nombre_descuento')
            ->limit(15)
            ->get();
        //dd($productos->toArray());
        return view('pinateria/index', ['productos' => $productos]);
    }
}
