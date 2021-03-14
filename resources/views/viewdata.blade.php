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
  <a class="navbar-brand" href="#" ><i class="fas fa-arrow-left" ></i><span style="margin-left: 10px;">Dashboard</span> </a>
  <a class=""  href="#"><i class="fas fa-cog" style="color: white;"></i></a>
</nav>
<br>

<div class="container" >
<div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="far fa-dollar-sign"></i>
        <span class="count-numbers">$0.96</span>
        <span class="count-name">Today</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-dollar-sign"></i>
        <span class="count-numbers">$9.72</span>
        <span class="count-name">Last 7 Days</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="far fa-dollar-sign"></i>
        <span class="count-numbers">$2.01</span>
        <span class="count-name">This Month</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="far fa-dollar-sign"></i>
        <span class="count-numbers">$104.25</span>
        <span class="count-name">Last Month</span>
      </div>
    </div>
  </div>
</div>
</div>
        
 <br>

<!-- Cards data -->

<div class="container"  >
    <div class="row col-md">
      
   


        <div class="card-box col-md ml-3 mb-3" style="max-width: 40rem;height:135px ">
        <div class="card-header " style="height: 35px; background-color:#dc3545!important;">
                <h5 class="float-left" style="color: #fff;">  6,859</h5>
                <i style="color:#EAEAEA "class="fal fa-hand-pointer fa-1x float-right"></i>
            </div>
            <div class="card-header " style="background-color: #dc3545!important;">
                <h5 class="card-title" style="color: #fff;">TOTAL CLICKS</h5>
            </div>
            <div class="card-header bg-danger  " style="height: 35px;">
            <!-- <h6 class="float-left" style="color: white;"> %</h6>
                <i style="color: white;" class="far fa-chart-bar fa-1x float-right"></i> -->
            </div>
        </div>

        <div class="card-box col-md  ml-3 mb-3" style="max-width: 40rem;height:135px ">
            <div class="card-header " style="height: 35px;background-color:#26c6da!important;">
                <h5 class="float-left" style="color:  #fff;">  585,918</h5 >
                <i style="color:#EAEAEA "class="fal fa-print fa-1x float-right"></i>
            </div>
            
            <div class="card-header " style="background-color:#26c6da!important;">
                <h5 class="card-title" style="color: #fff;">TOTAL IMPRESSIONS</h5>
            </div>
            <div class="card-footer "style="height: 35px ;background-color: #26c6da !important;" >
                <!-- <h6 class="float-left" style="color: white;"> %</h6>
                <i style="color: white;" class="far fa-chart-bar fa-1x float-right"></i> -->
            </div>
        </div>   

        <div class="card-box col-md ml-3 mb-3 " style="max-width: 40rem;height:135px">
            <div class="card-header "style="height: 35px;background-color:#28a745!important;">
                <h5 class="float-left" style="color: white ;"> 0</h5>
                <i style="color:#EAEAEA " class="far fa-dollar-sign fa-1x float-right"></i>
            </div>
            <div class="card-header " style="background-color: #28a745!important;">
                <h5 class="card-title" style="color: #fff;">PAYMENTS</h5>
            </div>
            <div class="card-header bg-success" style="height: 35px;">
            <!-- <h6 class="float-left" style="color: white;"> %</h6>
                <i style="color: white;" class="far fa-chart-bar fa-1x float-right"></i> -->
            </div>
        
        </div>   
    </div>   

<div class="row col-md">
 
        <div class="card-box col-md ml-3 mb-3 " style="max-width: 40rem; height:135px">
            <div class="card-header "style="height: 35px;background-color: #007bff!important;">
                <h5 class="float-left" style="color: white;"> 106.26 </h5>
                <i style="color:#EAEAEA "class="far fa-dollar-sign fa-1x float-right"></i>
            </div>
            <div class="card-header " style="background-color: #007bff!important;">
                <h5 class="card-title"  style="color: white;">TOTAL EARNING</h5>
            </div>
            <div class="card-footer bg-primary"style="height: 35px;" >
            <!-- <h6 class="float-left" style="color: white;"> %</h6>
                <i style="color: white;" class="far fa-chart-bar fa-1x float-right"></i> -->
            </div>
        </div>

        
        <div class="card-box col-md mb-3 ml-3" style="max-width: 40rem;height:135px">
            <div class="card-header "style="height: 35px;background-color: #66bb6a !important;"> 
                <h5 class="float-left" style="color: white;">  0.21</h5>
                <i style="color:#EAEAEA " class="far fa-bolt fa-1x float-right"></i>
            </div>
            <div class="card-header " style="background-color: #66bb6a !important;">
                <h5 class="card-title" style="color: #FFF;">AVERAGE ECPM</h5>
            </div>
            <div class="card-footer "style="height: 35px; background-color: #66bb6a !important;" >
            <!-- <h6 class="float-left" style="color: white;"> %</h6>
                <i style="color: white;" class="far fa-chart-bar fa-1x float-right"></i> -->
            </div>
        </div>
        
        <div class="card-box col-md mb-3 ml-3 " style="max-width: 40rem;height:135px">
            <div class="card-header "style="height: 35px;background-color: #ef5350 !important;">
                <h5 class="float-left" style="color: #fff;">  2.29</h5>
                <i style="color:#EAEAEA " class="fas fa-bars fa-1x float-right"></i>
            </div>
            <div class="card-header "style="background-color: #ef5350 !important;">
                <h5 class="card-title" style="color: #FFF;">AVERAGE CTR</h5>
            </div>
            <div class="card-footer  "style="height: 35px;background-color: #ef5350 !important;" >
            <!-- <h6 class="float-left" style="color: white;"> %</h6>
                <i style="color: white;" class="far fa-chart-bar fa-1x float-right"></i> -->
            </div>
        </div>

        
    </div>   
</div><br>
<!-- Table Items -->

<div class="container">
<h1>Filter By Data</h1><br></div>

  <div class="container">
    <label class="">From</label>
    <input class="" type="date">
    <label class="" for="">To</label>
    <input class="" type="date">
    <button type="submit" class="btn btn-primary ">Search</button>  
     </div><br>
    
</div>

<div class=" container">
    <table id="mytable" class="table table-striped table-bordered">

        <thead class=" thead-light ">
          <tr>
            <th scope="col">#</th>
            <th scope="col">DATE</th>
            <th scope="col">IMPRESSIONS</th>
            <th scope="col">CLICKS</th>
            <th scope="col">CTR</th>
            <th scope="col">ECPM</th>
            <th scope="col">EARNINGS($)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>2021-02-02</td>
            <td>3300</td>
            <td>148</td>
            <td>4.48</td>
            <td>0.29</td>
            <td>0.96</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>2021-02-01</td>
            <td>3743</td>
            <td>159</td>
            <td>4.25</td>
            <td>0.28</td>
            <td>1.05</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>2021-02-01</td>
            <td>3743</td>
            <td>159</td>
            <td>4.25</td>
            <td>0.28</td>
            <td>1.05</td>
          </tr>
          
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