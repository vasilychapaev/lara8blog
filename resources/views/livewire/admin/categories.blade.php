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
                    {{--                    <button class="btn btn-light" wire:click="deleteCategory({{$category->id}})"><i data-feather="trash"></i></button>--}}

                    <span x-data="{ open: false }">
                        <button @click="open = true" x-show="!open" class="btn btn-block btn-light">
                            <i data-feather="trash"></i>
                        </button>

                        <button type="button" class="btn btn-block btn-danger"
                                x-show="open" @click.away="open=false" x-cloak
                                wire:click="deleteCategory('{{ $category->id }}')"><i data-feather="trash"></i></button>
                    </span>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}


    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategory" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        Manage Organizations that this doctor belongs to using the input below.
                    </div>
                    <div class="form-group">
                        <label for="orgs">Title</label>
                        <input type="text" wire:model.defer="editTitle">
                        @error('editTitle') <span class="red-900">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" wire:click.prevent="storeCategory()">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

@push('footerJs')
    <script>
        Livewire.on('test', data => {
            console.log('done')
        });
    </script>
@endpush
