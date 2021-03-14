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
  <a class="navbar-brand" href="#" ><i class="fas fa-arrow-left" ></i><span style="margin-left: 10px;">Dashboard</span> </a>
  <a class=""  href="#"><i class="fas fa-cog" style="color: white;"></i></a>
</nav>
<br>
<div align="center"><h1>Sign up</h1></div><br>
<div class="container">
    <form action="{{route('signup')}}" method="POST">
@csrf
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="">Your full name</label>
        <input type="text" class="form-control" id="" placeholder="Name" name="name" required>
        </div>
        <div class="form-group col-md-6">
        <label for="">E-mail</label>
        <input type="email" class="form-control" id="" placeholder="Email" name="email" required>
        </div>
    </div>
    <div class="form-row">

    <div class="form-group col-md-6">
        <label for="">Phone</label>
        <input type="tel" class="form-control" id="" placeholder="Phone" name="phone" required>
    </div>
    <div class="form-group col-md-6">
        <label for="">Website URL</label>
        <input type="text" class="form-control" id="" placeholder="Website URL" name="website" required>
    </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="">Monthly volume of page views</label>
        <input type="text" class="form-control" id="" placeholder="Monthly volume of page views" name="pages" required>
        </div>
        <div class="form-group col-md-6">
        <label for="">Where did you hear about us</label>
        <input type="text" class="form-control" id="" placeholder="Where did you hear about us" name="about" required>
        </div>
    </div>
    <div class="form-group">
        <label for="">I am intrested in</label>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" name="display_ads">
        <label class="form-check-label" for="gridCheck">           
            Display Ads</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" name="video_ads">
        <label class="form-check-label" for="gridCheck">
        Video Ads        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" name="rewarded_ads">
        <label class="form-check-label" for="gridCheck">
        Rewarded Ads        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" name="interstitial_ads">
        <label class="form-check-label" for="gridCheck">
        Interstitial Ads
        </label>
        </div>
    </div>
    <div class="form-group">
    <label for="">Message(optional)</label>

    <textarea class="form-control col-md-12" id="message" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-dark">Sign Up</button>
    </form>
</div>  <br>
</body>