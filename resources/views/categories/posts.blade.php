@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts in Category: {{ $category->name }}</h1>

    @foreach($category->posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p><small>Posted on {{ $post->created_at }}</small></p>
        </div>
        <hr>
    @endforeach
</div>
@endsection
