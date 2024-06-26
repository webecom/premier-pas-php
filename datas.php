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

$clients = [
	"C12" => [ "nom" => "Victor Hugo", "email" => "victor@hugo.fr" ],
	"C17" => [ "nom" => "Honoré de Balzac" , "email" => "balzac@free.fr" ],
];


$commandes = [
	[ 
		"client" => "C12",		// code du client
	  	"date" => "10/01/2020",		// date de commande
	  	"articles" => ["B2" => 2, "A501" => 2, "A458" => 3 ]		// liste des référence article => qté commandée
	],
	[ 
		"client" => "C17",		
	  	"date" => "12/01/2020",		
	  	"articles" => ["B18" => 1, "A502" => 2 ]		
	],
	[ 
		"client" => "C12",		
	  	"date" => "12/01/2020",		
	  	"articles" => ["A422" => 2, "A413" => 1, "A458" => 1, "B18" => 5 ]	
	],
];

