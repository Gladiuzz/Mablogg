@extends('extension.sidebar')

@section('content')
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
    <h1>Posts</h1>
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Learn more</th>
            <th>Created on</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->name }}</td>
                    <td>
                        <a href="{{ route('post.edit', ['id' => $post->id]) }}">view more</a>
                    </td>
                    <td>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</td>
                </tr>
            @endforeach
        @else
            <p class="text-center text-primary">No Posts created Yet!</p>
        @endif
    </table><Br>
</main>
@endsection
