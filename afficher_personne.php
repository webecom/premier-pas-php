<?php
// initialiser les données

$personnes = [
	[
	 	"nom" => "Dupond",
		"prenom" => "Paul",
		"absences" => 5,
		"langues" => [ "EN", "FR" ],
		"service" => "technique"
	],
	[
	 	"nom" => "Martin",
		"prenom" => "Kevin",
		"absences" =>0,
		"langues" => [ "EN", "FR", "DE" ],
		"service" => "technique"
	],
	[
	 	"nom" => "Dupont",
		"prenom" => "Evelyne",
		"langues" => [ "FR", "DE" ],
		"absences" => 2,
		"service" => "commercial"
	],
	[
	 	"nom" => "Dupont",
		"prenom" => "Jacques",
		"absences" => 25,
		"service" => "administratif"
	],
	[
	 	"nom" => "Dupond",
		"prenom" => "Vanessa",
		"absences" => 15,
		"langues" => [ "FR", "DE", "IT" ],
		"service" => "technique"
	],
	[
	 	"nom" => "Bonaparte",
		"prenom" => "Napoléon",
		"absences" => 2,
		"langues" => [ "FR" ],
		"service" => "technique"
	],
	[
	 	"nom" => "Marx",
		"prenom" => "KARL",
		"absences" => 80,
		"langues" => [ "EN", "DE" ],
		"service" => "technique"
	]
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Afficher la 4ème persone du tableau

    // récupérer la 4ème personne
    $numero = 4;    // Affecter la valeur 4 à la variable $numero
    $personneAfficher = $personnes[$numero - 1];


    // Afficher <h1>prenom Nom</h1>
    // le prenom est la valeur associée à l'index prenom dans le tableau personneAfficher
    $prenom = $personneAfficher["prenom"];
    // le nom est la valeur associée à l'index nom dans le tableau personneAfficher
    $nom = $personneAfficher["nom"];
    // Affiche le titre
    echo "<h1>$prenom $nom</h1>";

    //Afficher <p><b>Service : </b>le service</p>
    $fonction  = $personneAfficher["service"];
    echo "<p><b>Service : </b>$fonction</p>";

    //<p><b>Absences : </b>12</p>
    $absences = $personneAfficher["absences"];
    echo "<p><b>Absences : </b>$absences</p>";

    // Afficher la première langue
    // Récupérer la première langue : aller chercher la valeur d'index "langues" dans le tableau de la persone ($personeAfficher), puis la première valeur
    $langues = $personneAfficher["langues"];
    $langues1 = $langues[0];


    ?>
</body>
</html>