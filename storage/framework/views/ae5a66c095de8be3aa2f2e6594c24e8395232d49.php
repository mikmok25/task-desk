

<?php $__env->startSection('content'); ?>
    <div>
        

        <div class="float-start">
            <h2 class="pb-3"><?php echo e(Auth::user()->name); ?>'s Task</h2>
        </div>

        <div class="float-end">
            <a href="<?php echo e(route('todo.create')); ?>" class="btn btn-primary"> <i class="fa-solid fa-circle-plus fa-lg"></i>
                Create task</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card-container">
            <div class="card mt-4 shadow-sm">
                

                <h5 class="card-header">
                    <?php if($todo->status === 'Todo'): ?>
                        <strong><?php echo e($todo->title); ?></strong>
                    <?php else: ?>
                        <strong><del><?php echo e($todo->title); ?><del></strong>
                    <?php endif; ?>

                    <span class="badge rounded-pill bg-warning text-dark">
                        Created <?php echo e($todo->created_at->diffForHumans()); ?>

                    </span>

                </h5>

                <div class="card-body">

                    <div class="card-text">
                        <div class="float-start">

                            <?php if($todo->description === null): ?>
                                <h6 class="text-muted">No description<h6>
                            <?php endif; ?>

                            <?php if($todo->status === 'Todo'): ?>
                                <h6> <?php echo e($todo->description); ?> </h6>
                            <?php else: ?>
                                <h6><del><?php echo e($todo->description); ?></del></h6>
                            <?php endif; ?>







                            <?php if($todo->status === 'Todo'): ?>
                                <span class="badge rounded-pill bg-primary text-white">
                                    Todo
                                </span>
                            <?php else: ?>
                                <span class="badge rounded-pill bg-success text-white">
                                    Done
                                </span>
                            <?php endif; ?>


                            <small>Updated </small><small class="text-muted"> <?php echo e($todo->updated_at->diffForHumans()); ?>

                            </small>
                        </div>

                        <div class="float-end">

                            <a href="<?php echo e(route('todo.edit', $todo->id)); ?>" class="btn btn-success"> <i
                                    class="fa-solid fa-pen-to-square"></i> Edit task</a>
                            <a class="btn btn-danger deletebtn" data-bs-toggle="modal"
                                data-bs-target="#ModalDelete<?php echo e($todo->id); ?>"> <i class="fa-solid fa-trash"></i> Delete
                                task</a>
                        </div>
                        <?php echo $__env->make('modals.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                    </div>
                </div>
            </div>
        </div>



        </div>
        </div>
        </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <br>

    <?php if(count($todos) === 0): ?>
        <div class="alert alert-danger p-2 text-center">
            No task found please create one!
        </div>
    <?php endif; ?>

    <div class="mt-8 text-center">
        <a href="<?php echo e(route('home')); ?>">
            <svg class="back-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\HTTP5225-Web-Development-Project\Assignment2\laravel-todo-final\resources\views/index.blade.php ENDPATH**/ ?>