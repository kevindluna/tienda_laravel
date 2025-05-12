
<?php $__env->startSection('content'); ?>

    <!-- CARRUSEL -->
    <section class="carousel-container">
        <div class="carousel-track" id="carouselTrack">
            <img src="../img/pinateria/Carousel/1.png" alt="Promoción 1">
            <img src="../img/pinateria/Carousel/7.png" alt="Promoción 2">
            <img src="../img/pinateria/Carousel/6.png" alt="Promoción 3">
            <img src="../img/pinateria/Carousel/1.png" alt="Promoción 4">
        </div>
    </section>
    

    <!-- PROMOCIONES -->
    <section class="promociones container">
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


    
    <?php echo $__env->make('includes.categoria', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appCacharreria', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Tienda-Laravel\resources\views/cacharreria/index.blade.php ENDPATH**/ ?>