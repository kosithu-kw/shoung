
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-body" id="cardBody">
                        @if(session()->has('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                        @endif

                        <a class="btn btn-outline-primary float-right" href="{{route('home')}}">Dashboard</a>
                        <a href="{{route('categories')}}" class="btn btn-outline-info"> Categories</a>
                        
                        <hr>

                        <h5>Add New Food Pair</h5>
                        <hr>

                        <div class="row">
                            <div class="col-sm-8 offset-sm-2">
                                <form wire:submit.prevent="saveFood">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="first_food_name">First Food name</label>
                                                <input wire:model="first_food_name" type="text" id="first_food_name" class="form-control" >
                                                @error('first_food_name') <span class="error text-danger">{{ $message }}</span> @enderror

                                            </div>
                                        </div>
                                        {{--
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="first_food_image">Food Image</label>
                                                <input wire:model="first_food_image" type="file" id="first_food_image" class="form-control-file" >
                                                @error('first_food_image') <span class="error text-danger">{{ $message }}</span> @enderror

                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div wire:loading wire:target="first_food_image">Uploading...</div>
                                            @if ($first_food_image)
                                                <img class="img-fluid" src="{{ $first_food_image->temporaryUrl() }}">
                                            @endif
                                        </div>
                                        --}}
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="second_food_name">Second Food name</label>
                                                <input wire:model="second_food_name" type="text" id="second_food_name" class="form-control" >
                                                @error('second_food_name') <span class="error text-danger">{{ $message }}</span> @enderror

                                            </div>
                                        </div>
                                        {{--
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="second_food_image">Food Image</label>
                                                <input wire:model="second_food_image" type="file" id="second_food_image" class="form-control-file" >
                                                @error('second_food_image') <span class="error text-danger">{{ $message }}</span> @enderror

                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div wire:loading wire:target="second_food_image">Uploading...</div>
                                            @if ($second_food_image)
                                                <img class="img-fluid" src="{{ $second_food_image->temporaryUrl() }}">
                                            @endif
                                        </div>
                                        --}}
                                    </div>
                                    {{--
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="happen">Happen</label>
                                                <input wire:model="happen" type="text"  id="happen" class="form-control">
                                                @error('happen') <span class="error text-danger">{{ $message }}</span> @enderror

                                            </div>
                                        </div>
                                    </div>
                                    --}}
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="cat_id">Category</label>
                                                <select  id="cat_id" wire:model="cat_id" class="custom-select">
                                                    <option value="">Select category</option>
                                                    @foreach($cats as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('cat_id') <span class="error text-danger">{{ $message }}</span> @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-gorup">
                                        <button type="submit" class='btn btn-primary btn-lg'>Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

