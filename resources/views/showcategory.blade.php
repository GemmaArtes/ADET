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
               LIST OF CATEGORIES
            </h1>

        <br>
        <br>
        


                    </div>
       
                    <div class="table-responsive" align = "center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Category Number</th>
                                        <th>Category Name</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->type }}</td>
                                        
                                        <td>
                                            
                                            <a href = "#" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                
                                </tbody>
                            </table>
                        </div>    
                      

                      

      
  </section>


@endsection