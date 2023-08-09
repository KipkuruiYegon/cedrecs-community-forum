{{-- The navbar is included here --}}
@include('partials.mainnavbar')

{{-- Here we can check the post plus comments related to it below --}}
<div class="container mt-5 mb-4" style="padding-top: 50px;">
  <div class="row">
    <div class="col-md-8 bg-light">
      <h5 class="text-center shadow p-2 bg-secondary text-white">
        Discussion by {{ $post->profile_name }}
      </h5>

      <div class=" container-fluid shadow p-4 mr-2 bg-white">
        <div class="d-flex align-items-center">
          <a class="navbar-brand" href="#">
            <img src="https://img.freepik.com/premium-photo/woman-wearing-robot-garment_81048-35488.jpg?w=740" alt="Avatar Logo" style="width: 40px;" class="rounded-pill mr-2">
          </a>
          <div class="d-flex align-items-center">
            <h6 class="ms-2 text-danger-emphasis fw-100 text-decoration-underline fw-bold">{{ $post->profile_name }}  </h6><h6 class="ms-2 text-danger-emphasis "> on <i class="bi bi-calendar-check"></i> {{ $post->created_at->format('j M Y') }}</h6>
          </div>
        </div>

        <div class="postcommentimages p-1 mr-1 bg-white ">
        <h3>{{ $post->title_post }}</h3>
        <p class="">{!! $post->body_post !!}</p>
        </div>

        <div class="d-flex flex-row-reverse">
          <div class="p-2"><a><i class="bi bi-hand-thumbs-up-fill"></i> 5 Upvotes</a></div>
          <div class="p-2 btn btn-primary"><a class="text-white" href="{{ url('/') }}"><i class="bi bi-tags-fill"></i> Back to Posts</a></div>
        </div>
      </div>

      <br>
      <h4 class="p-1 bg-primary text-white rounded-pill d-inline-block w-100">
        <i class="bi bi-reply-all-fill"></i>
        {{ count($comments) }} Replies
      </h4>

      @foreach($comments as $comment)
      <div class=" container-fluid p-4 mr-2 bg-white d-flex flex-row-reverse">
        <div class="shadow col-md-11 p-3 bg-light">
          <div class="d-flex align-items-center">
            <a class="navbar-brand" href="#">
              <img src="https://d2xduyqs25ssfe.cloudfront.net/uploads/default/user/default.jpg?v=210" alt="Avatar Logo" style="width: 40px;" class="rounded-pill mr-2">
            </a>
            <h6 class="ms-2">{{ $comment->profile_name }}, {{ $comment->created_at->format('j M Y') }}</h6>
          </div>

          <p class="p-2" style="min-width: 100px;">{{ $comment->comment_body }}</p>

        </div>
      </div>
      @endforeach

      <br>
      <h5 class="text-center p-2 bg-secondary text-white">
        Reply to {{ $post->profile_name }}'s Post
      </h5>

      <div class="container-fluid p-3 bg-white">
        <form action="{{ route('comments.create', ['postId' => $postId]) }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Reply as*</label>
            <select class="form-select" id="inputGroupSelect01" name="profile_type" required>
              <option selected>select...</option>
              <option value="Unshared profile">1. Anonymously</option>
              <option value="Shared profile">2. Enter your Name</option>
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
              <a class="text-white" href="{{ url('/') }}"><i class="bi bi-tag-fill"></i> Back to Posts</a>
            </div>
          </div>
        </form>
      </div>
    </div>

    @include('partials.sidenavbar')
  </div>
</div>

{{-- Footer is included here --}}
@include('partials.footerbar')
