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
   les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016 -->
  <a href="/php-parametres-url1/exo3.php?dateDebut=2/05/2016&dateFin=27/11/2016">Click</a>
<?php

 echo(isset($_GET['dateDebut']) ? htmlentities($_GET['dateDebut']):"la date n'est pas definie"
);
 ?>
 </br>
<?php
echo(isset( $_GET['dateFin']) ? htmlentities( $_GET['dateFin']):"la date de fin n'est pas definie"
);
?>


</body>
</html>
