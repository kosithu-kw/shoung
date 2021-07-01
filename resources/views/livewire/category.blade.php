<div class="container-fluid">
    
    <div class="row">
        <div class="col-sm-12">
            <div class="card">             

                <div class="card-body" id="cardBody">
                    <a href="{{route('home')}}" class="btn btn-outline-primary mb-2">Dashboard</a>

                    @if(session()->has('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                    @endif

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5>{{$page_title}}</h5>
                                    <hr>
                                    <form wire:submit.prevent="saveCategory">
                                        <div class="form-group">
                                            <label for="category_name">Category name</label>
                                            <input type="text" wire:model="category_name"  id="category_name" class="form-control">
                                            @error('category_name') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary ">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5>Categories</h5>
                                    <hr>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Category name</td>
                                            <td>Actions</td>
                                        </tr>
                                        @foreach($cats as $c)
                                            <tr>
                                                <td>{{$c->category_name}}</td>
                                                <td>
                                                    <a href="#!" wire:click="editCat({{$c}})" class="btn btn-sm btn-outline-info">Edit</a>
                                                    <a href="#!" wire:click="deleteCat({{$c->id}})" class="btn btn-sm btn-outline-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
