<?php $__env->startSection('title'); ?>
    Login in DevStagram
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="<?php echo e(asset('img/login.jpg')); ?>" alt="Image for the login">
        </div>

        <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <?php if(session('status')): ?>
                <p class= "bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"><?php echo e(session('status')); ?></p>
                <?php endif; ?>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input for="email" type="email" name="email" placeholder="Email para tu registro"
                    class="border p-3 w-full rounded-lg" value="<?php echo e(old('email')); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class= "bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input for="password" type="password" name="password" placeholder="*******"
                    class="border p-3 w-full rounded-lg">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class= "bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="mb-4 mt-3">
                    <input type="checkbox" name="remember"> <label class=" uppercase text-gray-500 font-bold"> Stay logged in  </label>
                </div>
            </div>

            <input type="submit" value="Iniciar Sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold
             text-white rounded-lg w-full p-3">

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/login.blade.php ENDPATH**/ ?>