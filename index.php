<!doctype html>
<html class="no-js" lang="">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MasterLetter</title>




    <!-- Place favicon.ico in the root directory -->
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <!-- link et script bootstrap, jquery, googleFont -->
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>

<body>

<!-- Container pour le Titre -->
<div class="container">

    <div class="row">

        <div class="col-sm">

            <h1>Des Chiffres et des Lettres</h1>

        </div>

    </div>

</div>

<!-- Container pour Les 3 boutons -->
<div class="container containerBoutons">

    <button type="button" class="btn btn-outline-success boutonlettre" id="consonne">Consonne</button>
    <button type="button" class="btn btn-outline-info" id="reset">Recommencer</button>
    <button type="button" class="btn btn-outline-danger boutonlettre" id="voyelle">Voyelle</button>

</div>

<!-- Un espace entre les boutons et les lettres -->
<div class="container">
    <br>
</div>

<!-- Container pour les Lettres -->
<div class="container containerLettres">

    <div class ="item">
        <button type="button" class="btn btn-light lettre" id="lettre0">&nbsp</button>
    </div>
    <div class ="item">
        <button type="button" class="btn btn-light lettre" id="lettre1">&nbsp</button>
    </div>
    <div class ="item">
        <button type="button" class="btn btn-light lettre" id="lettre2">&nbsp</button>
    </div>
    <div class ="item">
        <button type="button" class="btn btn-light lettre" id="lettre3">&nbsp</button>
    </div>
    <div class ="item">
        <button type="button" class="btn btn-light lettre" id="lettre4">&nbsp</button>
    </div>
    <div class ="item">
        <button type="button" class="btn btn-light lettre" id="lettre5">&nbsp</button>
    </div>
    <div class ="item">
        <button type="button" class="btn btn-light lettre" id="lettre6">&nbsp</button>
    </div>
    <div class ="item">
        <button type="button" class="btn btn-light lettre" id="lettre7">&nbsp</button>
    </div>
    <div class ="item">
        <button type="button" class="btn btn-light lettre" id="lettre8">&nbsp</button>
    </div>

</div>

<!-- Container pour le mot -->
<div class="container">

    <h2 id="mot"></h2>
</div>



<!-- Le script gérant la page -->
<script src="js/randomGenerator.js"></script>

</body>

</html>
