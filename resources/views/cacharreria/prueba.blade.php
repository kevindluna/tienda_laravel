@foreach ($productos as $producto)
    <div class="producto">
        <div class="descuento-etiqueta">{{ $producto->Descuento->descuento }}%</div>

        <img src="../img/pinateria/descuentos/" alt="{{ $producto->Nombre }}">

        <h3>{{ $producto->Nombre }}</h3>
        <p>{{ $producto->Descripcion }}</p>
        <button class="comprar-btn">Comprar ahora</button>
    </div>
@endforeach