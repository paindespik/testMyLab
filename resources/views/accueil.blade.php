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

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
      <div class="dropdown-menu" aria-labelledby="dropdown01">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
  </ul>

</div>
</nav>
<main role="main">
<style>
.container{
    text-align: center;
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
  
  <hr>
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
    <div class="card">
  <div class="card-header">
    Questionnaire pour infrastructure 
  </div>
  <div class="card-body">
    <p class="card-title texts">Comment est votre adressage IP ?</p>
    <select class="form-control" name="year_subjects" id="year_subjects">
      <option type="checkbox" value="reseau" id="reseau"><nav>Adresse Sectorisé (différent plage d'adresse séparé par des VLAN)</nav></option>
      <option  type="checkbox" value="reseaux" id="reseaux"><nav>adresse commune (même plage d'ip sur le réseau et 1 seule VLAN)</nav></option>
    </select>
    <hr class="id">
    <a href="#" class="btn btn-primary"><input class="btn btn-primary" type="submit" value="Envoyer le premier formulaire"></a>

  </div>
</div>
<hr>
<div class="card">
  <div class="card-header" id="blah" class="hidden">
    Question 2
  </div>
  <div class="card-body">
    <p class="texts">Quel es la marque de votre matériel informatique ?</p>
    <select class="form-control" name="year_subject" id="year_subject">
  <option value="theme1" id="cisco"><nav>Cisco</nav></option>
  <option value="theme2" id="fortinet"><nav>fortinet</nav></option>
  <option value="theme3" id="alcatellucent"><nav>alcatel lucent</nav></option>
  <option value="theme4" id="netgear"><nav>netgear</nav></option>
  <option value="theme5" id="hp"><nav>hp</nav></option>
  <option value="theme6" id="dell"><nav>dell</nav></option>
  <option value="theme7" id="ibm"><nav>ibm</nav></option>
  <option value="theme8" id="autre"><nav>autre</nav></option>


</select>
<hr class="id">
<a href="#" class="btn btn-primary"><input class="btn btn-primary" type="submit" value="Envoyer le premier formulaire"></a>

  </div>
</div>
<div class="jumbotrons">
  <div class="containers">
   

  </div>
</div>
<div class="container">
  
</div> <!-- /container -->

</main>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>

