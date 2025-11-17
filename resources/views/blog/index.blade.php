@extends('layout.app')

@section('content')
<h2 class="mb-4">All Blog Posts</h2>
<div class="container">
    <div class="row">
        @foreach($posts as $posts)
        <div class="col-md-4 mb-4">
            <x-post-card :posts="$posts" />
        </div>
        @endforeach
    </div>
</div>

@endsection