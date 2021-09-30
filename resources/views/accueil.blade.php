<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        TestMyLab
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{url('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>

<nav class="navbar navbar-expand-md fixed-top" style="background-color: #E9E6E6;">


    <img src="/image/logo1.png" width="70" height="50" />

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="bouton1" href="#">Acceuil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="bouton2" target="_blank" href="#">Conseil<span  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="bouton3" target="_blank" href="#">Schéma<span  class="sr-only">(current)</span></a>
            </li>
    </div>
    </li>
    </ul>

    </div>
</nav>

<main role="main">
<style>

    .bouton1{
        margin-left: 50px;
    }
    .bouton2{
        margin-left: 50px;
    }
    .bouton3{
        margin-left: 50px;
    }
    .container{
        text-align: center;
    }
    .display-3{
        color: darkblue;
    }

.containers{
    text-align: center;
    background-color: darkgray;
}
</style>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">

    <div class="container">
        <div class="row">
            <div class="col">
                <div  id="app"></div>

            </div>
        </div>
    </div>
<style>
.id{
   width: 90%;
    border: 0;
    height: 1px;
    background: #000;
    opacity: 0;
}

.texts{
    font-weight: bold;
}
</style>

  <!--
  <script>
    $("#year_subjects").change(function(){
    $.ajax({
        url: "employees",
        type: "post",
        data: { id : $(this).val() },
        success: function(data){
            $("#employees").html(data);
        }
    });
});
  </script>
  -->

<div class="jumbotrons">
  <div class="containers">


  </div>
</div>
<div class="container">

</div> <!-- /container -->
</div>

</main>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>

