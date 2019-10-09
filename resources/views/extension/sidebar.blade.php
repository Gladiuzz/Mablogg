<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('/bootstrap/css/bootstrap-grid.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
    <!-- MDB -->
    <link href="{{asset('/MDB/css/mdb.css')}}" rel="stylesheet">
    <link href="{{asset('/MDB/css/mdb.min.css')}}" rel="stylesheet">
    @yield('style')

    <title>Posts</title>
</head>
<body>
            <div class="page-wrapper chiller-theme toggled">
              <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
              </a>
              <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                  <div class="sidebar-brand">
                        <img class="img-responsive img-rounded" src="{{url('css/img/asd.png')}}" width="50px">
                        <a href="#" class="text-logo">MaBlog</a>
                    <hr>
                  </div>
                  <div class="sidebar-header">
                    <div class="user-pic" >
                      <img class="img-responsive img-rounded" src="{{url('css/img/'. Auth::user()->avatar)}}">
                    </div>
                    <div class="user-info">
                      <span class="nama-user">
                        {{Auth::user()->name}}
                      </span>
                      <span>
                            {{Auth::user()->email}}
                      </span>
                    </div>
                  </div>
                  <!-- sidebar-header  -->
                  <div class="sidebar-menu">
                    <ul>
                      <li class="header-menu">
                        <span>General</span>
                      </li>
                      <li class="sidebar-dropdown">
                        <a href="{{route('t1')}}">
                          <i class="fas fa-list"></i>
                          <span>Posts</span>
                        </a>
                      </li>
                      <li class="sidebar-dropdown">
                        <a href="{{route('ss')}}">
                          <i class="fas fa-plus"></i>
                          <span>Create Post</span>
                        </a>
                      </li>
                      <li class="sidebar-dropdown">
                        <a href="{{route('profile')}}">
                          <i class="fas fa-user"></i>
                          <span>Profile</span>
                        </a>
                      </li>
                      <li class="sidebar-dropdown">
                        <a href="{{route('logout')}}">
                          <i class="fas fa-sign-out-alt"></i>
                          <span>Log Out</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <!-- sidebar-wrapper  -->
              <main class="page-content">
                  @yield('content')
              </main>
            </div>
            <!-- page-wrapper -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                    crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                    crossorigin="anonymous"></script>
             <!-- JQuery -->
                <script type="text/javascript" src="MDB/js/jquery-3.4.0.min.js"></script>
            <!-- Bootstrap tooltips -->
                <script type="text/javascript" src="MDB/js/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
                <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
                <script type="text/javascript" src="MDB/js/mdb.min.js"></script>

</body>
</html>
