<?php echo app('Illuminate\Foundation\Vite')(['resources/css/productos.css']); ?>
<section class="productos container">
    <h2 class="text-center">Productos</h2>
    <div class="row">
        <?php $__currentLoopData = $productos->take($cantidad); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-sm-6 p-2 ">
                <a href="<?php echo e(route('pinateria.producto', ['codigo' => $producto->codigo, 'nombre' => $producto->nombre])); ?>" class="btn-producto">
                    <div class="producto">
                        <img src="<?php echo e(asset('img/pinateria/productos/' . $producto->imagenes->first()->url_imagen)); ?>" alt="<?php echo e($producto->nombre); ?>"
                            alt="<?php echo e($producto->nombre); ?>">
                        <div class="producto-info">
                            <?php echo e($producto->nombre); ?>

                            <h5 class="align-middle">$
                                <?php echo e(number_format($producto->precios->first()->precio_actual, 0)); ?>

                            </h5>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success">Comprar ahora</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\Tienda-Laravel\resources\views/includes/productos.blade.php ENDPATH**/ ?>