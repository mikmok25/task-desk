

<?php $__env->startSection('content'); ?>
    <div class="edit-content" style="width: 480px;">
        <h1 class="edit-txt">Update your password:</h1>
        <?php if(session('msg-success') !== null): ?>
            <p class="success-msg"><?php echo e(session('msg-success')); ?></p>
        <?php endif; ?>
        <?php if(session('msg-error') !== null): ?>
            <p class="error-msg"><?php echo e(session('msg-error')); ?></p>
        <?php endif; ?>

        <form action="<?php echo e(route('user.passwordUpdate')); ?>" method="POST" class="mt-4">
            <?php echo csrf_field(); ?>
            <label class="edit-block form-label" for="oldPassword">Current Password: </label>
            <input id="password-field" class="edit-input form-control bg-white" type="password" name="oldPassword">
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon-password toggle-password"></span>
            <?php $__errorArgs = ['oldPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="email-msg "><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label class="edit-block form-label" for="password">New Password:</label>
            <input id="password-field-2" class="edit-input form-control bg-white" type="password" name="password">
            <span toggle="#password-field-2" class="fa fa-fw fa-eye field-icon-password toggle-password"></span>

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="email-msg"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label class="edit-block form-label" for="password_confirmation">Confirm New Password:</label>
            <input id="password-field-3" class="edit-input form-control bg-white" type="password"
                name="password_confirmation">
            <span toggle="#password-field-3" class="fa fa-fw fa-eye field-icon-password toggle-password"></span>

            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="email-msg"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <button class="update-btn">Update</button>
        </form>

        <div class="mt-8 text-center">
            <a href="<?php echo e(route('user.index')); ?>">
                <svg class="back-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>



    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\HTTP5225-Web-Development-Project\Assignment2\laravel-todo-final\resources\views/user/password.blade.php ENDPATH**/ ?>