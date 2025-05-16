@vite(['resources/css/productos.css'])
<section class="productos container">
    <h2 class="text-center">Productos</h2>
    <div class="row">
        @foreach ($productos->take($cantidad) as $producto)
            <div class="col-lg-3 col-sm-6 p-2 ">
                <a href="{{ route('pinateria.producto', ['codigo' => $producto->codigo, 'nombre' => $producto->nombre]) }}" class="btn-producto">
                    <div class="producto">
                        <img src="{{ asset('img/pinateria/productos/' . $producto->imagenes->first()->url_imagen) }}" alt="{{ $producto->nombre }}"
                            alt="{{ $producto->nombre }}">
                        <div class="producto-info">
                            {{ $producto->nombre }}
                            <h5 class="align-middle">$
                                {{ number_format($producto->precios->first()->precio_actual, 0) }}
                            </h5>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success">Comprar ahora</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
