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
                      <a class="navbar-brand waves-effect" href="{{route('hom')}}">
                        <img src="{{url('css/img/asd.png')}}" height="30">
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

                <!--Section: Post-->
                <section class="mt-4">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-8 mb-4">

                            <!--Featured Image-->
                            <div class="card mb-4 wow fadeIn">

                                <img src="{{url('css/img/'. $post->file)}}" class="img-fluid test" alt="">

                            </div>
                            <!--/.Featured Image-->

                            <!--Card-->
                            <div class="card mb-4 wow fadeIn">


                            </div>
                            <!--/.Card-->

                            <!--Card-->
                            <div class="card mb-4 wow fadeIn">

                                <!--Card content-->
                                <div class="card-body">

                                    <p class="h5 my-4">{{$post->title}}</p>
                                    <hr>
                                    <p>{{$post->description}}</p>
                                </div>

                            </div>

                            <!--/.Card-->
                        </div>

                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-4">
                            <!--Card-->
                            <div class="card mb-4 wow fadeIn">

                                <div class="card-header">Related articles</div>

                                <!--Card content-->
                                <div class="card-body">
                                    @foreach($archives as $archives)
                                        <ol class="list-unstyled">
                                            <li><a href="{{ route('postingan', ['post_id' => $archives->id]) }}">{!! \Illuminate\Support\Str::words($archives->title, 6, '...') !!}</a></li>
                                        </ol>
                                    @endforeach
                                </div>

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!--Section: Post-->

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
                <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MaBlog 2019 </a>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->
</body>
</html>
