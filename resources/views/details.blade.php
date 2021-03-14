<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Dashboard</title>
    </head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="{{'/admin'}}" ><i class="" ></i><span style="margin-left: 10px;">Dashboard</span> </a>
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
<div align="center"><h1>Sign up</h1></div><br>
<div class="container">
    @foreach ($users as $item)
    <form>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="">Full name</label>
        <input type="text" class="form-control" id="" placeholder="Name" value="{{$item->name}}">
        </div>
        <div class="form-group col-md-6">
        <label for="">E-mail</label>
        <input type="email" class="form-control" id="" placeholder="Email" value="{{$item->email}}">
        </div>
    </div>
    <div class="form-row">

    <div class="form-group col-md-6">
        <label for="">Phone</label>
        <input type="tel" class="form-control" id="" placeholder="Phone"value="{{$item->phone}}">
    </div>
    <div class="form-group col-md-6">
        <label for="">Website URL</label>
        <input type="text" class="form-control" id="" placeholder="Website URL" value="{{$item->website}}">
    </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="">Monthly volume of page views</label>
        <input type="text" class="form-control" id="" placeholder="Monthly volume of page views" value="{{$item->display_ads}}">
        </div>
        <div class="form-group col-md-6">
        <label for="">Where did you hear about us</label>
        <input type="text" class="form-control" id="" placeholder="Where did you hear about us"value="{{$item->about}}">
        </div>
    </div>
    <div class="form-group">
        <label for="">I am intrested in</label>
        <div class="form-check">
            @if ($item->display_ads==0)
            <input class="form-check-input" type="checkbox" id="gridCheck">
            @else
            <input class="form-check-input" type="checkbox" id="gridCheck" checked >
            @endif
        <label class="form-check-label" for="gridCheck">           
            Display Ads</label>
        </div>
        <div class="form-check">
            @if ($item->video_ads==0)
            <input class="form-check-input" type="checkbox" id="gridCheck">
            @else
            <input class="form-check-input" type="checkbox" id="gridCheck" checked >
            @endif
        <label class="form-check-label" for="gridCheck">
        Video Ads        </label>
        </div>
        <div class="form-check">
            @if ($item->rewqarded_ads==0)
            <input class="form-check-input" type="checkbox" id="gridCheck">
            @else
            <input class="form-check-input" type="checkbox" id="gridCheck" checked >
            @endif
        <label class="form-check-label" for="gridCheck">
        Rewarded Ads        </label>
        </div>
        <div class="form-check">
            @if ($item->intertial_ads==0)
            <input class="form-check-input" type="checkbox" id="gridCheck">
            @else
            <input class="form-check-input" type="checkbox" id="gridCheck" checked >
            @endif
        <label class="form-check-label" for="gridCheck">
        Interstitial Ads
        </label>
        </div>
    </div>
    <div class="form-group">
    <label for="">Message(optional)</label>

    <textarea class="form-control col-md-12" id="message" name="message" >{{$item->message}}</textarea>
    </div>
    </form>
    @endforeach
</div>  <br>
</body>
</html>