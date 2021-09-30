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
    <p>Quel es la marque de votre matériel informatique ?</p></h1>
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
  <!-- Example row of columns -->
  <hr>

</div> <!-- /container -->


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

    <div class="modal fade" id="configModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="divQuestion1">
                        <label id="labelQestion1" for="question1"></label>
                        <select class="form-control" id="question1">
                            <option selected disabled>choisissez... </option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </div>

                    <div id="divQuestion2">
                        <label id="labelQestion2" for="question2"></label>
                        <select class="form-control" id="question2">
                            <option selected disabled>choisissez... </option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ajouter</button>
                </div>
            </div>
        </div>
    </div>

</main>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ url('/') }}/assets/js/scriptJS.js"></script>

</html>

