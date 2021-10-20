@section('subtitle', 'Contact Form')

<div class="col-lg-8">
    <!-- Featured blog post-->
    <div class="card mb-4">
        <div class="card-body">

            <form wire:submit.prevent="submit">

                <div class="mb-3">
                    <label for="exampleInputEmail">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter name" wire:model="email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputbody">Comment</label>
                    <textarea class="form-control" id="exampleInputbody" placeholder="Enter Body" wire:model="comment"></textarea>
                    @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-primary mb-3">Save Contact</button>
            </form>
        </div>
    </div>
</div>
