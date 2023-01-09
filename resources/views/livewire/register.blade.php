<div>
   <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4">
                <form wire:submit.prevent="save">
                    <div class="card">
                        <div class="card-header">
                            Register Here
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" wire:model="name" class="form-control" />
                                @error('name')
                                <font color="red"><b>{{ $message }}</b></font>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" wire:model="email" class="form-control" />
                                @error('email')
                                <font color="red"><b>{{ $message }}</b></font>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" wire:model="password" class="form-control" />
                                @error('password')
                                <font color="red"><b>{{ $message }}</b></font>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
   </div>
</div>
