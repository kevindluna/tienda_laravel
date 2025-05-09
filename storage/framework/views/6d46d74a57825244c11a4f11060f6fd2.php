
<?php $__env->startSection('content'); ?>

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
        <div class="promo-item">⚽</div>
        <div class="promo-item">🎲</div>
        <div class="promo-item">🔨</div>
        <div class="promo-item">🧸</div>
        <div class="promo-item">📦</div>
        <div class="promo-item">📓</div>
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

<section class="productos">
    <h2>Productos</h2>
    <div class="row">
        <div class="col-lg-9 col-sm-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient’s username"
                    aria-describedby="button-addon2">
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
        <div class="col-lg-3 col-sm-6 p-2 ">
            <a href="" class="btn-producto">
                <div class="producto">
                    <img src="../img/cacharreria/bolso.jpg" alt="imagen producto">
                    <div class="producto-info">
                        Bolso azul mediano
                        <h5 class="align-middle">$ 45.000</h5>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success">Comprar ahora</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 p-2 ">
            <a href="" class="btn-producto">
                <div class="producto">
                    <img src="../img/cacharreria/juguete1.jpg" alt="imagen producto">
                    <div class="producto-info">
                        Build Express Playset
                        <h5>$ 25.000</h5>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success">Comprar ahora</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 p-2 ">
            <a href="" class="btn-producto">
                <div class="producto">
                    <img src="../img/cacharreria/escoba.jpg" alt="imagen producto">
                    <div class="producto-info">
                        Escoba azul
                        <h5>$ 9.000</h5>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success">Comprar ahora</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 p-2 ">
            <a href="" class="btn-producto">
                <div class="producto">
                    <img src="../img/cacharreria/juguete1.jpg" alt="imagen producto">
                    <div class="producto-info">
                        Build Express Playset
                        <h5>$ 25.000</h5>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success">Comprar ahora</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- CATEGORIAS -->
<section class="container py-5">
    <h2 class="text-center p-2">Encuentra todo lo que <b>necesites</b></h2>

    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-3">
            <div class="category-card"
                style="background-image: url('../img/cacharreria/Categoria/1.jpg'); background-size: cover; background-position: center;">
                <div class="category-overlay">
                    <b>Utensilios para la cocina</b>
                    <ul class="category-list">
                        <li>Ollas</li>
                        <li>Sartenes</li>
                        <li>Cucharas de madera</li>
                        <li>Cucharas de metal</li>
                        <li>Cuchillos</li>
                        <li>Platos</li>
                        <li>Moldes</li>
                        <li>Tablas para cortar</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3">
            <div class="category-card"
                style="background-image: url('../img/cacharreria/Categoria/2.jpg'); background-size: cover; background-position: center;">
                <div class="category-overlay">
                    <b>Juegeteria</b>
                    <ul class="category-list">
                        <li>Figuras de acción</li>
                        <li>Carros</li>
                        <li>Muñecas</li>
                        <li>Balones</li>
                        <li>Cometas</li>
                        <li>Juegos de mesa</li>
                        <li>Peluches</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3">
            <div class="category-card"
                style="background-image: url('../img/cacharreria/Categoria/3.jpg'); background-size: cover; background-position: center;">
                <div class="category-overlay">
                    <b>Por temporada</b>
                    <ul class="category-list">
                        <li>Inicio escolar</li>
                        <li>Navidad</li>
                        <li>Halloween</li>
                        <li>Día de la Madre</li>
                        <li>San Valentín</li>
                        <li>Amor y Amistad</li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3">
            <div class="category-card"
                style="background-image: url('../img/cacharreria/Categoria/4.jpg'); background-size: cover; background-position: center;">
                <div class="category-overlay">
                    <b>Y mucho mas...</b>
                    <ul class="category-list">
                        <li>Productos para el aseo</li>
                        <li>Ropa</li>
                        <li>Herramientas</li>
                        <li>Aparatos electronicos</li>
                        <li>*</li>
                        <li>*</li>
                        <li>*</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appCacharreria', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Tienda-Laravel\resources\views/cacharreria/index.blade.php ENDPATH**/ ?>