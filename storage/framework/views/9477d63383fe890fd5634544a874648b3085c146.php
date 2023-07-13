
<?php echo $__env->make('partials.mainnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container mt-5 mb-4" style="padding-top: 50px;">
  <div class="row">
    <div class="col-md-9 bg-light">
      <h6 class="text-center p-2 bg-info text-white">
        Discussion by <span class="font-italic"><?php echo e($post->profile_name); ?></span>
      </h6>

      <div class="container-fluid p-4 mr-2 bg-white">
        <div class="d-flex align-items-center">
          <a class="navbar-brand" href="#">
            <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=740&t=st=1689258857~exp=1689259457~hmac=d1b86e1ddab67660eae9c9badd4d4ef926cdb06014461c2e697c65c285a5daf4" alt="Avatar Logo" style="width: 40px;" class="rounded-pill mr-2">
          </a>
          <h6 class="ms-2 bg-danger-emphasis"><?php echo e($post->profile_name); ?>, <?php echo e($post->created_at->format('j M Y')); ?></h6>
        </div>

        <h3><?php echo e($post->title_post); ?></h3>
        <p><?php echo e($post->body_post); ?></p>

        <div class="d-flex flex-row-reverse">
          <div class="p-2"><a><i class="bi bi-hand-thumbs-up-fill"></i> 5 Upvotes</a></div>
          <div class="p-2 btn btn-warning"><a class="text-dark" href="<?php echo e(url('/')); ?>"><i class="bi bi-tags-fill"></i> Back to Posts</a></div>
        </div>
      </div>

      <br>
      <h4 class="p-1 bg-primary text-white rounded-pill d-inline-block w-100">
        <i class="bi bi-reply-all-fill"></i>
        <?php echo e(count($comments)); ?> Replies
      </h4>

      <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="container-fluid p-4 mr-2 bg-white d-flex flex-row-reverse">
        <div class="col-md-11 p-3 bg-light">
          <div class="d-flex align-items-center">
            <a class="navbar-brand" href="#">
              <img src="https://d2xduyqs25ssfe.cloudfront.net/uploads/default/user/default.jpg?v=210" alt="Avatar Logo" style="width: 40px;" class="rounded-pill mr-2">
            </a>
            <h6 class="ms-2"><?php echo e($comment->profile_name); ?>, <?php echo e($comment->created_at->format('j M Y')); ?></h6>
          </div>

          <p class="p-2" style="min-width: 100px;"><?php echo e($comment->comment_body); ?></p>

        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <br>
      <h5 class="text-center p-2 bg-info text-white">
        Reply to <span class="font-italic"><?php echo e($post->profile_name); ?></span>'s Question
      </h5>

      <div class="container-fluid p-3 bg-white">
        <form action="<?php echo e(route('comments.create', ['postId' => $postId])); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Reply as*</label>
            <select class="form-select" id="inputGroupSelect01" name="profile_type" required>
              <option selected>select...</option>
              <option value="Unshared profile">1. Anonymously</option>
              <option value="Shared profile">2. To be contacted via email</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Your Name *</label>
            <input type="text" name="profile_name" class="form-control bg-light" id="exampleFormControlInput1" placeholder="How your name will appear" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email Address (optional)</label>
            <input type="email" name="user_email" class="form-control bg-light" id="exampleFormControlInput1" placeholder="email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Your Reply*</label>
            <textarea name="comment_body" class="form-control bg-light" id="exampleFormControlTextarea1" rows="10" placeholder="Start typing your reply ....." required></textarea>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-warning me-2" id="submitReplyBtn">Submit Reply</button>
            <button class="btn btn-danger me-2" onclick="reloadPage()">Clear</button>
            <div class="p-2 btn btn-danger text-white">
              <a class="text-white" href="<?php echo e(url('/')); ?>"><i class="bi bi-tag-fill"></i> Back to Posts</a>
            </div>
          </div>
        </form>
      </div>
    </div>

    <?php echo $__env->make('partials.sidenavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div>


<?php echo $__env->make('partials.footerbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\lenovo\Desktop\Community\resources\views/commentpost.blade.php ENDPATH**/ ?>