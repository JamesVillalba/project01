

<?php $__env->startSection('title', 'Clients'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mb-4">Our Clients</h1>
            
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            
            <div class="text-right mb-4">
                <a href="<?php echo e(route('clients.create')); ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Client
                </a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <?php if($client->image): ?>
                    <img src="<?php echo e(asset('storage/'.$client->image)); ?>" class="card-img-top" alt="<?php echo e($client->name); ?>" style="height: 200px; object-fit: cover;">
                <?php else: ?>
                    <div class="text-center p-4 bg-light" style="height: 200px; display: flex; align-items: center; justify-content: center;">
                        <span>No Image</span>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($client->name); ?></h5>
                    <p class="card-text"><?php echo e(Str::limit($client->description, 100)); ?></p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo e(route('clients.show', $client->id)); ?>" class="btn btn-sm btn-info">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <a href="<?php echo e(route('clients.edit', $client->id)); ?>" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="<?php echo e(route('clients.destroy', $client->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <?php if($clients->isEmpty()): ?>
        <div class="alert alert-info text-center">
            No clients found. Add your first client now!
        </div>
    <?php endif; ?>
    
    <?php if($clients->hasPages()): ?>
        <div class="d-flex justify-content-center mt-4">
            <?php echo e($clients->links()); ?>

        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\james\resources\views/clients/index.blade.php ENDPATH**/ ?>