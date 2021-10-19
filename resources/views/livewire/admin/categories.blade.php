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
    @foreach ($categories as $category)

        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->title }}</td>
            <td>{{ $category->slug }}</td>
            <td>
                <button>...</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
