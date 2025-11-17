@extends('layout.app')

@section('content')
{{-- Check if the post exists --}}
@if($posts)
<div class="card mb-4">
    {{-- Optional image --}}
    @if(isset($posts['image']))
    <img src="{{ $posts['image'] }}" class="card-img-top" alt="{{ $posts['title'] }}">
    @endif

    <div class="card-body">
        <h2 class="card-title">{{ $posts['title'] }}</h2>
        <small class="text-muted">
            By {{ $posts['author'] }} |
            Category:
            <a href="{{ route('blog.category', $posts['category']) }}">{{ $posts['category'] }}</a> |
            {{ $posts['created_at'] }}
        </small>

        <p class="mt-3">{{ $posts['content'] }}</p>

        <a href="{{ route('blog.index') }}" class="btn btn-secondary">Back to All Posts</a>
    </div>
</div>
@else
<p>Sorry, the post was not found.</p>
<a href="{{ route('blog.index') }}" class="btn btn-secondary">Back to All Posts</a>
@endif
@endsection