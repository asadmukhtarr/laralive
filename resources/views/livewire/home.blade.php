<div>
   <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-8">
               <div class="list-group">
                    @foreach($posts as $post)
                        <a href="#" wire:click="single({{ $post->id }})" class="list-group-item mt-2 list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $post->title }}</h5>
                            <small>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
                            </div>
                            <p class="mb-1">{{ $post->description }}</p>
                        </a>

                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
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
        </div>
   </div>
</div>
