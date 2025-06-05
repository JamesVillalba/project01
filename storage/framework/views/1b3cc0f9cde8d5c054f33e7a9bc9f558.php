

<?php $__env->startSection('title', 'Clients'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-center mb-4">Our Clients</h1>

  
    <form action="<?php echo e(route('clients.store')); ?>" method="POST" class="mb-4">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Client name" required class="form-control mb-2">
        <textarea name="description" placeholder="Project description" required class="form-control mb-2"></textarea>
        <button type="submit" class="btn btn-success">Add Client</button>
        <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

    </form>

    <div class="row mt-5">
        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 text-center mb-4">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($client->name); ?></h5>
                    <p class="card-text"><?php echo e($client->description); ?></p>

                    <a href="<?php echo e(route('clients.edit', $client->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

                    <form action="<?php echo e(route('clients.destroy', $client->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\james\resources\views/clients.blade.php ENDPATH**/ ?>