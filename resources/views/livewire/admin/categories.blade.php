<div>
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
                    <button class="btn btn-primary" wire:click="editCategory({{$category->id}})"><i data-feather="edit-2"></i></button>
                    <button class="btn btn-light" wire:click="deleteCategory({{$category->id}})"><i data-feather="trash"></i></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
