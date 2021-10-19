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
    @foreach ($tags as $tag)

        <tr>
            <th scope="row">{{ $tag->id }}</th>
            <td>{{ $tag->title }}</td>
            <td>{{ $tag->slug }}</td>
            <td>
                <button>...</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
