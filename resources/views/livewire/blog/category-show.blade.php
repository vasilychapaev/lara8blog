@section('subtitle', $category->title)

<div class="col-lg-8">
    <!-- Featured blog post-->
    @foreach ($category->posts as $post)
        <div class="card mb-4">
            <a href="{{ route('lw.blog.post.show', $post->slug) }}"><img class="card-img-top" src="{{ $post->thumbnail }}" alt="..."/></a>
            <div class="card-body">
                <div class="small text-muted">{{ $post->getPostDate() }}</div>
                <h2 class="card-title">{{ $post->title }}</h2>
                <p>
                    <a href="{{ route('category', $category->slug) }}">
                        <span class="badge bg-secondary">{{ $category->title }}</span>
                    </a>
                </p>
                <p class="card-text">{{ $post->description }}</p>
                <a class="btn btn-primary" href="{{ route('lw.blog.post.show', $post->slug) }}">Read more →</a>
            </div>
        </div>
    @endforeach

<!-- Pagination-->
    {{ $posts->links('vendor.pagination.bootstrap-4') }}

</div>
