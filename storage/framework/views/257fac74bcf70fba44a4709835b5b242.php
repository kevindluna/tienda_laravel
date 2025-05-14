
<?php $__env->startSection('content'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/producto.css', 'resources/js/producto.js']); ?>
    <section class="container producto">

        <div class="row">
            <div class="col-md-6 imgs-product">
                <div class="d-flex flex-column">
                    <?php $__currentLoopData = $producto->imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mini-img mb-3">
                            <img src="../../../img/pinateria/descuentos/<?php echo e($imagen->url_imagen); ?>"
                                alt="<?php echo e($imagen->url_imagen); ?>">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="product-img">
                    <img src="../../../img/pinateria/descuentos/<?php echo e($producto->imagenes->first()->url_imagen); ?>"
                        alt="<?php echo e($producto->nombre); ?>">
                </div>



            </div>
            <div class="col-md-6">
                <div class="product-info">
                    <h2><?php echo e($producto->nombre); ?></h2>
                    <p><?php echo e($producto->descripcion); ?></p>
                    <p>Codigo: <?php echo e($producto->codigo); ?></p>

                    Medidas:
                    <div class="mt-1 mb-3 mx-0">
                        <?php $__currentLoopData = $producto->precios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $precio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="">
                                <button id="btnMedida<?php echo e($index); ?>" class="btn-pm"><?php echo e($precio->medida->nombre); ?></button>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    Paquetes:
                    <div class="mt-1 mb-3 mx-0">
                        <?php $__currentLoopData = $producto->precios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $precio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="">
                                <button id="btnPaquete<?php echo e($index); ?>" class="btn-pm"><?php echo e($precio->paquete->nombre); ?></button>
                            </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appPinateria', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Tienda-Laravel\resources\views/pinateria/producto.blade.php ENDPATH**/ ?>