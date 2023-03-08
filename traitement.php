<?php

	
	$Nom = htmlspecialchars($_POST["nom"]);
	$Prenom = htmlspecialchars($_POST["premon"]);
	$Email = htmlspecialchars($_POST["email"]);
	$Remarques = htmlspecialchars($_POST["remarques"]);

	echo 'Bonjour ' . $Nom . ' !';

	// 1 : on ouvre le fichier
	$monfichier = fopen('traitement.txt', 'a+');
	fputs($monfichier, "==================================\n"); 
	fputs($monfichier, $Nom."\n"); 
	fputs($monfichier, $Prenom."\n"); 
	fputs($monfichier, $Adresse."\n"); 
	fputs($monfichier, $Remarques."\n"); 

	// 3 : quand on a fini de l'utiliser, on ferme le fichier
	fclose($monfichier);


?>