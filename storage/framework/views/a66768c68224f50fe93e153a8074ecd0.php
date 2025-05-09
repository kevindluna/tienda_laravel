<?php $__env->startSection('content'); ?>
<div class="full-screen-container">
    <!-- Piñatería -->
    <a href="<?php echo e(url('pinateria')); ?>" class="category-block pinateria-bg">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="category-title">Piñatería</div>
            </div>
            <div class="flip-card-back">
                <img src="img/inicio/inicio_pinateria.png" alt="Piñatería" />
                <div class="category-title">Piñatería</div>
            </div>
        </div>
    </a>

    <!-- Cacharrería -->
    <a href="<?php echo e(url('cacharreria')); ?>" class="category-block cacharreria-bg">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="category-title">Cacharrería</div>
            </div>
            <div class="flip-card-back">
                <img src="img/inicio/inicio_cacharreria.png" alt="Cacharrería" />
                <div class="category-title">Cacharrería</div>
            </div>
        </div>
    </a>

    <!-- Papelería -->
    <a href="papeleria.php" class="category-block papeleria-bg">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="category-title">Papelería</div>
            </div>
            <div class="flip-card-back">
                <img src="img/inicio/inicio_papeleria.png" alt="Papelería" />
                <div class="category-title">Papelería</div>
            </div>
        </div>
    </a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Tienda-Laravel\resources\views/home.blade.php ENDPATH**/ ?>