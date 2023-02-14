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
                Add New Category
            </h1>

<br>
 <form action="{{ route('addcategory') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                              <label for="type" class="col-md-4 col-form-label text-md-right">Category Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="type" class="form-control" name="type" required autofocus>
                                  @if ($errors->has('type'))
                                      <span class="text-danger">{{ $errors->first('type') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="col-md-6 offset-md-4">
                              <button type="submit" name = "submit" class="btn btn-primary">
                                SUBMIT
                              </button>
                          </div>

                          <br>
                          <br>
                          <br>
                        

                    </div>
       

                      </form>

                      

                      

      
  </section>


@endsection