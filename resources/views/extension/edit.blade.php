@extends('extension.sidebar')

@section('content')
    <form method="POST" action="{{ route('post.update', ['id' => $post->id]) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-12">
            <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control border-light bg-light" id="id_title" name="title"
                           aria-describedby="title" placeholder="Enter title" value="{{ $post->title }}">
            </div>
            <hr>
            <div class="md-form">
                    <textarea class="md-textarea form-control " id="form7" rows="20" name="description" >{{ $post->description }}</textarea>
            </div>
            <hr><br>
            <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="custom-file" name="file">
                        <label for="custom-file-label" class="custom-file-label">Choose Picture</label>
                    </div>
            </div><br>
            <button type="submit" class="btn btn-primary float-right">Update</button>
        </div>
    </form>
    <form  method="post" action="{{url('/author/post/delete/'.$post->id)}}">
        @method('delete')
        @csrf
    <input type="hidden" name="id" value="{{$post->id}}">
    <button type="submit" class="btn btn-danger float-left">Delete</button>
    </form>
@endsection
