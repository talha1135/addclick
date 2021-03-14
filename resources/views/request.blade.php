<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"></script> 
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Dashboard</title>
    <style>
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="{{'/admin'}}" ><span style="margin-left: 10px;">Dashboard</span> </a>
  <div class="btn-group dropleft">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     {{Auth::user()->name}}
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
          Logout</a>
      </div>
  </div>
</nav>
<br>


<!-- Cards data -->

<div class="container">
<h1>Filter By Data</h1><br></div>



<div class=" container">
    <table id="mytable" class="table table-striped table-bordered">

        <thead class=" thead-light ">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Website</th>
            <th scope="col"> Actions</th>
          </tr>
        </thead>
        <tbody>
          @php
                $count=1;
            @endphp
          <tr>
            @foreach ($users as $item) 
                
           
            <th scope="row">{{$count}}</th>
            <td>{{$item->name}}</td> 
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td> 
            <td>{{$item->website}}</td> 
            <td><a href="{{route('details',$item->id)}}" class="btn btn-primary">View Details</a>&nbsp<a href="{{route('delete',$item->id)}}" class="btn btn-danger">Delete</a></td> 
          </tr>
          {{$count++}}
          @endforeach 
       
          
        </tbody>  
        
  </table> 
</div><br>
</body>
</html>
<script>
$(document).ready( function () {
    $('#mytable').DataTable();
} );
</script>