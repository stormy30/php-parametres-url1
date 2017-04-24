<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>php parametre exo1</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
  et les afficher: index.php?langage=PHP&serveur=LAMP -->
  <a href="/php-parametres-url1/exo4.php?langage=PHP&serveur=LAMP">Click</a>
<?php

 echo(isset($_GET['langage']) ? htmlentities($_GET['langage']):"langage  n'existe pas"
);
 ?>
 </br>
 <?php
 echo(isset($_GET['serveur']) ? htmlentities($_GET['serveur']):" serveur n'existe pas"
 );
?>


</body>
</html>
