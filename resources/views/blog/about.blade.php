@extends('layout.app')

@section('content')
<div class="container">
    <div class="card p-4 mb-4">
        <h2>About This Blog</h2>
        <p>
            Welcome to this mini blog quiz! This application demonstrates the use of Laravel Controllers, Blade templates, reusable components, route parameters, and filtering posts by category.
        </p>
        <p>
            All blog posts are simulated using an array in the BlogfController controller for learning purposes. You can view all posts, filter by category, or read a full post by clicking "Read More".
        </p>
        <a href="{{ route('blog.index') }}" class="btn btn-secondary mt-3">Back to Home</a>
    </div>
</div>

@endsection