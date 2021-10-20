@section('title', 'Category add')

<form wire:submit.prevent="add">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" wire:model="title">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" wire:model="slug" disabled="disabled">
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <button class="btn btn-primary">Add category</button>
        <a class="btn btn-secondary" href="{{ route('lw.admin.categories.list') }}">Cancel</a>
    </div>

</form>
