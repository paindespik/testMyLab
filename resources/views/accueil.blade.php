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
      <a class="bouton2" href="#">Conseil<span target="_blank" class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="bouton3" href="#">Schéma<span target="_blank" class="sr-only">(current)</span></a>
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
  <div class="container">
    <h2 class="display-3">Question 1 : </h1>
    <p>Comment est votre adressage IP  ?

    <p>adresse Sectorisé (différent plage d'adresse séparé par des VLAN)</p>

   </p>
   <p> adresse commune (même plage d'ip sur le réseau et 1 seule VLAN)</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</div>
<div class="jumbotrons">
  <div class="containers">
    <h1 class="display-3">
    <p>Quelle est la marque de votre matériel informatique ?</p></h1>
    <select name="year_subject" id="year_subject">
  <option value="theme1"><nav>Cisco</nav></option>
  <option value="theme2"><nav>fortinet</nav></option>
  <option value="theme3"><nav>alcatel lucent</nav></option>
  <option value="theme4"><nav>netgear</nav></option>
  <option value="theme5"><nav>hp</nav></option>
  <option value="theme6"><nav>dell</nav></option>
  <option value="theme7"><nav>ibm</nav></option>
  <option value="theme8"><nav>autre</nav></option>

  <input class="btn btn-primary btn-lg" type="submit" value="Envoyer le formulaire">


</select>

  </div>
</div>
<div class="container">

  <hr>

</div> 

</main>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>

