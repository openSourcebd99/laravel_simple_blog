@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Latest Post in Each Category</h1>

    @foreach($categories as $category)
        <div class="category">
            <h2>{{ $category->name }}</h2>

            @if($latestPost = $category->latestPost())
                <div class="post">
                    <h3>{{ $latestPost->title }}</h3>
                    <p>{{ $latestPost->content }}</p>
                    <p><small>Posted on {{ $latestPost->created_at }}</small></p>
                </div>
            @else
                <p>No posts in this category yet.</p>
            @endif
        </div>
        <hr>
    @endforeach
</div>
@endsection
