
<?php $__env->startSection('content'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/productos.css']); ?>
    <section class="productos">

        <div class="row">

            <h2 class="text-center">Productos</h2>
            <div class="col-xl-3 col-sm-12">
                <h3>Filtros</h3>
                <?php $__currentLoopData = $atributos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atributo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h4><?php echo e($atributo->nombre); ?></h4>
                    <div class="row m-0">
                        <?php $__currentLoopData = $atributo->valores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="filtroValor col-6">
                                <input type="checkbox" name="" id=""><span><?php echo e($valor->valor); ?></span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <h4>Tamaños</h4>
                <div class="row m-0">
                    <?php $__currentLoopData = $medidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="filtroValor col-6">
                            <input type="checkbox" name="" id=""><span><?php echo e($medida->nombre); ?></span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="col-xl-9 col-sm-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient’s username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-secondary" type="button" id="button-addon2">🔎</button>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-sm-6 p-2 ">
                            <a href="<?php echo e(route('pinateria.producto', ['codigo' => $producto->codigo, 'nombre' => $producto->nombre])); ?>"
                                class="btn-producto">
                                <div class="producto">
                                    <img src="../img/pinateria/descuentos/<?php echo e($producto->imagenes->first()->url_imagen); ?>"
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
            </div>
        </div>
        <div class="p-2 d-flex justify-content-center">
            <?php echo e($productos->links()); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appPinateria', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Tienda-Laravel\resources\views/pinateria/productos.blade.php ENDPATH**/ ?>