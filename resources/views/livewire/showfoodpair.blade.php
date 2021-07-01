<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-body" id="cardBody">
                        @if(session()->has('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                        @endif

                        <a class="btn btn-outline-primary float-right" href="{{route('categories')}}">Categories</a>
                        <a href="{{route('new.pair')}}" class="btn btn-outline-info">Add Pair</a>
                        <hr>
                        <h5>Available food pairs  <a class="btn btn-outline-info btn-sm ml-5" href="#!" wire:click="clearSearch">Refresh</a>

                            <div class="col-sm-2 float-right">
                                <form >
                                    <input type="search" wire:model="food_name" required class="form-control" placeholder="Search foods">
                                </form>
                            </div>
                        </h5>
                        <hr>
                            <form wire:submit.prevent="updateFood">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="first_food_name">First Food name</label>
                                            <input required wire:model="first_food_name" type="text" id="first_food_name" class="form-control" >
                                            @error('first_food_name') <span class="error text-danger">{{ $message }}</span> @enderror

                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="second_food_name">Second Food name</label>
                                            <input required wire:model="second_food_name" type="text" id="second_food_name" class="form-control" >
                                            @error('second_food_name') <span class="error text-danger">{{ $message }}</span> @enderror

                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="cat_id">Category</label>
                                            <select  id="cat_id" wire:model="cat_id" class="custom-select" required>
                                                <option value="">Select category</option>
                                                @foreach($cats as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('cat_id') <span class="error text-danger">{{ $message }}</span> @enderror

                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            
                                            <button type="submit" class="mt-4 btn btn-outline-success btn-lg btn-block">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <hr>

                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>First Food </th>
                                <th>Second Food</th>
                                <th>Happen</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($fps as $f)
                                <tr>
                                    <td>{{$f->id}}</td>
                                    <td>{{$f->first_food_name}}</td>
                                    <td>{{$f->second_food_name}}</td>
                                    <td>{{$f->cat->category_name}}</td>
                                    <td>
                                        <a href="#!" wire:click="getEdit({{$f}})" class="btn btn-sm btn-outline-info">
                                            Edit
                                        </a>
                                        <a href="#!" wire:click="deleteFood({{$f->id}})" class="btn btn-sm btn-outline-danger">Delete</a>
                                       
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{$fps->links()}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
