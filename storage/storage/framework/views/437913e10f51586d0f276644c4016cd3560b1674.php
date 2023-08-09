
<?php echo $__env->make('partials.mainnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .embed-responsive .embed-responsive-item {
      width: 100%;
      height: 1300px;
      max-width: none;
      max-height: none;
    }
  </style>


<div class="container mt-5 mb-4" style="padding-top: 50px;">
  <div class="row">
    <div class="col-sm-9 bg-light">
      <h2 class="text-center bg-warning text-dark p-2 rounded-lg shadow-sm"></h2>

      <div class="container-fluid p-3 bg-white">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSeg7proOh2_e98ApbU91emXe8rtJUDE7EZFFaHWMIAcRdPXcw/viewform?embedded=true" width="" frameborder="0"></iframe>
          </div>
        <div class="text-center mt-3">
          <button class="btn btn-danger me-2" onclick="reloadPage()">Clear</button>
          <a class="btn btn-warning" href="<?php echo e(url('/')); ?>"><i class="bi bi-tags-fill"></i> Back to Posts</a>
        </div>
      </div>

    </div>

    <?php echo $__env->make('partials.sidenavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div>


<?php echo $__env->make('partials.footerbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\lenovo\Desktop\Community\resources\views/submitidea.blade.php ENDPATH**/ ?>