<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'My Website'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a202c;
            color: #e2e8f0;
        }
        .navbar {
            background-color: #2d3748 !important;
            padding: 1rem 0;
        }
        .navbar-brand, .nav-link {
            color: #e2e8f0 !important;
        }
        .nav-link:hover {
            color: #f56565 !important;
        }
        .content {
            min-height: 70vh;
            padding: 2rem 0;
        }
        footer {
            padding: 20px 0;
            border-top: 1px solid #2d3748;
            margin-top: 40px;
        }
        .navbar-collapse {
            flex-grow: 0;
        }
        .brand-container {
            margin-left: auto;
        }
    </style>
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('about') ? 'active' : ''); ?>" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('contact') ? 'active' : ''); ?>" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('clients') ? 'active' : ''); ?>" href="/clients">Clients</a>
                    </li>
                </ul>
            </div>
            <div class="brand-container">
                <a class="navbar-brand fw-bold" href="/"></a>
            </div>
        </div>
    </nav>

    <div class="container content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="text-center">
        <div style="text-align: center; margin-top: 40px;">
            <a href="https://www.facebook.com/james.villalba.2175" target="_blank" style="margin: 0 25px;">
                <img src="/images/fb.webp" alt="Facebook" style="width: 70px; height: 40px;">
            </a>
            <a href="https://t.me/PHCGR1MR3APER" target="_blank" style="margin: 0 25px;">
                <img src="/images/tg.png" alt="Telegram" style="width: 70px; height: 40px;">
            </a>
            <a href="https://github.com/JamesVillalba" target="_blank" style="margin: 0 25px;">
                <img src="/images/git.png" alt="GitHub" style="width: 70px; height: 40px;">
            </a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH C:\laragon\www\james\resources\views/app.blade.php ENDPATH**/ ?>