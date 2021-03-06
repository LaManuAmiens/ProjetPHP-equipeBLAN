<?php
//On crée une variable $xml qu'on initialise à une fonction simplexml_load_file qui permet convertit le fichier source.xml en objet.
    $xml = simplexml_load_file('xml/source.xml') or die('Erreur : impossible de créer l\'objet');
    // On teste pour savoir si dans le tableau, on a bien un CLÉ ASSOCIATIVE qui s'appelle 'id'
    if(isset($_GET['id'])){
        $index = intval($_GET['id']-1);
    }else{
        $index = 0;
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $xml->page[$index]->title ?></title>
<!--Une fois notre variable initialisé à notre fichier xml convertie, on cherche à afficher les élements de notre précédent fichier par lien de parenté (->)
ici, on affiche à partir du fichier xml, le parent 'page index 0', l'enfant 'title' qui est égale à "Maçonnerie Occordo"-->
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item d-flex">
                    <?php 
                        foreach($xml->page as $value){
                    ?>
                            <a class="nav-link" href="<?= $value->attributes(); ?>.html"><?= $value->menu; ?></a>
                    <?php
                        }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <?= $xml->page[$index]->content ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>