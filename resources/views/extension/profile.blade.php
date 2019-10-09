<title>Profile</title>
@extends('extension.nav')

@section('content')
<div class="container">
    <form action="{{route('profile')}}" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 all">
            <img src="css/img/{{Auth::user()->avatar}}" class="profile_img" alt="lights">
            <h2 class="profil_name">{{Auth::user()->name}}'s profile</h2>
                <label for="">Update Profile Image</label><br>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="save" class=" btn btn-outline-primary" style="float: right">
        </div>
    </div>
    <hr>
    </form>
</div>
@endsection
