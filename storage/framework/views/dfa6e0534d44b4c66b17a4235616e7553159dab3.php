
<?php echo $__env->make('partials.mainnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<br>

<div class="container-fluid welcome-div p-5 bg-primary text-white text-center" style="margin-top: 50px;">
    <h1 class="display-4 font-weight-bold">Welcome to the Community</h1>
    <p class="lead">Share your stories and connect with others</p>
  </div>



<div class="container mt-5 mb-4">
  <div class="row">
    <div class="col-sm-9 bg-light">
      <h3 class="text-center bg-danger text-white p-2 rounded-lg shadow-sm">Browse All Topics</h3>

      <!-- Your post content here -->
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="container-fluid p-4 mr-2 bg-white">
        <div class="d-flex align-items-center">
          <a class="navbar-brand" href="">
            <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=740&t=st=1689258857~exp=1689259457~hmac=d1b86e1ddab67660eae9c9badd4d4ef926cdb06014461c2e697c65c285a5daf4" alt="Avatar Logo" style="width: 40px;" class="rounded-pill mr-2">
          </a>
          <h6 class="ms-2"><?php echo e($post->profile_name); ?>, <?php echo e($post->created_at->format('j M Y')); ?></h6>
        </div>
        <h4><?php echo e($post->title_post); ?></h4>
        <p><?php echo e($post->body_post); ?></p>
        <div class="d-flex flex-row-reverse">
          <div class="p-2"><a><i class="bi bi-chat-left-text-fill"></i> 6 Replies</a></div>
          <div class="p-2"><a><i class="bi bi-hand-thumbs-up-fill"></i> 5 Upvotes</a></div>
          <div class="p-1">
            <a class="btn btn-warning" href="<?php echo e(route('show_post', ['postId' => $post->id])); ?>">View</a>
          </div>
        </div>
      </div>
      <br>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php echo $__env->make('partials.sidenavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>
</div>

<nav class="d-flex justify-content-center mt-4">
  <ul class="pagination">
    
    <?php if($data->onFirstPage()): ?>
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <?php else: ?>
    <li class="page-item">
      <a class="page-link" href="<?php echo e($data->previousPageUrl()); ?>" aria-label="Previous">
        <span aria-hidden="true">Previous</span>
      </a>
    </li>
    <?php endif; ?>

    
    <?php for($page = 1; $page <= $data->lastPage(); $page++): ?>
    <?php if($page == $data->currentPage()): ?>
    <li class="page-item active">
      <span class="page-link"><?php echo e($page); ?></span>
    </li>
    <?php else: ?>
    <li class="page-item">
      <a class="page-link" href="<?php echo e($data->url($page)); ?>"><?php echo e($page); ?></a>
    </li>
    <?php endif; ?>
    <?php endfor; ?>

    
    <?php if($data->hasMorePages()): ?>
    <li class="page-item">
      <a class="page-link" href="<?php echo e($data->nextPageUrl()); ?>" aria-label="Next">
        <span aria-hidden="true">Next</span>
      </a>
    </li>
    <?php else: ?>
    <li class="page-item disabled">
      <span class="page-link">Next</span>
    </li>
    <?php endif; ?>
  </ul>
</nav>

<?php if($data->currentPage() == $data->lastPage()): ?>
<div class="text-center mt-4 bg-yellow p-3 shadow bg-info">
  <h4 class="">You've reached the end of posts!
  </h4>
</div>
<?php endif; ?>


<?php echo $__env->make('partials.footerbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\lenovo\Desktop\Community\resources\views/welcome.blade.php ENDPATH**/ ?>