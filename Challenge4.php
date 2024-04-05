<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php


$films = [
    'L\'île au trésor' => 'Bobby Driscoll, Robert Newton, Basil Sydney',
    'Le vagabond des mers' => 'Errol Flynn, Roger Livesey, Basil Sydney',
    'Le récupérateur d e cadavres'=> 'Boris Karloff, Bela Lugosi, Henry Daniell'
];

foreach ($films as $title => $actors) {
    echo  "Dans le film " .$title ." les acteurs principaux sont: " .$actors;
    echo '<br>';
}

?>
</body>
</html>