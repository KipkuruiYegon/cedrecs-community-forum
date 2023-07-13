
<?php echo $__env->make('partials.mainnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container mt-5 mb-4" style="padding-top: 50px;">
  <div class="row">
    <div class="col-md-9 bg-light">
      <h2 class="text-center bg-warning text-dark p-2 rounded-lg shadow-sm">Create your post!</h2>

      <div class="container-fluid p-3 bg-white">
        <form action="createpost" method="POST">
          <?php echo csrf_field(); ?>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title *</label>
            <input type="text" name="title_post" class="form-control bg-light" id="exampleFormControlInput1" placeholder="Title of Post" required>
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Category *</label>
            <select class="form-select" id="inputGroupSelect01" name="category_post" required>
              <option selected>select...</option>
              <option value="Phising attacks">Phishing attacks</option>
              <option value="Hacking Incidents">Hacking Incidents</option>
              <option value="Contribution Topic">Contribution Topic</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect02">Choose to Share Profile *</label>
            <select class="form-select" id="inputGroupSelect02" name="profile_type" required>
              <option selected>select...</option>
              <option value="Unshared profile">1. Anonymously</option>
              <option value="Shared profile">2. To be contacted via email</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Your Name *</label>
            <input type="text" name="profile_name" class="form-control bg-light" id="exampleFormControlInput2" placeholder="How your name will appear" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Email Address (optional)</label>
            <input type="email" name="user_email" class="form-control bg-light" id="exampleFormControlInput3" placeholder="email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Your Post *</label>
            <textarea name="body_post" class="form-control bg-light" id="exampleFormControlTextarea1" rows="14" placeholder="Start Typing ..." required></textarea>
          </div>
          <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-warning me-2">Submit Post</button>
            <button class="btn btn-danger me-2" onclick="reloadPage()">Cancel</button><div class="p-2 btn btn-warning">
                <a class="text-dark" href="<?php echo e(url('/')); ?>"><i class="bi bi-tag-fill"></i> Back to Posts</a>
              </div>
            </div>
        </form>


      </div>
      <div class="image-container text-center">
        <h4>We've all been there, Right?</h4>
        <img src="https://img.freepik.com/free-vector/global-data-security-personal-data-security-cyber-data-security-online-concept-illustration-internet-security-information-privacy-protection_1150-37350.jpg?w=1060&t=st=1689261451~exp=1689262051~hmac=12dccedf2b42f2b16b8790db4c39d2213475510727e282f2eeb3bd242a785ee5" alt="Welcome Image" class="img-fluid" style="width: 100%;" />
    </div>
    </div>

    <?php echo $__env->make('partials.sidenavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div>


<?php echo $__env->make('partials.footerbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\lenovo\Desktop\Community\resources\views/createpost.blade.php ENDPATH**/ ?>