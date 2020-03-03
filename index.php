<?php

$age = 20;

if ($age >= 18) {
   $answer = "Tak si dej chlapče.";
   $img = "grafika/jo.png";
   
} else {
    $answer = "Tak to teda ne. Alkoholické nápoje maldším 18-ti let neprodáváme.";
    $img = "grafika/ne.png";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Věk <?= $age; ?> let </h1>
  <h3> <?= $answer; ?> </h3>
  <img src="<?= $img; ?>" alt="obrázek">
</body>
</html>