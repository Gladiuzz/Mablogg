<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
          <div class="container">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="{{route('hom')}}">
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

         <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">
            <section class="pt-5">
                <!--Grid row-->
                <div class="row wow fadeIn">
                    @foreach ($posts as $posts)
                    <!--Grid column-->
                    <div class="col-lg-5 col-xl-4 mb-4">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1-half">
                            <div class="view overlay">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="{{url('css/img/'. $posts->file)}}"></img>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->



                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>{{$posts->title}}</strong>
                        </h3>
                        <p class="grey-text">By {{ $posts->name }}<br> created at {{ Carbon\Carbon::parse($posts->created_at)->format('d-m-Y')  }}</p>
                        <p>
                            <strong>{!! \Illuminate\Support\Str::words($posts->description, 20, '...') !!}</strong>
                        </p>
                        <a  href="{{ route('postingan', ['post_id' => $posts->id]) }} target="_blank" class="btn btn-primary btn-md">Read More
                            <i class="fas fa-play ml-2"></i>
                        </a>
                    </div>

                    @endforeach
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <hr class="mb-5">
            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->
      </header>
</body>
</html>
