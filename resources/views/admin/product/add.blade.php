@extends('layouts.admin')

@section('content')
  <div class="card">
      <div class="card-header-success">
            <h4 class="text-white">Add Product</h4>
      </div>
      <div class="card-body">
          <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 
                <div class="row">
                    <div class="col-md-12 mb-3">
                       <select class="form-select" name="cate_id" required autocomplete="cate_id" autofocus>
                            <option value="" >Select a Category</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                       </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label> 
                        <input type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                    </div>

                    <!--  Editable /models product php / database migrations / php my admin --> 
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label> 
                        <input type="text" class="form-control" name="slug" required autocomplete="slug" autofocus>
                    </div>   

                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description"  placeholder="beta test" rows="3" class="form-control" required autocomplete="small_description" autofocus></textarea>
                    </div>

                    

                    
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description"  rows="3" class="form-control" required autocomplete="description" autofocus></textarea>
                    </div>
 
                    
                    <div class="col-md-6 mb-3">
                        <label for="" >Original Price</label> 
                       <input type="number" class="form-control" name="original_price" required autocomplete="original_price" autofocus>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label> 
                       <input type="number" class="form-control"  name="selling_price" required autocomplete="selling_price" autofocus>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label> 
                       <input type="number" class="form-control"  name="qty" required autocomplete="qty" autofocus>
                    </div>

                    
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label> 
                       <input type="number" class="form-control" name="tax" required autocomplete="tax" autofocus>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox"  name="status">
                    </div>
                    

                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox"  name="trending">
                    </div>


                   
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Title</label> 
                       <input type="text" class="form-control" name="meta_title" required autocomplete="meta_title" autofocus>
                    </div>  


                    
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Keywords</label> 
                        <textarea name="meta_keywords"  rows="3" class="form-control" required autocomplete="meta_keywords" autofocus></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Description</label> 
                        <textarea name="meta_description"  rows="3" class="form-control" required autocomplete="meta_description" autofocus></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control" required autocomplete="image" autofocus>Submit</button>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-round">Submit</button>
                    </div>
                </div>
          </form>
      </div>
</div>

@endsection 