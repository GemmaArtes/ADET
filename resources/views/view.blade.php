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
                LIST OF ALL PRODUCTS
            </h1>

<br>

      <div class="table-responsive" align = "center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product Number</th>
                                        <th>Product Code</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->category }}</td>

                                    </tr>
                                @endforeach

                                
                                </tbody>
                            </table>
                        </div>



                            
  </section>

@endsection