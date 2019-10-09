<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/sendiri.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Register</h5>
              <hr>
              <form class="form-signin" action="{{ url('/registrasi') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-label-group">
                    <input type="text" name="name" id="inputname" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('name')}}" placeholder="Name" required autofocus>
                    <label for="inputname">Name</label>

                @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                </div>
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{old('email')}}" placeholder="Email address" required >
                  <label for="inputEmail">Email address</label>
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                </div>
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"  placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                @if ($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                </div>


                <div class="form-label-group">
                    <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}""" placeholder="Password Confirmation" required>
                    <label for="Password">Password Confirmation</label>
                @if ($errors->has('password_confirmation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                @endif
                </div>

                <hr>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                <a href="{{url('Log_in')}}" class="btn btn-lg btn-dark btn-block text-uppercase">Log In</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
