<?php

/*
Démonstration de l'utilisation des tableaux


*/
// phpinfo();
ini_set("display_errors", 1);       // Aficher les erreurs
error_reporting(E_ALL);             // Toutes les erreurs



echo "<pre>";

$a = "Variable";


// tableau simple (non indexé) ou liste

$tableau = [   1, "Bonjour", [ 3, 5], $a ];

print_r($tableau);

echo $tableau[1];       // afficher "Bonjour", c'est à dire lr'elt 1 du tableau (numéroté à partir de 0)

echo $tableau[2][1];    // Cela récupère le 5

$tableau[3] = 12;       // Remplace l'élément 3 par 12 (il valait "Variable" juste avant)

$tableau[] = "Au revoir";     // Ajoute une élméent (qui va donc être le numéro 4)

// echo $tableau[];  // Cela plante

print_r($tableau);

echo count($tableau);       // count donne le nombre d'élément d'un tableau

// Tableau indexé

$tableau2 = [ "nom" => "Blanchot", "prenom" => "Christophe"];
echo $tabeau2["nom"];


echo "\n";

// Parcourir un tableau (boucle sur un tableau)

// foreach(tableau à parcourir as $index => $valeur) 
foreach ($tableau2 as $nomAttribut => $valeurAttribut) {
    // Bloc de code exécuté pour chaque élé&ment du tableau, 
    // avec dans la variable $nomAttribut la valeur de l'index courant
    // et dans la variable $valeurAtribut la valeur associée à cet index
    echo "$nomAttribut : $valeurAttribut \n";

}

foreach ($tableau2 as $valeur) {

}


unset($tableau2["prenom"]); // Retire un élément d'un tableau

echo "</pre>";