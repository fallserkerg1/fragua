<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Employes</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>
    <!-- Dsparador del Modal Formulario -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="margin: 5px; padding-top: 5px;">Create Register</button>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Card</th>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Target</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Card</th>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Target</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <?php $__currentLoopData = $employe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fila): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($fila->name); ?></td>
                                <td><?php echo e($fila->card); ?></td>
                                <td><?php echo e($fila->class); ?></td>
                                <td><?php echo e($fila->description); ?></td>
                                <td><?php echo e($fila->target); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Formulario -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('admin.store-employe')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Card</label>
                    <input type="text" name="card" class="form-control" placeholder="Enter Card">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <input type="text" name="class" class="form-control" placeholder="Enter Class">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" rows="5" class="form-control" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Target</label>
                    <input type="text" name="target" class="form-control" placeholder="Enter Target">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fragua\resources\views/admin/table-employes.blade.php ENDPATH**/ ?>