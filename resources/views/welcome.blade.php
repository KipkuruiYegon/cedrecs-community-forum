{{-- The navbar is included here --}}
@include('partials.mainnavbar')

{{-- The main welcome body of the forum --}}
<br>

<div class="container-fluid welcome-div p-5 text-white bg-primary text-center" style="margin-top: 70px;">
    <h1 class="display-4 mt-5 mb-3 font-weight-bold bg-secondary">Welcome to the Community</h1>
    <p class="lead bg-">Share your stories and connect with others</p>
  </div>

<div class="container-fluid p-5 mt-4 mb-4 bg-white">
  <div class="row">
    <div class="shadow col-sm-8" style="background-color: #ECF9DC;">
      <h3 class="text-center text-white bg-danger p-2 rounded-lg shadow-sm" style="border-radius: 2px; background-color:">Browse All Topics</h3>

      <div class="container input-group p-2 mt-3 mb-4" style="display: flex;">
        <select class="form-select bg-white" style="border-radius: 5px; margin-right: 10px" id="inputGroupSelect01">
          <option selected>Filter by...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

        <select class="form-select bg-white" style="border-radius: 5px; margin-right: 10px" id="inputGroupSelect02">
          <option selected>Sort by...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

        <select class="form-select bg-white" style="border-radius: 5px;" id="inputGroupSelect03">
          <option selected>Find by...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>


      <!-- Your post content here -->
      @foreach ($data as $post)
<div class="row" >
  <!-- Section 1 -->
  <div class="col-auto fixed-div">
    <a class="navbar-brand" href="">
      <img src="https://img.freepik.com/premium-photo/woman-wearing-robot-garment_81048-35488.jpg?w=740" alt="Avatar Logo" style="width:50px;" class="rounded-pill mr-2">
    </a>
  </div>

  <div class="col">
    <!-- Section 2 -->
    <div class="shadow postimages container-fluid p-3 mr-2 bg-white" style="border-radius: 10px;">
      <div class="d-flex align-items-center">
        <h6 class="ms-2 text-danger-emphasis fw-100 text-decoration-underline fw-bold">{{ $post->profile_name }}  </h6><h6 class="ms-2 text-danger-emphasis "> <i class="bi bi-calendar-check"></i> {{ $post->created_at->format('j M Y') }}</h6>
      </div>
      <h4>{{ $post->title_post }}</h4>
      <p class="post-content ">
        {!! substr($post->body_post, 0, 320) !!}
        <!-- Display the first 300 characters -->


        @if (strlen($post->body_post) > 320)
        @endif
        <a class="read-more-link" href="{{ route('show_post', ['postId' => $post->id]) }}"></a>

      <div class="d-flex flex-row-reverse">
        <div class="p-2"><a><i class="bi bi-chat-left-text-fill"></i> 6 Replies</a></div>
        <div class="p-2"><a><i class="bi bi-hand-thumbs-up-fill"></i> 5 Upvotes</a></div>
        <div class="p-1 tetx-centre">
          <a class="btn btn-primary text-white" href="{{ route('show_post', ['postId' => $post->id]) }}">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

@endforeach

    </div>

    @include('partials.sidenavbar')

  </div>
</div>

<nav class="d-flex justify-content-center mt-4">
  <ul class="pagination">
    {{-- Previous Page Link --}}
    @if ($data->onFirstPage())
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    @else
    <li class="page-item">
      <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
        <span aria-hidden="true">Previous</span>
      </a>
    </li>
    @endif

    {{-- Pagination Elements --}}
    @for ($page = 1; $page <= $data->lastPage(); $page++)
    @if ($page == $data->currentPage())
    <li class="page-item active">
      <span class="page-link">{{ $page }}</span>
    </li>
    @else
    <li class="page-item">
      <a class="page-link" href="{{ $data->url($page) }}">{{ $page }}</a>
    </li>
    @endif
    @endfor

    {{-- Next Page Link --}}
    @if ($data->hasMorePages())
    <li class="page-item">
      <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
        <span aria-hidden="true">Next</span>
      </a>
    </li>
    @else
    <li class="page-item disabled">
      <span class="page-link">Next</span>
    </li>
    @endif
  </ul>
</nav>

@if ($data->currentPage() == $data->lastPage())
<div class="text-center mt-4 bg-yellow p-3 shadow bg-info">
  <h4 class="">You've reached the end of posts!
  </h4>
</div>
@endif

{{-- Footer is included here --}}
@include('partials.footerbar')
