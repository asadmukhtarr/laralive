<div>
   <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Create Post
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="save">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" wire:model="title" class="form-control" />
                                @error('title')
                                <font color="red"><b>{{ $message }}</b></font>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="" class="form-control" wire:model="description" id="" cols="30" rows="5" style="resize:none;"></textarea>
                                @error('description')
                                <font color="red"><b>{{ $message }}</b></font>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
               <div class="list-group">
                    @foreach($posts as $post)
                                <a href="#" wire:click="single({{ $post->id }})" class="list-group-item mt-2 list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $post->title }}</h5>
                                    <small>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
                                    </div>
                                    <p class="mb-1">{{ $post->description }}</p>
                                </a>
                                <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                @if(!empty($data))
                <div class="card">
                    <div class="card-header">
                            <label>{{ $data->title }} </label>
                        </div>
                        <div class="card-body">
                            <p>
                            {{ $data->description }}
                            </p>
                        </div>
                    </div>
                </div>
                @endif

        </div>
   </div>
</div>
