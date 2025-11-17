@extends('layout.app')

@section('content')
<h2 class="mb-4">Posts in "{{ $category }}"</h2>

@if($posts->isEmpty())
<p>No posts found in this category.</p>
@else
<div class="row">
    @foreach($posts as $post)
    <div class="col-md-4 mb-4">
        <x-post-card :posts="$post" />
    </div>
    @endforeach
</div>
@endif

{{-- Back to All Posts Button --}}
<a href="{{ route('blog.index') }}" class="btn btn-secondary mt-3">Back to All Posts</a>
@endsection