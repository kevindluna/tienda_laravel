<?php echo app('Illuminate\Foundation\Vite')(['resources/css/productos.css']); ?>
<section class="productos container">
    <h2 class="text-center">Productos</h2>
    <div class="row">
        <?php $__currentLoopData = $productos->take($cantidad); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-sm-6 p-2 ">
                <a href="" class="btn-producto">
                    <div class="producto">
                        <img src="../img/pinateria/descuentos/<?php echo e($producto->ImagenRuta); ?>" alt="<?php echo e($producto->Nombre); ?>">
                        <div class="producto-info">
                            <?php echo e($producto->Nombre); ?>

                            <h5 class="align-middle">$ Precio</h5>
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