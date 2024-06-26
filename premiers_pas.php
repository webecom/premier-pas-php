<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premiers pas PHP</title>
</head>
<body>
    <h1>Premier pas PHP</h1>
<?php 

// Ceci est un programme de démo
/*

Commentaire multiligne

*/
// Variables : le nom commence par $

$prenom = "Christophe";         // Met le texte Christophe dans $prenom


// Envoi dans la page générée d'un texte : instruction echo
echo "<p>Bonjour ";
echo $prenom;
echo "<p>";

echo "<p>Bonjour $prenom</p>";

echo "<p>Bonjour" . " " . $prenom . "</p>";  
        // On concatene les chaines (ont les mets bout à bout) avce le .
        // chaine de caractères = texte

// Varialble avec une valeur numérique
$nombre = 12;
$nombreDecimal = 14.5;
$nombreNegatif = -5;


$nombre_decimal;


$total = $nombre + $nombreDecimal + $nombreNegatif;     // Somme des trois nombres en variable
$total2 = $nombre + $prenom;

echo "Total : $total, Total2 : $total2";

?>  
</body>
</html>



