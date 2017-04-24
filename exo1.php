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
  cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean -->
<a href="/php-parametres-url1/exo1.php?nom=Nemare&prenom=Jean">Click</a>
<?php
// $adresse ="index.php?nom=Nemare&prenom=Jean";
//  function indicadresse($adresse){
//   return ($adresse);
//  }
//  echo indicadresse($adresse);

echo( isset($_GET['nom']) ? htmlentities($_GET['nom']):"c'est qui ?")."<br>" ;
echo( isset($_GET['prenom']) ? htmlentities($_GET['prenom']):"c'est qui ?") ;
 ?>

</body>
</html>
