<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/sendiri.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Log In</title>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <hr>
              <form class="form-signin" action="{{ url('/Log_in') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                </div>

                <div class="form-label-group" >
                  <input type="password" name="password" id="inputPassword" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                @if ($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                </div>

                {{-- <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div> --}}
                <hr>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                <a href="{{url('registrasi')}}" class="btn btn-lg btn-dark btn-block text-uppercase">Register</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
