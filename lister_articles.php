<?php
// Controleur : prépare et affiche la liste des articles

// Affichage des erreurs
ini_set("display_errors", 1);       // Aficher les erreurs
error_reporting(E_ALL);             // Toutes les erreurs

// Données de bases : tableau des articles
$articles = [
	"A413" => [
		"designation" => "Ecran 22 pouces générique",
		"type" => "ecran",
		"prix" => 140,
		"pa" => 105,
		"coloris" => [ "gris", "noir" ],
		"stock" => 12,
		],
	"A422" => [
		"designation" => "Ecran 22 pouces luxe",
		"type" => "ecran",
		"prix" => 190,
		"pa" => 135,
		"coloris" => [ "gris", "noir", "blanc" ],
		"stock" => -2,
		],
	"A458" => [
		"designation" => "Ecran 26 pouces générique",
		"type" => "ecran",
		"prix" => 260,
		"pa" => 190,
		"coloris" => [ "gris" ],
		"stock" => 0,
		],
	"A501" => [
		"designation" => "PC bureautique sans écran",
		"type" => "UC",
		"prix" => 380,
		"pa" => 280,
		"coloris" => [ "noir", "blanc" ],
		"stock" => 5,
		],
	"A502" => [
		"designation" => "PC puissant sans écran",
		"type" => "UC",
		"prix" => 520,
		"pa" => 390,
		"coloris" => [ "noir", "blanc" ],
		"stock" => 5,
		],
	"B2" => [
		"designation" => "Souris optique confort",
		"type" => "accessoire",
		"prix" => 15,
		"pa" => 6,
		"coloris" => [ "noir", "blanc", "gris" ],
		"stock" => 25,
		],
	"B18" => [
		"designation" => "Clavier",
		"type" => "accessoire",
		"prix" => 15,
		"pa" => 7,
		"coloris" => [ "noir", "gris" ],
		"stock" => 15,
		],	

]; 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Référence</th>
                <th>Désignation</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // On répéte la ligne suivant avec tous les articles 
                // Pour chaque article (du tableau $articles), on génère la ligne TR dans la table HTML
                        /* 
                        <tr>
                            <td>XXXX (réf)</td>
                            <td>XXX (désignation)</td>
                            <td>XX €</td>
                        </tr>
                        */


                foreach($articles as $reference => $tableauDetailArticle) {
                    
                    ?>
                        <tr>
                            <td><a href="afficher_article3.php?reference=<?= $reference ?>"><?= $reference ?></a></td>
                            <td><?= $tableauDetailArticle["designation"] ?></td>
                            <td><?= $tableauDetailArticle["prix"] ?> €</td>
                        </tr>                    
                    <?php
                }
                ?> 

        </tbody>
    </table>
</body>
</html>
