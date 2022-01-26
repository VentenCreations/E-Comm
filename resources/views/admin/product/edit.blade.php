@extends('layouts.admin')

@section('content')
  <div class="card">
      <div class="card-header-success">
            <h4>Add Product</h4>
      </div>
      <div class="card-body">
          <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                 @method('PUT')
                 @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Category</label>
                            <select class="form-select">
                                        <option value="">{{ $products->category->name }}</option>
                            </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label> 
                        <input type="text" class="form-control" value="{{ $products->name }}" name="name" required autocomplete="name" autofocus>
                    </div>

                   
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label> 
                       <input type="text" class="form-control"  value="{{ $products->slug }}" name="slug" required autocomplete="slug" autofocus>
                    </div>  

                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description"  rows="3"  class="form-control" required autocomplete="small_description" autofocus>{{ $products->small_description }}</textarea>
                    </div>

                    
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description"  rows="3"   class="form-control" required autocomplete="description" autofocus >{{ $products->description }}</textarea>
                    </div>
 
                    
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label> 
                       <input type="number" class="form-control" value="{{ $products->original_price }}"  name="original_price" required autocomplete="original_price" autofocus>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label> 
                       <input type="number" class="form-control" value="{{ $products->selling_price }}" name="selling_price" required autocomplete="selling_price" autofocus>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label> 
                       <input type="number" class="form-control" value="{{ $products->qty }}" name="qty" required autocomplete="qty" autofocus>
                    </div>

                    
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label> 
                       <input type="number" class="form-control" value="{{ $products->tax }}" name="tax" required autocomplete="tax" autofocus>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{ $products->status == "1" ? 'checked' : '' }}  name="status">
                    </div>
                    

                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" {{ $products->trending == "1" ? 'checked' : '' }} name="trending">
                    </div>


                   
                    <div class="col-md-6 mb-3">                     
                        <label for="">Meta Title</label> 
                       <input type="text" class="form-control" value="{{ $products->meta_title }}" name="meta_title" required autocomplete="meta_title" autofocus>
                    </div>  


                    
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Keywords</label> 
                        <textarea name="meta_keywords"  rows="3" class="form-control" required autocomplete="meta_keywords" autofocus>{{ $products->meta_keywords }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Meta Description</label> 
                        <textarea name="meta_description" rows="3" class="form-control" required autocomplete="meta_description" autofocus>{{ $products->meta_description }}</textarea>
                    </div>

                    @if ($products->image)
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="">
                    @endif

                    <div class="col-md-12">
                        <input type="file" name="image" rel="tooltip" title="Select image" class="form-control">
                        {{ $products->image }}
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-round">Update</button>
                    </div>
                    
                </div>          
          </form>
      </div>
</div>

@endsection 