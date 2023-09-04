<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document - <?php echo $__env->yieldContent('title'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-gray-100">

    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-3xl font-black">
                DevStagram
            </h1>

            <?php if(auth()->guard()->check()): ?>
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="/dashboard">Dashboard</a>
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="font-bold uppercase text-gray-600 text-sm" type="submit">Logout</button>
                </form>
            </nav>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="/login">Login  </a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="/register">Create Account</a>
            </nav>
            <?php endif; ?>
        </div>
    </header>

    <main class="container mx-auto mt-10">

        <h2 class="font-black text-center text-3xl mb-10">
            <?php echo $__env->yieldContent('title'); ?>
        </h2>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram - Todos los derechos reservados
        <?php echo e(now()->year); ?>

    </footer>
</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>