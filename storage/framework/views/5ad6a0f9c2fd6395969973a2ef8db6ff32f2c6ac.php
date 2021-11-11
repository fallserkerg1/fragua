<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="container">
            <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Register Employe</h6>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.updateEmploye', $employe)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo e($employe->name); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Card</label>
                    <input type="text" name="card" class="form-control" value="<?php echo e($employe->card); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <input type="text" name="class" class="form-control" value="<?php echo e($employe->class); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" rows="5" class="form-control"><?php echo e($employe->description); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Target</label>
                    <input type="text" name="target" class="form-control" value="<?php echo e($employe->target); ?>">
                </div>
                <button type="submit" class="btn btn-success" style="float: left">Update</button>
              </form>
                <a href="<?php echo e(route('admin.employes')); ?>" class="btn btn-secondary" style="float: right">Back</a>
        </div>
    </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fragua\resources\views/admin/employeEdit.blade.php ENDPATH**/ ?>