<?php

$age = 5;

if ($age >= 18) {
   $answer = "Tak si dej chlapče.";
} else {
    $answer = "Tak to teda ne. Alkoholické nápoje maldším 18-ti let neprodáváme."; 
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

</body>
</html>