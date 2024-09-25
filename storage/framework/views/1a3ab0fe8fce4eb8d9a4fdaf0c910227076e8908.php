

<?php $__env->startSection('content'); ?>
    <div>
        <div class="float-start">
            <h4 class="pb-3">Edit Task - <span class="badge bg-info"><?php echo e($todo->title); ?></span></h4>
        </div>

        <div class="float-end">
            <a href="<?php echo e(route('todo.index')); ?>" class="btn btn-primary"><i class="fa-solid fa-arrow-left fa-lg"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="card card-body  p-4">
        <form action="<?php echo e(route('todo.update', $todo->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> 

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control bg-white" id="title" name="title" value="<?php echo e($todo->title); ?>">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control bg-white" id="description" name="description" rows="3"><?php echo e($todo->description); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label ">Status</label>
                <select class="form-control form-select bg-white" id="status" name="status">
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($status['value']); ?>" <?php echo e($todo->status === $status['value'] ? 'selected' : ''); ?>><?php echo e($status['label']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\HTTP5225-Web-Development-Project\Assignment2\laravel-todo-final\resources\views/edit.blade.php ENDPATH**/ ?>