<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php


$books = [
'L\'île aux trésors' => 1883,
'Enlevé' => 1886,
'Jardin de poèmes enfantins' => 1885,
];

asort ($books);

foreach ($books as $title => $date) {
     echo  '> '.$date .' - ' .$title;
     echo '<br>';
}

?>
</body>
</html>