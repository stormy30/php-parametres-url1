<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>php parametre exo1</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>
<body>
  <!-- Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean -->


  <a href="/php-parametres-url1/exo2.php?nom=Nemare&prenom=Jean">Click</a>
<?php


 echo( isset($_GET['age']) ? htmlentities($_GET['age']):"l'age n'est pas defini") ;
?>
</body>
</html>
