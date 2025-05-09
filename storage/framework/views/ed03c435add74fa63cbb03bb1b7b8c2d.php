<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="producto">
        <div class="descuento-etiqueta"><?php echo e($producto->Descuento->descuento); ?>%</div>

        <img src="../img/pinateria/descuentos/" alt="<?php echo e($producto->Nombre); ?>">

        <h3><?php echo e($producto->Nombre); ?></h3>
        <p><?php echo e($producto->Descripcion); ?></p>
        <button class="comprar-btn">Comprar ahora</button>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\Tienda-Laravel\resources\views/cacharreria/prueba.blade.php ENDPATH**/ ?>