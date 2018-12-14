<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php 
    // simplexml_load_string($ ) est une fonction qui sert à lire les XML data d'un dossier
    $xml = simplexml_load_file("xml/source.xml") or die("Error: Cannot create object");
    ?>
    <p>
      <?= $xml -> page[1] -> menu; ?>
      <?= $xml -> page[1] -> title;?>
      <?= $xml -> page[1] -> content;?>
    </p>
  </body>
</html>
