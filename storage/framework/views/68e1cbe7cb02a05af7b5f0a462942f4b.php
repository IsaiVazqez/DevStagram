<?php $__env->startSection('title'); ?>
    Tu Cuenta
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:-6/12 px-5">
                <img src="<?php echo e(asset('img/usuario.svg')); ?>" alt="imagen usuario">
            </div>
            <div class="md:w-8/12 lg:-6/12 px-5">
                <p class="text-gray-700 text-2x1"><?php echo e(auth()->user()->username); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/dashboard.blade.php ENDPATH**/ ?>