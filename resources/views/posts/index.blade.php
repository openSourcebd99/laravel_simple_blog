@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Posts</h1>

    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p><strong>Category:</strong> {{ $post->category->name }}</p>
            <p><small>Posted on {{ $post->created_at }}</small></p>
        </div>
        <hr>
    @endforeach
</div>
@endsection
