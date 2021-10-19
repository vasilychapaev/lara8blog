<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Slug</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)

        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>
                <button>...</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
