<?php
// Controleur (programme) : afficher le détail d'un article
// Paramètres :
//    GET reference : référence de l'article que l'on veut afficher




// Afficher les erreurs pour debugguer
ini_set("display_errors", 1);       // Aficher les erreurs
error_reporting(E_ALL);             // Toutes les erreurs

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


// Analyse et récupération des paramètres
// reference
// debug : print_r($_GET);
$reference = $_GET["reference"];

// récupérer le détail de l'article correspondant à la référence
// On récupère dans le tableau des articles ($articles) la valeur corespondant à l'index "reference" (les références snt en index dans le tableau)
$detailArticle = $articles[$reference];     // $detailArticle est un tableau avec la désignation, le type, etc....

// On extrait les différentes infos dont on a besoin
$designation = $detailArticle["designation"];  // texte
$type = $detailArticle["type"];     // Texte
$prix = $detailArticle["prix"];     // Nombre
$coloris = $detailArticle["coloris"]; // tableau des coloris disponibles
// On a donc besoin du texte des coloris
$coloris = implode( ", ", $coloris);        // texte
// Stock : si le stock est > 0, on veut "en stock", sinon, on veut rupture dde stock
// le stock est > 0, c'est la valeur "stock" dns le tableau $detailArticlequi est > 0
if ($detailArticle["stock"] > 0) {
    $stock = "En stock";
} else {
    $stock = "Rupture de stock";
}

// On a tous les éléments à afficher : $designation, $type, $prix, $coloris, $stock, $reference

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $designation  ?></title>
</head>
<body>
    <h1><?= $designation  ?></h1>
    <p><b>Référence</b>: <?= $reference  ?></p>
    <p><b>Type</b>: <?= $type  ?></p>
    <p><b>Prix de vente</b>: <?= $prix  ?> €</p>
    <p><b>Coloris disponibles</b>: <?= $coloris  ?></p>
    <p><b>Stock</b>: <?= $stock  ?></p> 
    <p><b>Stock (autre méthode)</b>: <?= ($detailArticle["stock"] > 0) ? "En stock" : "Rupture de stock"  ?></p>  
</body>
</html>
