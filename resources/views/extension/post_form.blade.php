@extends('extension.sidebar')

@section('content')
    <form method="POST" action="{{ route('post.create') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-12">
            <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control border-light bg-light" id="id_title" name="title"
                           aria-describedby="title" placeholder="Enter title">
            </div>
            <hr>
            <div class="md-form">
                    <label for="form7">Description</label>
                    <textarea class="md-textarea form-control " id="form7" rows="20" name="description"></textarea>
            </div>
            <hr><br>
            <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="custom-file" name="file">
                        <label for="custom-file-label" class="custom-file-label">Choose Picture</label>
                    </div>
            </div><br>
            <a href="" class="btn btn-dark">Back</a>
            <button type="submit" class="btn btn-primary float-right">Create post</button>
        </div>
    </form>
@endsection
