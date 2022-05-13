<?php if(\Session::has('create-msg')): ?>
        toastr.option = 
        {
            "closeButton": true,
            "progressBar": true
        }

        toastr.success("<?php echo e(session('success')); ?>")
        <?php endif; ?>

<?php /**PATH F:\admin\Documents\laravel\task-management-backup\resources\views/layouts/notifications.blade.php ENDPATH**/ ?>