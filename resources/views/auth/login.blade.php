@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
        <div class="store-label">
            <h5>Sari-Saris Store's Inventory</h5>
            <h1>LIM'S MONITORING SYSTEM</h1>
        </div>
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">WELCOME BACK!</div>
                  <div class="card-body">
  
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" placeholder="Email Address" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div >
                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection