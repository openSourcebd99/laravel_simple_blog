@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Latest Post in {{ $category->name }}</h1>

    @if($latestPost)
        <div class="post">
            <h3>{{ $latestPost->title }}</h3>
            <p>{{ $latestPost->content }}</p>
            <p><small>Posted on {{ $latestPost->created_at }}</small></p>
        </div>
    @else
        <p>No posts in this category yet.</p>
    @endif
</div>
@endsection
