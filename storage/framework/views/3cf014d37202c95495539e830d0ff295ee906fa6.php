<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    @import "../node_modules/bootstrap/scss/bootstrap";
    <style type='text/css'>

        .div_center
        {
            text-align: center;
            padding-top:40px;
        }
        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .center
        {
          margin: auto;
          width: 50%;
          color: black;
          text-align: center;
          margin-top: 30 px;
          background: white;
        }
        .center2
        {
          border-width: 3px;
          border-style: solid;
          border-color: black;
        }
        


    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
      <!-- partial -->
      <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper"> 
            <?php if(session()->has('message')): ?>
            <div class="alert alert-light" role="alert">
              <button type="button" class='close' data-dismiss='alert' aria-hidden="true">X</button>
              <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>
            <div class="div_center">
                <h2 class='h2_font'>Add Product</h2>
                <form action="<?php echo e(url('add_catagory')); ?>" method="post">

                    <?php echo csrf_field(); ?>

                      <input type='text' name='catagory' placeholder='Write category name'>

                      <input type='submit' name='submit' class='btn btn-primary' value='Add Category'>      

                </form>
            </div>
            <table class="center">
              <tr class="center2">
                <td><strong>Catagory</strong></td>
                <td><strong>Action</strong></td>
              </tr>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="center2">
                <td><?php echo e($data->Catagory_name); ?></td>
                <td>
                  <a class="btn btn-danger" href ="<?php echo e(url('delete_catagory',$data->id)); ?>">Remove </a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
      </div> 
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH D:\Laravel\paw2\resources\views/admin/category.blade.php ENDPATH**/ ?>