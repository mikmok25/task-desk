

<?php $__env->startSection('content'); ?>
    <div>
        <div class="float-start">
            <h4 class="pb-3">Create Task</h4>
        </div>

        <div class="float-end">
            <a href="<?php echo e(route('todo.index')); ?>" class="btn btn-primary"><i class="fa-solid fa-arrow-left fa-lg"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="card card-body  p-4 shadow-sm">
        <form action="<?php echo e(route('todo.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control bg-white" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control bg-white" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Status</label>
                <select class="form-control form-select bg-white" id="status" name="status">
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($status['value']); ?>"><?php echo e($status['label']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\admin\Documents\laravel\task-management-backup\resources\views/create.blade.php ENDPATH**/ ?>