<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>php parametre exo1</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>
<body>
  <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de
  cette URL existent et les afficher: index.php?batiment=12&salle=101 -->
<a href="/php-parametres-url1/exo6.php?batiment=12&salle=101 ">Click</a>
<?php

 echo(isset($_GET['batiment']) ? htmlentities($_GET['batiment']):"il n'y a pas de batiment 12 ici "
);
 ?>
 </br>
<?php
 echo(isset($_GET['salle']) ? htmlentities($_GET['salle']):"il n'y a pas de salle 101 ici");
 ?>


</body>
</html>
