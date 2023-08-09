<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cedrec Community Forum</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZSROxKSsm9Imod9pWSxm4-_XpCnfU8N4nmw&usqp=CAU">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
  {{-- ckeditor5 --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>



  <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">





</head>

<style>
@import url('https://fonts.cdnfonts.com/css/poppins');

* {
  font-family: 'Poppins', sans-serif;
  font-size: 13px;
}

  .container-fluid {
  max-width: 100%;
  overflow: hidden;
}

  .welcome-div {
    height:300px;
    background-image: url('https://img.freepik.com/premium-photo/sunrise-panorama-famous-cappadocia-landscape-view-with-lots-hot-air-balloons_160696-1425.jpg?w=1380');
    background-size: cover; /* This ensures the image covers the entire div */
    background-position: center; /* Center the image within the div */
    opacity: ;
}

.postimages img {
  max-width: 30%;
  max-height: 50%;
  object-fit: contain;
}

.postcommentimages img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}

  .ck-editor__editable_inline{
    height: 500px;
    border-radius: 15px;
  }

  .pagination li a,
    .pagination li span {
        font-size: 14px;
        padding: 8px 12px;
    }

  .footer2 {
    background: #141169;
    color: white;
    text-align: center;
    padding: 5px;
  }

  .footer1 {
    background: #141169;
    color: white;
  }

  .footer1 .links ul {
    list-style-type: none;
    text-decoration: none;
  }

  .footer1 .links li a {
    color: white !important;
    text-decoration: none;
    transition: color .2s;
  }

  .footer1 .links li a:hover {
    text-decoration: none;
    color: #4180CB !important;
  }

  .footer1 .about-company i {
    font-size: 25px;
  }

  .footer1 .about-company a {
    color: white;
    transition: color .2s;
  }

  .footer1 .about-company a:hover {
    color: #4180CB;
  }

  .footer1 .location i {
    font-size: 18px;
  }

  .footer1 .copyright p {
    border-top: 1px solid rgba(255, 255, 255, .1);
  }
  ..welcome-div img {
  border: 1px solid black;
  padding: 10px;
}

.post-content {
    overflow: hidden;
    line-height: 1.5em;
    max-height: 15em; /* Approximately 10 lines assuming 1.5em line-height */
    text-overflow: ellipsis;
  }

  .read-more-link {
    color: #3137a9;
    font-weight: 800;
    cursor: pointer;
  }

  .full-content {
    display: none;
  }


</style>

<body>
    <nav class="navbar navbar-expand-lg bg-danger  navbar-light p-2 fixed-top" style="">
        <div class="container">
          <a class="navbar-brand text-white display- fw-bold" style="font-size: 25px;" href="{{ url('/') }}">
            <img src="https://img.freepik.com/premium-vector/deer-logo-with-geometric-concept_11481-429.jpg?w=740" alt="Avatar Logo" style="width:60px;height: 55px;" class="rounded-circle">
            CeDReCS
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-white fw-bold" href="#">Discussions</a>
              </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-bold" href="">Groups</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-bold" href="">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-bold" href="">Connections</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-bold" href="">About</a>
          </li>
          <li class="nav-item">
            <button type="button" class="p-2 btn btn-warning text-dark fw-bold">Join Our Community !</button>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 ms-auto">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Search">
            <button class="btn btn-warning fw-bold" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
  </nav>









