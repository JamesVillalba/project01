

<?php $__env->startSection('title', 'Edit Client'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Client</h2>

    <form action="<?php echo e(route('clients.update', $client->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="text" name="name" value="<?php echo e($client->name); ?>" class="form-control mb-2">
        <textarea name="description" class="form-control mb-2"><?php echo e($client->description); ?></textarea>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\james\resources\views/edit-client.blade.php ENDPATH**/ ?>