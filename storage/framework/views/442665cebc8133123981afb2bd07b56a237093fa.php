

<?php $__env->startSection('content'); ?>
    <div class="home-content">

        <div class="home-main-content">
            <h3 class="dashboard-text">Dashboard</h3>
            <div class="pl-6 pr-6 mt-4">
                <p class="welcome-msg">Welcome <?php echo e(Auth::user()->name); ?>!</p>
            </div>

            <div class="manage-container">
                <a href="<?php echo e(route('todo.index')); ?>">
                    <div class="task-manager">
                        <p class="m-auto">Manage Task</p>

                    </div>

                </a>
                <a href="<?php echo e(route('user.index')); ?>">
                    <div class="user-manager">
                        <p class="m-auto">Manage User</p>
                    </div>
                </a>





            </div>


        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\HTTP5225-Web-Development-Project\Assignment2\laravel-todo-final\resources\views/home.blade.php ENDPATH**/ ?>