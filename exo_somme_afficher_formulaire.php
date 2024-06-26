<?php

// Controleur : 
// Rôle : générer une formulaire de saisie des 2 nombres
// Paramètres : néant


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisie des nombres</title>
</head>
<body>
    <h1>Saisie des nombre</h1>
    <form method="POST" action="exo_somme_calculer.php">
        <label>Nombre 1 <input type="number" name="nombre1"><br>
        <label>Nombre 2 <input type="number" name="nombre2"><br>
        <input type="submit" value="Calculer la somme">
    </form>
</body>
</html>