@extends('layouts.appPinateria')
@section('content')
    @vite(['resources/css/productos.css'])
    <section class="productos">

        <div class="row">

            <h2 class="text-center">Productos</h2>
            <div class="col-xl-3 col-sm-12">
                <h3>Filtros</h3>
                @foreach ($atributos as $atributo)
                    <h4>{{ $atributo->nombre }}</h4>
                    <div class="row m-0">
                        @foreach ($atributo->valores as $index => $valor)
                            <div class="filtroValor col-6">
                                <input type="checkbox" name="valor[{{ $index }}]" id="valor[{{ $index }}]">
                                <label for="valor[{{ $index }}]">{{ $valor->valor }}</label>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                <h4>Tamaños</h4>
                <div class="row m-0">
                    @foreach ($medidas as $index => $medida)
                        <div class="filtroValor col-6">
                            <input type="checkbox" name="medida[{{ $index }}]" id="medida[{{ $index }}]">
                            <label for="medida[{{ $index }}]">{{ $medida->nombre }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-xl-9 col-sm-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient’s username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-secondary" type="button" id="button-addon2">🔎</button>
                </div>

                <div class="row">
                    @foreach ($productos as $producto)
                        <div class="col-lg-3 col-sm-6 p-2 ">
                            <a href="{{ route('pinateria.producto', ['codigo' => $producto->codigo, 'nombre' => $producto->nombre]) }}"
                                class="btn-producto">
                                <div class="producto">
                                    <img src="{{ asset('img/pinateria/productos/' . $producto->imagenes->first()->url_imagen) }}"
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
            </div>
        </div>
        <div class="p-2 d-flex justify-content-center">
            {{ $productos->links() }}
        </div>
    </section>
@endsection
