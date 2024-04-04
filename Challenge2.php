<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$msg1 = '0@sn9sirppa@#?ia’jgtvryko1';
$msg2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$msg3 = 'aopi?sgnirts@#?sedhtg+p9l!';

$key = strlen($msg1)/2; //longueur caractère message 1
$sschaine1 = substr($msg1, 6, $key); //Récupèration sous-chaîne à partir du 6ème caractère
$sschaine1 = str_replace ('@#?', ' ', $sschaine1); //je remplace les chaînes ‘@#?’ par un espace
$msg1envers = strrev ($sschaine1); // message inversé
echo $msg1envers; // message 1 déchiffré
echo '';


$key = strlen($msg2)/2; //longueur caractère message 2
$sschaine2 = substr ($msg2, 6, $key);//Récupèration sous-chaîne à partir du 6ème caractère
$sschaine2 = str_replace ('@#?', ' ', $sschaine2);//je remplace les chaînes ‘@#?’ par un espace
$msg2envers = strrev ($sschaine2); // message inversé
echo $msg2envers; // message 2 déchiffré
echo '';




$key = strlen($msg3)/2; //longueur caractère message 3
$sschaine3 = substr ($msg3, 6, $key);//Récupèration sous-chaîne à partir du 6ème caractère
$sschaine3 = str_replace ('@#?', ' ', $sschaine3);//je remplace les chaînes ‘@#?’ par un espace
$msg3envers = strrev ($sschaine3); // message inversé
echo $msg3envers; // message 2 dechiffré

?>
</body>
</html>