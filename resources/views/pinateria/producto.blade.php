@extends('layouts.appPinateria')
@section('content')
    @vite(['resources/css/producto.css', 'resources/js/producto.js'])
    <section class="container container-producto">

        <div class="row">
            <div class="col-md-6 imgs-product">
                <div class="d-flex flex-column thumbnail_container">
                    @foreach ($producto->imagenes as $imagen)
                        <div class="mini-img mb-3">
                            @if ($loop->first)
                                <img class="thumbnail active" src="{{ asset('img/pinateria/productos/' . $imagen->url_imagen) }}"
                                    alt="{{ $imagen->url_imagen }}">
                            @else
                                <img class="thumbnail" src="{{ asset('img/pinateria/productos/' . $imagen->url_imagen) }}"
                                    alt="{{ $imagen->url_imagen }}">
                            @endif

                        </div>
                    @endforeach
                </div>
                <div class="product-img">
                    <img class="main-img" src="{{ asset('img/pinateria/productos/' . $producto->imagenes->first()->url_imagen) }}"
                        alt="{{ $producto->nombre }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-info">
                    <h2>{{ $producto->nombre }}</h2>
                    <p>{{ $producto->descripcion }}</p>
                    <p>Codigo: {{ $producto->codigo }}</p>

                    Tamaños:
                    <div class="mt-1 mb-3 mx-0 d-flex" id="tamanos">
                        @foreach ($producto->precios->sortBy(function ($precio) {
                return (int) preg_replace('/\D/', '', $precio->tamano->nombre);
            })->unique('id_tamano') as $index => $precio)
                            @if ($loop->first)
                                <button id="btnTamano[{{ $index }}]" name="btnTamano[{{ $index }}]"
                                    class="btn-pm me-2 btn-pm-active btn-tamano">{{ $precio->tamano->nombre }}</button>
                            @else
                                <button id="btnTamano[{{ $index }}]" name="btnTamano[{{ $index }}]"
                                    class="btn-pm me-2 btn-tamano">{{ $precio->tamano->nombre }}</button>
                            @endif
                        @endforeach
                    </div>

                    Presentaciones:
                    <div class="mt-1 mb-3 mx-0 d-flex" id="presentaciones">
                        @foreach ($producto->precios->sortBy(function ($precio) {
                return (int) preg_replace('/\D/', '', $precio->presentacion->nombre);
            })->unique('id_presentacion') as $index => $precio)
                            @if ($loop->first)
                                <button id="btnPresentacion[{{ $index }}]"
                                    name="btnPresentacion[{{ $index }}]"
                                    class="btn-pm btn-presentacion me-2 btn-pm-active">{{ $precio->presentacion->nombre }}</button>
                            @else
                                <button id="btnPresentacion[{{ $index }}]"
                                    name="btnPresentacion[{{ $index }}]"
                                    class="btn-pm btn-presentacion me-2">{{ $precio->presentacion->nombre }}</button>
                            @endif
                        @endforeach
                    </div>

                    <h3 class="">$ {{ number_format($producto->precios->first()->precio_actual, 0) }}</h3>

                    <div class="d-grid gap-2 d-flex">
                        <span class="input-wrapper w-25">
                            <button id="decrement" onclick="decrementQuantity()">-</button>
                            <input type="number" value="1" id="quantity" />
                            <button id="increment" onclick="incrementQuantity()">+</button>
                        </span>
                        <button class="btn-compra w-75">Comprar ahora</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTOS -->
    @include('includes.productos', ['cantidad' => 4])

    <script>
        window.producto = @json($producto);
    </script>
@endsection
