{{-- Reusable Post Card Component --}}
<div class="card mb-3" style="width: 18rem;">
    {{-- Optional image --}}
    @if(isset($posts['image']))
    <img src="{{ $posts['image'] }}" class="card-img-top" alt="{{ $posts['title'] }}">
    @endif

    <div class="card-body">
        {{-- Post Title --}}
        <h5 class="card-title">{{ $posts['title'] }}</h5>

        {{-- Post Meta --}}
        <small class="text-muted">
            By {{ $posts['author'] }} |
            Category:
            <a href="{{ route('blog.category', $posts['category']) }}">{{ $posts['category'] }}</a>
        </small>

        {{-- Short content --}}
        <p class="card-text mt-2">{{ Str::limit($posts['content'], 100) }}</p>

        {{-- "Read More" link based on post ID --}}
        <a href="{{ route('blog.show', $posts['id']) }}" class="btn btn-primary">
            Read More
        </a>
    </div>
</div>