<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Pinateria')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/pinateria.css', 'resources/css/style.css', 'resources/js/app.js']); ?>

</head>

<body>
    <div id="app">
        <nav class="navbar">
            <a class="brand navbar-brand" href="<?php echo e(url('pinateria')); ?>">Piñatería</a>
            <div class="hamburger" onclick="toggleMenu()">☰</div>
            <ul class="nav-links" id="navLinks">
                <li><a href="<?php echo e(url('/')); ?>">Inicio</a></li>
                <li><a href="#">Globos latex</a></li>
                <li><a href="#">Metalizados</a></li>
                <li><a href="#">Fiesta</a></li>
                <li><a href="#" class="active">Piñatería</a></li>
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li>
                            <a class="login-btn" href="<?php echo e(route('login')); ?>"><?php echo e(__('Iniciar Sesión')); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <li>
                            <a href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrarse')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>

            </ul>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
            
        </main>
    </div>
    <footer>
        <div class="container">
            <div class="row text-start">

                <!-- Columna 1 -->
                <div class="col-md-3 col-6">
                    <h6 class="fw-bold">CONTÁCTENOS</h6>
                    <ul class="list-unstyled">
                        <li>Dirección</li>
                        <li>Teléfonos</li>
                        <li>Correo</li>
                        <li>Redes Sociales</li>
                    </ul>
                </div>

                <!-- Columna 2 -->
                <div class="col-md-3 col-6">
                    <h6 class="fw-bold">CORPORATIVO</h6>
                    <ul class="list-unstyled">
                        <li>Enlace 1</li>
                        <li>Enlace 2</li>
                        <li>Enlace 3</li>
                        <li>Enlace 4</li>
                    </ul>
                </div>

                <!-- Columna 3 -->
                <div class="col-md-3 col-6">
                    <h6 class="fw-bold">TIENDA ONLINE</h6>
                    <ul class="list-unstyled">
                        <li>Enlace 1</li>
                        <li>Enlace 2</li>
                        <li>Enlace 3</li>
                        <li>Enlace 4</li>
                    </ul>
                </div>

                <!-- Columna 4 -->
                <div class="col-md-3 col-6">
                    <h6 class="fw-bold">SUSCRÍBETE A NUESTRO NEWSLETTER</h6>
                    Recibe las mejores ofertas directamente en tu buzón
                    <button class="btn btn-warning btn-sm">Suscribirse</button>
                </div>

            </div>
        </div>
        <p class="text-center">&copy; 2025 Tienda. Todos los derechos reservados.</p>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\Tienda-Laravel\resources\views/layouts/appPinateria.blade.php ENDPATH**/ ?>