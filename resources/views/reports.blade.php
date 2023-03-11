@extends('dashboard')
  
@section('content')

<style>

    /* Table Style */

    .table {
        width: 90%;
        border-collapse: collapse;
        border-spacing: 0 30px;
        border: 1px solid black;
        background: #D6D3D4;    
    }

    .table-head{
        background: #D6D3D4;
    }

    .table-responsive{
        height: 400px;
        overflow-y: scroll;
    }

    th {
        text-align: center;
        border-collapse: collapse;
        border: 1px solid;
        border-color: black;
        height: 50px;
        
    }

    td {
        text-align: center;
        border-collapse: collapse;
        border: 1px solid;
        border-color: black;
        height: 40px;
    }


    /* Page Header */
    
    .text {
        position: absolute;
        left: -20px;
        top: -20px;
        background: #CDC0C2;
        opacity: 75%;
        height: 11%;
        padding: 1.5%;
        width: 100%;
        box-shadow: 0px 1px gray;
    }

    /* Table Box Style */

    .t-box {
        background: #CDC0C2;
        opacity: 75%;
        position: absolute;
        margin: auto;
        width: 95%;
        padding: 30px;
        top: 20%;
        left: 3%;
        border-radius: 15px;
        border: 1px solid black;
    }

    .t-header {
        box-shadow: 0px 1px gray;
        flex-direction: row;
        display: flex;
    }

    .title {
        padding-bottom: 10px;
    }

    .add-prod {
        background: black;
        color: white;
        font-style: arial;
        font-weight: 500;
        font-size: 20px;
        height: 30px;
        margin-left: 10px;
        width: 30px;
        border: 1px solid white;
        margin-top: 2px;
    }

    
</style>

<section class="home-section">
      <div class="text">Lim's Sari-Sari Store Monitoring System</div>

      <br>
      <br>
      <br>

      <div class="container-fluid page-body-wrapper">
            <div class="container t-box" align = "left">
            <div class=t-header>
                <h1 class="title">
                    REPORTS
                </h1>
            </div>

<br>

      <div class="table-responsive" align = "center">
                            <table class="table">
                                <thead class="table-head">
                                    <tr>
                                        <th>Product #</th>
                                        <th>Name</th>
                                        <th>Stock Added</th>
                                        <th>Stock Left</th>
                                        <th>Date & Time</th>


                                </thead>
                                </thead>
                                <tbody classname="table-body">
                                  @foreach($report as $item)
                                    <tr>
                                        <td>{{ $item->product_id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->quantity_add }}</td>
                                        <td>{{ $item->stockleft }}</td>
                                        <td>{{ $item->created_at }}</td>

                                    </tr>
                               
   
                                @endforeach
                                </tbody>
                            </table>
                        </div>


  </section>

@endsection