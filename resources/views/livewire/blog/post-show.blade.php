@section('title', $post->title)

<div class="col-lg-8">
    <div class="card mb-4">
        <img class="card-img-top" src="{{ $post->thumbnail }}" alt="..."/>
        <div class="card-body">
            <div class="small text-muted">{{ $post->created_at->format('d/m/Y, H:i') }}</div>
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">
                {{ $post->content }}
            </p>
        </div>
    </div>
</div>
