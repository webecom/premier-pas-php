<?php

// Controleur
// Rôle : calculer la somme de 2 nombres
// Paramètres :
//   POST nombre1 : 1er nombre
//   POST nombre2 : 2nd nombre


// Affichage des messages d'erreur
ini_set("display_errors", 1);       // Aficher les erreurs
error_reporting(E_ALL);             // Toutes les erreurs

// Récupération / Vérification des paramètres (on fait l'impasse sur les vérifications)
$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];


// Calcul de la somme
$somme = $nombre1 + $nombre2;


// Affichage du résultat
echo "La somme de $nombre1 + $nombre2 est $somme";

