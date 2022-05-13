<form action="<?php echo e(route('todo.destroy', $todo->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <div class="modal fade" id="ModalDelete<?php echo e($todo->id); ?>" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Alert!</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                     Are you sure you want to delete <strong><?php echo e($todo->title); ?></strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>

                    

</form>
<?php /**PATH F:\admin\Documents\laravel\task-management-backup\resources\views/modals/delete.blade.php ENDPATH**/ ?>