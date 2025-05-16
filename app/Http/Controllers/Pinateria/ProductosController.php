<?php

namespace App\Http\Controllers\Pinateria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pinateria\Producto;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::with('precios.tamano', 'precios.presentacion', 'imagenes', 'garantia', 'marca', 'categoria', 'atributos.valores')->paginate(30);

        // dd($productos->toArray());

        return view('pinateria.gestion.productos.index', ['productos' => $productos]);
    }
}
