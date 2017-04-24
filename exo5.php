<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>php parametre exo1</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et
  les afficher: index.php?semaine=12 -->
  <a href="/php-parametres-url1/exo5.php?semaine=12 ">Click</a>
<?php

 echo(isset($_GET['semaine']) ? htmlentities($_GET['semaine']):"semaine  n'existe pas"
);
 ?>
 </br>



</body>
</html>
