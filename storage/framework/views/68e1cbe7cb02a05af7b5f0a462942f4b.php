<?php $__env->startSection('title'); ?>
    Tu Cuenta
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:-6/12 px-5">
                <img src="<?php echo e(asset('img/usuario.svg')); ?>" alt="imagen usuario">
            </div>
            <div class="md:w-8/12 lg:-6/12 px-5 flex flex-col items-center  md:justify-center md:items-start py-10 md:py-10">
                <p class="text-gray-700 text-2x1 "><?php echo e(auth()->user()->username); ?></p>

                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal"> Followers</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal"> Following</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal"> Posts</span>
                </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/dashboard.blade.php ENDPATH**/ ?>