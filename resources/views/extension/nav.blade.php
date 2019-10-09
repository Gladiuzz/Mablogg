<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
    <!-- MDB -->
    <link href="{{ asset('/MDB/css/mdb.css')}}" rel="stylesheet">
    <link href="{{asset('/MDB/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('/MDB/css/style.css')}}" rel="stylesheet">
    @yield('style')
    <title>Document</title>
</head>
<body>
    {{-- <nav class="navbar navbar-dark default-color">
        <a class="navbar-brand" href="#">
          <img src="css/img/asd.png" height="30" class="d-inline-block align-top"
            alt="mdb logo"> MaBlog
        </a>
        <form class="form-inline my-1">
                <button class="btn btn-outline-white btn-sm my-0" type="submit">Back</button>
        </form>
      </nav> --}}
      <nav class="navbar navbar-expand-lg navbar-dark warna">
            <a class="navbar-brand" href="{{route('t1')}}">
                    <img src="css/img/asd.png" height="30" alt="mdb logo">
                    <span>MaBlog</span>
            </a>
            |
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('t1')}}">Posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('ss')}}">Create</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('logout')}}">Logout</a>
                </li>
              </ul>
            </div>

          </nav>



        @yield('content')

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
