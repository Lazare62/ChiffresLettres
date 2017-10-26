<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

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

<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1>Des Chiffres et des Lettres</h1>
        </div>
    </div>
</div>

<div class="container">
    <button type="button" class="btn btn-outline-success boutonlettre" id="consonne">Consonne</button>
    <button type="button" class="btn btn-outline-info" id="reset">Recommencer</button>
    <button type="button" class="btn btn-outline-danger boutonlettre" id="voyelle">Voyelle</button>
</div>
<div class="container">
    <br>
</div>
<div class="container">

    <?php
    for ($i = 0; $i < 10; $i++){
        echo '<div class ="item">
                    <button type="button" class="btn btn-light lettre" id="lettre'.$i.'">&nbsp</button>
                    </div>';
    }

    ?>
</div>

<div class="container">

    <h2 id="mot"></h2>
</div>




<script src="js/randomGenerator.js"></script>
</body>
</html>
