<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        $xml=simplexml_load_file("xml/source.xml") or die("Error: Cannot create object");
      ?>
      <p><?= $xml -> page[0] -> menu; ?></p>
      <p><?= $xml -> page[0] -> title; ?></p>
      <div><?= $xml -> page[0] -> content; ?></div>
  </body>
</html>