@extends('dashboard')
  
@section('content')

<section class="home-section">
      <div class="text">Lim's Sari-Sari Store Monitoring System</div>
      
      <br>
      <br>
      <br>
      
      <div class="container-fluid page-body-wrapper">
            <div class="container" align = "center">
            <h1 class="title">
                Add New Product
            </h1>
        <br>
        <form action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                              <label for="code" class="col-md-4 col-form-label text-md-right">Product Code</label>
                              <div class="col-md-6">
                                  <input type="text" id="code" class="form-control" name="code" required autofocus>
                                  @if ($errors->has('code'))
                                      <span class="text-danger">{{ $errors->first('code') }}</span>
                                  @endif
                              </div>
                          </div>
    
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="quantity" class="col-md-4 col-form-label text-md-right">Quantity</label>
                              <div class="col-md-6">
                                  <input type="number" id="quantity" class="form-control" name="quantity" required>
                                  @if ($errors->has('quantity'))
                                      <span class="text-danger">{{ $errors->first('quantity') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                              <div class="col-md-6">
                                  <input type="number" id="price" class="form-control" name="price" required>
                                  @if ($errors->has('price'))
                                      <span class="text-danger">{{ $errors->first('price') }}</span>
                                  @endif
                              </div>
                          </div>       

  
                          <div class="form-group row">
                              <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
                              <select class="form-select form-select-lg mb-3" id="category" name="category">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($category as $categories)
                                    <option value="{{ $categories->type }}">{{ $categories->type }}</option>
                                    @endforeach
                                </select>
                          </div>
                    
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" name = "submit" class="btn btn-primary">
                                SUBMIT
                              </button>
                          </div>

                      </form>
  </section>

  @endsection