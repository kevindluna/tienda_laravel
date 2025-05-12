@vite(['resources/css/productos.css'])
<section class="productos container">
    <h2 class="text-center">Productos</h2>
    <div class="row">
        @foreach ($productos->take($cantidad) as $producto)
            <div class="col-lg-3 col-sm-6 p-2 ">
                <a href="" class="btn-producto">
                    <div class="producto">
                        <img src="../img/pinateria/descuentos/{{ $producto->ImagenRuta }}" alt="{{ $producto->Nombre }}">
                        <div class="producto-info">
                            {{ $producto->Nombre }}
                            <h5 class="align-middle">$ Precio</h5>
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
