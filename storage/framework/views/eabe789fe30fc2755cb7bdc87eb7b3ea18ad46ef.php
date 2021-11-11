<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="container">
            <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Register</h6>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.update', $gun)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo e($gun->name); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <input type="text" name="class" class="form-control" value="<?php echo e($gun->class); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Factory</label>
                    <input type="text" name="factory" class="form-control" value="<?php echo e($gun->factory); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" rows="5" class="form-control"><?php echo e($gun->description); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" value="<?php echo e($gun->price); ?>">
                </div>
                <button type="submit" class="btn btn-success" style="float: left">Update</button>
              </form>
                <a href="<?php echo e(route('admin.table')); ?>" class="btn btn-secondary" style="float: right">Back</a>
        </div>
    </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fragua\resources\views/admin/edit.blade.php ENDPATH**/ ?>