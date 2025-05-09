@extends('layouts.appPinateria')
@section('content')
    <!-- CARRUSEL -->
    <section class="carousel-container">
        <div class="carousel-track" id="carouselTrack">
            <img src="../img/pinateria/Carousel/1.png" alt="Promoción 1">
            <img src="../img/pinateria/Carousel/7.png" alt="Promoción 2">
            <img src="../img/pinateria/Carousel/6.png" alt="Promoción 3">
            <img src="../img/pinateria/Carousel/1.png" alt="Promoción 4">
        </div>
        <button class="carousel-btn prev" onclick="prevSlide()">‹</button>
        <button class="carousel-btn next" onclick="nextSlide()">›</button>
    </section>

    <!-- PROMOCIONES -->
    <section class="promociones">
        <h2>Promociones</h2>
        <div class="promo-grid">
            <div class="promo-item" title="Decoración">🎉</div>
            <div class="promo-item" title="Globos">🎈</div>
            <div class="promo-item" title="Regalos">🎁</div>
            <div class="promo-item" title="Dulces">🍭</div>
            <div class="promo-item" title="Tortas">🎂</div>
            <div class="promo-item" title="Fiesta">🥳</div>
        </div>
    </section>

    <!-- DESTACADOS -->
    <section class="destacados">
        <h2>Descuentos Productos Más Comprados</h2>
        <div class="contenedor-destacados">
            <div class="destacado-grid">
                <div class="destacado-item">
                    <div class="promo-text">
                        <h3>Piñatas grandes</h3>
                        <p>¡Las más buscadas para cualquier celebración!</p>
                    </div>
                    <div class="promo-img">
                        <img src="../img/pinateria/Promociones/4.png" alt="Piñata">
                    </div>
                    <div class="promo-descuento">50%<span>DTO.</span></div>
                </div>

                <div class="destacado-item">
                    <div class="promo-text">
                        <h3>Globos metalizados</h3>
                        <p>Formas únicas y colores vibrantes.</p>
                    </div>
                    <div class="promo-img">
                        <img src="../img/pinateria/Promociones/1.png" alt="Globos">
                    </div>
                    <div class="promo-descuento">30%<span>DTO.</span></div>
                </div>

                <div class="destacado-item">
                    <div class="promo-text">
                        <h3>Guirnaldas decorativas</h3>
                        <p>Perfectas para ambientar tu fiesta.</p>
                    </div>
                    <div class="promo-img">
                        <img src="../img/pinateria/Promociones/2.png" alt="Guirnaldas">
                    </div>
                    <div class="promo-descuento">15%<span>DTO.</span></div>
                </div>

                <div class="destacado-item">
                    <div class="promo-text">
                        <h3>Velas mágicas</h3>
                        <p>Ideal para sorprender en cada pastel.</p>
                    </div>
                    <div class="promo-img">
                        <img src="../img/pinateria/Promociones/3.png" alt="Velas mágicas">
                    </div>
                    <div class="promo-descuento">20%<span>DTO.</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CARRUSEL DE PRODUCTOS -->
    <section class="productos-pinateria">
        <h2>Descuentos Piñatería </h2>

        <div class="slider-container">
            <button class="slider-btn prev" onclick="movePrev()">&#10094;</button>
            <div class="slider-viewport">
                <div class="slider-track row flex-nowrap " id="sliderTrack">
                    @foreach ($productos as $producto)
                        <div class="producto">
                            <div class="descuento-etiqueta">{{ $producto->Descuento->descuento }}%</div>

                            <img src="../img/pinateria/descuentos/" alt="{{ $producto->Nombre }}">

                            <h3>{{ $producto->Nombre }}</h3>
                            <p>{{ $producto->Descripcion }}</p>
                            <button class="comprar-btn">Comprar ahora</button>
                        </div>
                    @endforeach
                </div>
            </div>

            <button class="slider-btn next" onclick="moveNext()">&#10095;</button>
        </div>
    </section>

    <!-- CATEGORIAS -->
    <section class="container py-5">
        <h2 class="text-center p-2">Para todos tus <b>eventos</b></h2>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-3">
                <div class="category-card"
                    style="background-image: url('../img/pinateria/Categoria/1.jpg'); background-size: cover; background-position: center;">
                    <div class="category-overlay">
                        <b>Temporada</b>
                        <ul class="category-list">
                            <li>San Valentín</li>
                            <li>Día de la Mujer</li>
                            <li>Día de la Madre</li>
                            <li>Día del Padre</li>
                            <li>Amor y Amistad</li>
                            <li>Halloween</li>
                            <li>Navidad</li>
                            <li>Año Nuevo</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-3">
                <div class="category-card"
                    style="background-image: url('../img/pinateria/Categoria/2.jpg'); background-size: cover; background-position: center;">
                    <div class="category-overlay">
                        <b>Ocasión</b>
                        <ul class="category-list">
                            <li>Revelación Género</li>
                            <li>Baby Shower</li>
                            <li>Bautizo</li>
                            <li>Primera Comunión</li>
                            <li>Quince Años</li>
                            <li>Grados</li>
                            <li>Matrimonio</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-3">
                <div class="category-card"
                    style="background-image: url('../img/pinateria/Categoria/3.avif'); background-size: cover; background-position: center;">
                    <div class="category-overlay">
                        <b>Favoritos Niños</b>
                        <ul class="category-list">
                            <li>Paw Patrol</li>
                            <li>Dinosaurio</li>
                            <li>Festivo</li>
                            <li>Futbol</li>
                            <li>Terrazo Azul</li>
                            <li>Terrazo Rojo</li>
                            <li>Triángulos Azules</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-3">
                <div class="category-card"
                    style="background-image: url('../img/pinateria/Categoria/4.jpg'); background-size: cover; background-position: center;">
                    <div class="category-overlay">
                        <b>Favoritos Niñas</b>
                        <ul class="category-list">
                            <li>Paw Patrol</li>
                            <li>Acuarela</li>
                            <li>Arcoiris</li>
                            <li>Coronitas</li>
                            <li>Destello</li>
                            <li>Fashion Girl</li>
                            <li>Festival Pastel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
