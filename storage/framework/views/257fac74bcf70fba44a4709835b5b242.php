
<?php $__env->startSection('content'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/producto.css', 'resources/js/producto.js']); ?>
    <section class="container container-producto">

        <div class="row">
            <div class="col-md-6 imgs-product">
                <div class="d-flex flex-column thumbnail_container">
                    <?php $__currentLoopData = $producto->imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mini-img mb-3">
                            <?php if($loop->first): ?>
                                <img class="thumbnail active" src="<?php echo e(asset('img/pinateria/productos/' . $imagen->url_imagen)); ?>"
                                    alt="<?php echo e($imagen->url_imagen); ?>">
                            <?php else: ?>
                                <img class="thumbnail" src="<?php echo e(asset('img/pinateria/productos/' . $imagen->url_imagen)); ?>"
                                    alt="<?php echo e($imagen->url_imagen); ?>">
                            <?php endif; ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="product-img">
                    <img class="main-img" src="<?php echo e(asset('img/pinateria/productos/' . $producto->imagenes->first()->url_imagen)); ?>"
                        alt="<?php echo e($producto->nombre); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-info">
                    <h2><?php echo e($producto->nombre); ?></h2>
                    <p><?php echo e($producto->descripcion); ?></p>
                    <p>Codigo: <?php echo e($producto->codigo); ?></p>

                    Tamaños:
                    <div class="mt-1 mb-3 mx-0 d-flex" id="tamanos">
                        <?php $__currentLoopData = $producto->precios->sortBy(function ($precio) {
                return (int) preg_replace('/\D/', '', $precio->tamano->nombre);
            })->unique('id_tamano'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $precio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop->first): ?>
                                <button id="btnTamano[<?php echo e($index); ?>]" name="btnTamano[<?php echo e($index); ?>]"
                                    class="btn-pm me-2 btn-pm-active btn-tamano"><?php echo e($precio->tamano->nombre); ?></button>
                            <?php else: ?>
                                <button id="btnTamano[<?php echo e($index); ?>]" name="btnTamano[<?php echo e($index); ?>]"
                                    class="btn-pm me-2 btn-tamano"><?php echo e($precio->tamano->nombre); ?></button>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    Presentaciones:
                    <div class="mt-1 mb-3 mx-0 d-flex" id="presentaciones">
                        <?php $__currentLoopData = $producto->precios->sortBy(function ($precio) {
                return (int) preg_replace('/\D/', '', $precio->presentacion->nombre);
            })->unique('id_presentacion'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $precio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop->first): ?>
                                <button id="btnPresentacion[<?php echo e($index); ?>]"
                                    name="btnPresentacion[<?php echo e($index); ?>]"
                                    class="btn-pm btn-presentacion me-2 btn-pm-active"><?php echo e($precio->presentacion->nombre); ?></button>
                            <?php else: ?>
                                <button id="btnPresentacion[<?php echo e($index); ?>]"
                                    name="btnPresentacion[<?php echo e($index); ?>]"
                                    class="btn-pm btn-presentacion me-2"><?php echo e($precio->presentacion->nombre); ?></button>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <h3 class="">$ <?php echo e(number_format($producto->precios->first()->precio_actual, 0)); ?></h3>

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
    <?php echo $__env->make('includes.productos', ['cantidad' => 4], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script>
        window.producto = <?php echo json_encode($producto, 15, 512) ?>;
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appPinateria', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Tienda-Laravel\resources\views/pinateria/producto.blade.php ENDPATH**/ ?>