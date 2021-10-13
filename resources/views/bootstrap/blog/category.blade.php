@extends('bootstrap.blog.layout_sb')

@section('title', $category->title)

@section('content')
    <div class="col-lg-8">
        <!-- Featured blog post-->
        @foreach ($posts as $post)
            <div class="card mb-4">
                <a href="{{ route('post', $post->slug) }}"><img class="card-img-top" src="{{ $post->thumbnail }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $post->getPostDate() }}</div>
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>
                        <a href="{{ route('category', $post->category->slug) }}">
                            <span class="badge bg-secondary">{{ $post->category->title }}</span>
                        </a>
                    </p>
                    <p class="card-text">{{ $post->description }}</p>
                    <a class="btn btn-primary" href="{{ route('post', $post->slug) }}">Read more →</a>
                </div>
            </div>
        @endforeach

        <!-- Pagination-->
        {{ $posts->links('vendor.pagination.bootstrap-4') }}

    </div>
@endsection
