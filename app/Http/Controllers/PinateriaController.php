<?php

namespace App\Http\Controllers;

use App\Models\Pinateria\Atributo;
use App\Models\Pinateria\Tamano;
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

        $medidas = Tamano::all();

        // dd($productos->toArray());

        // dd($atributos->toArray());

        // dd($medidas->toArray());

        return view('pinateria/productos', ['productos' => $productos, 'atributos' => $atributos, 'medidas' => $medidas]);
    }

    public function viewProduct($codigo)
    {
        $producto = Producto::with('precios.tamano', 'precios.presentacion', 'imagenes', 'garantia', 'marca', 'categoria')->where('codigo', $codigo)->first();

        $productoArray = $producto->toArray();

        // dd($producto->__tostring());
        
        return view('pinateria/producto', ['producto' => $producto, 'productoArray' => $productoArray]);
    }
}
