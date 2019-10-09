<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MaBlog</title>
  <link href="{{ asset('/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
  <!-- MDB -->
  <link href="{{ asset('/MDB/css/mdb.css')}}" rel="stylesheet">
  <link href="{{asset('/MDB/css/mdb.min.css')}}" rel="stylesheet">
  <link href="{{asset('/MDB/css/style.css')}}" rel="stylesheet">

</head>

<body>
    <!--Main Navigation-->
  <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
          <div class="container">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="" target="_blank">
                <img src="css/img/asd.png" height="30" alt="mdb logo">
              <strong class="blue-text">MaBlog</strong>
            </a>

            <!-- Collapse -->
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> --}}

            <!-- Links -->
            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}

              <!-- Right -->
              <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                  <a href="{{route('Log_in')}}" class="btn btn-default">
                      <span>Sign In</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('registrasi')}}" class="btn btn-outline-default">
                    <span>Sign Up</span>
                  </a>
                </li>
              </ul>

            {{-- </div> --}}

          </div>
        </nav>
        <!-- Navbar -->

      </header>
      <!--Main Navigation-->

      <!--Main layout-->
      <main class="mt-5 pt-5">
        <div class="container">

          <!--Section: Jumbotron-->
          <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

            <!-- Content -->
            <div class="card-body text-white text-center py-5 px-5 my-5">

              <h1 class="mb-4">
                <strong>Welcome to MaBlog</strong>
              </h1>
              <p class="mb-4">
                <strong>This Blog is created by student from SMKN 4 Bandung, they are Hasin B.P and Syarif H</strong>
              </p>
            <div class="md-form">
                <form action="{{route ('search')}}" method="GET">
                <i class="fas fa-search"></i>
                <!-- Material input -->
                <input placeholder="Search" type="text" id="inputPlaceholderEx" class="text-white">
                <input  type="submit"  class="btn btn-sm bg-white text-primary" value="Search">
                </form>
            </div>


              </a>

            </div>
            <!-- Content -->
          </section>
          <!--Section: Jumbotron-->

          <hr class="my-5">

          <!--Section: Cards-->
          <section class="text-center">

            <!--Grid row-->
            <div class="row mb-4 wow fadeIn">

              <!--Grid column-->
              @foreach ($posts as $posts)
              <div class="col-lg-4 col-md-12 mb-4">
                <!--Card-->
                <div class="card">

                  <!--Card image-->
                  <div class="view overlay">
                    <div class="embed-responsive embed-responsive-16by9 rounded-top">
                      <img class="embed-responsive-item" src="{{url('css/img/'. $posts->file)}}"></img>
                    </div>
                  </div>

                  <!--Card content-->
                  <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">{{$posts->title}}</h4>
                    <!--Text-->
                    <p class="card-text">{!! \Illuminate\Support\Str::words($posts->description, 30, '...') !!}</p>
                    <a href="{{ route('postingan', ['post_id' => $posts->id]) }}" class="btn btn-primary btn-sm">Read more</a>
                    <p class="card-text">
                      <strong>{{ $posts->name }}<br> created at {{ Carbon\Carbon::parse($posts->created_at)->format('d-m-Y')  }}</strong>
                    </p>
                  </div>

                </div>
                <!--/.Card-->

              </div>
              <!--Grid column-->
              @endforeach
            </div>
            <!--Grid row-->

            <!--Pagination-->
            <nav class="d-flex justify-content-center wow fadeIn">
              <ul class="pagination pg-blue">

                <!--Arrow left-->
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>

                <li class="page-item active">
                  <a class="page-link" href="#">1
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">5</a>
                </li>

                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!--Pagination-->

          </section>
          <!--Section: Cards-->

        </div>
      </main>
      <!--Main layout-->

      <!--Footer-->
      <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
          <a href="" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
          </a>

          <a href="" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
          </a>

          <a href="https://www.youtube.com/channel/UClpTXXemCwpMmfCZHX3uZRw?view_as=subscriber" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
          </a>

          <a href="" target="_blank">
            <i class="fab fa-google-plus-g mr-3"></i>
          </a>

          <a href="" target="_blank">
            <i class="fab fa-dribbble mr-3"></i>
          </a>

          <a href="" target="_blank">
            <i class="fab fa-pinterest mr-3"></i>
          </a>

          <a href="" target="_blank">
            <i class="fab fa-github mr-3"></i>
          </a>

          <a href="https://steamcommunity.com/id/Sinjz" target="_blank">
            <i class="fab fa-steam"></i>
          </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
          © 2019 Copyright:
          <a href="#" target="_blank"> MaBlog 2019 </a>
        </div>
        <!--/.Copyright-->

      </footer>
      <!--/.Footer-->
</body>

</html>
