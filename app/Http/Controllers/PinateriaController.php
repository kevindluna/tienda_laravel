<?php

namespace App\Http\Controllers;

use App\Models\Pinateria\Atributo;
use App\Models\Pinateria\Producto;
use Illuminate\Http\Request;

class PinateriaController extends Controller
{
    public function index()
    {
        /*
        $productos = Producto::join('descuentos', 'productos.codigo', '=', 'descuentos.producto_codigo')
            ->where('descuentos.porcentaje', '>', 1)
            ->select('productos.*', 'descuentos.porcentaje')
            ->limit(15)
            ->get();
        */
        $productos = Producto::with('precios', 'imagenes')->join('descuentos', 'productos.codigo', '=', 'descuentos.producto_codigo')
        ->where('descuentos.porcentaje', '>', 1)
        ->limit(15)->get();

        // dd($productos->toArray());

        return view('pinateria/index', ['productos' => $productos]);
    }

    public function viewProducts()
    {
        $productos = Producto::with('precios', 'imagenes', 'atributos.valores')->paginate(20);

        $atributos = Atributo::with(relations: 'valores')->get();

        // dd($productos->toArray());

        // dd($atributos->toArray());

        return view('pinateria/productos', ['productos' => $productos, 'atributos' => $atributos]);
    }

    public function viewProduct($codigo)
    {
        $producto = Producto::with('precios', 'imagenes', 'garantia', 'marca', 'categoria')->where('codigo', $codigo)->first();
        
        // dd($producto->toArray());
        
        return view('pinateria/producto', ['producto' => $producto]);
    }
}
