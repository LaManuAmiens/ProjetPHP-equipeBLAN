<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Accueil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?id=2.html">Qui sommes-nous ?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?id=3.html">Commentaires client</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?id=4.html">Contacts</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <?php
    if(!isset($_GET['id'])){
        $xml = simplexml_load_file('xml/source.xml') or die('Erreur : impossible de créer l\'objet');
    }
    if($_GET['id'] == '2.html'){
        // simplexml_load_string($ ) est une fonction qui sert à lire les XML data d'un dossier
        $xml = simplexml_load_file("xml/source.xml") or die("Error: Cannot create object");
    ?>
        <p><?= $xml -> page[1] -> title;?></p>
        <div><?= $xml -> page[1] -> content;?></div>
    <?php
    }else if($_GET['id'] == '3.html'){
        $xml = simplexml_load_file('xml/source.xml') or die('Erreur : impossible de créer l\'objet');
        echo $xml->page[2]->menu;
        echo $xml->page[2]->title;
        echo $xml->page[2]->content;
    }else if($_GET['id'] == '4.html'){
        $xml = simplexml_load_file('xml/source.xml') or die('Erreur : impossible de créer l\'objet');

    }else{
        $xml = simplexml_load_file('xml/source.xml') or die('Erreur : impossible de créer l\'objet');
    }
    ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>