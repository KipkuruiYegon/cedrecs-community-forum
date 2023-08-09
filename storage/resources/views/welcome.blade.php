{{-- The navbar is included here --}}
@include('partials.mainnavbar')

{{-- The main welcome body of the forum --}}
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
      @foreach ($data as $post)
      <div class="container-fluid p-4 mr-2 bg-white">
        <div class="d-flex align-items-center">
          <a class="navbar-brand" href="">
            <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=740&t=st=1689258857~exp=1689259457~hmac=d1b86e1ddab67660eae9c9badd4d4ef926cdb06014461c2e697c65c285a5daf4" alt="Avatar Logo" style="width: 40px;" class="rounded-pill mr-2">
          </a>
          <h6 class="ms-2">{{ $post->profile_name }}, {{ $post->created_at->format('j M Y') }}</h6>
        </div>
        <h4>{{ $post->title_post }}</h4>
        <p>{{ $post->body_post }}</p>
        <div class="d-flex flex-row-reverse">
          <div class="p-2"><a><i class="bi bi-chat-left-text-fill"></i> 6 Replies</a></div>
          <div class="p-2"><a><i class="bi bi-hand-thumbs-up-fill"></i> 5 Upvotes</a></div>
          <div class="p-1">
            <a class="btn btn-warning" href="{{ route('show_post', ['postId' => $post->id]) }}">View</a>
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
