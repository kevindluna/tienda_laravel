@extends('layouts.appPinateria')
@section('content')
    @vite(['resources/css/productos.css'])
    <section class="productos container">

        <div class="row">

            <h2>Productos</h2>
            <div class="col-xl-2 col-sm-12">
                <b>Categorias</b>
                <div class="categorias">
                    <div class="categoria">
                        <input type="radio" name="" id=""><span>Juguetes</span>
                    </div>
                    <div class="categoria">
                        <input type="radio" name="" id=""><span>Herramientas</span>
                    </div>
                    <div class="categoria">
                        <input type="radio" name="" id=""><span>Ropa</span>
                    </div>
                    <div class="categoria">
                        <input type="radio" name="" id=""><span>Decoraciones</span>
                    </div>
                    <div class="categoria">
                        <input type="radio" name="" id=""><span>Electronicos</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-10 col-sm-12">
                <div class="row">
                    <div class="col-lg-9 col-sm-8">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar..."
                                aria-label="Recipient’s username" aria-describedby="button-addon2">
                            <button class="btn btn-secondary" type="button" id="button-addon2">🔎</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <select class="form-select" id="orderBySelect">
                            <option selected>Ordenar por...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    @foreach ($productos as $producto)
                        <div class="col-lg-3 col-sm-6 p-2 ">
                            <a href="" class="btn-producto">
                                <div class="producto">
                                    <img src="../img/pinateria/descuentos/{{ $producto->ImagenRuta }}"
                                        alt="{{ $producto->Nombre }}">
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
            </div>
        </div>
        <div class="p-2 d-flex justify-content-center">
            {{ $productos->links() }}
        </div>
    </section>
@endsection
