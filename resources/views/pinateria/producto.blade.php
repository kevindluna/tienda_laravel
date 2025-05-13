@extends('layouts.appPinateria')
@section('content')
    @vite(['resources/css/producto.css'])
    <section class="container producto">

        <div class="row">
            <div class="col-md-6 imgs-product">
                <div class="d-flex flex-column">
                    @foreach ($producto->imagenes as $imagen)
                        <div class="mini-img mb-3">
                            <img src="../../../img/pinateria/descuentos/{{ $imagen->url_imagen }}"
                                alt="{{ $imagen->url_imagen }}">
                        </div>
                    @endforeach
                </div>
                <div class="product-img">
                    <img src="../../../img/pinateria/descuentos/{{ $producto->imagenes->first()->url_imagen }}"
                        alt="{{ $producto->nombre }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-info">
                    <h2>{{ $producto->nombre }}</h2>
                    <p>{{ $producto->descripcion }}</p>
                    <h3 class="">$ {{ number_format($producto->precios->precio_actual, 0) }}</h3>

                    <div class="d-grid gap-2 d-flex">
                        <span class="input-wrapper w-25">
                            <button id="decrement">-</button>
                            <input type="number" value="1" id="quantity" />
                            <button id="increment">+</button>
                        </span>
                        <button class="btn btn-success w-75">Comprar ahora</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
