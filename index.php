<?php
    $xml = simplexml_load_file('xml/source.xml') or die('Erreur : impossible de créer l\'objet');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $xml -> page[0] -> title ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?id=2.html"><?= $xml -> page[0] -> menu ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?id=2.html"><?= $xml -> page[1] -> menu ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?id=3.html"><?= $xml -> page[2] -> menu ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?id=4.html"><?= $xml -> page[3] -> menu ?></a>
                </li>
            </ul>
        </div>
    </nav>
<?php
    if(!isset($_GET['id'])){
       
?>
<div class="home"><?= $xml -> page[0] -> content ?></div>
<?php   
    }else{
?>
<?php        
    }
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>