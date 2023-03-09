<?php

	
	$Nom = htmlspecialchars($_POST["nom"]);
	$Prenom = htmlspecialchars($_POST["premon"]);
	$Email = htmlspecialchars($_POST["email"]);
	$Remarques = htmlspecialchars($_POST["remarques"]);

	echo $Nom .  ' votre message a était envoie!';

	// 1 : on ouvre le fichier
	$monfichier = fopen('traitement.txt', 'a+');
	fputs($monfichier, "==================================\n"); 
	fputs($monfichier, $Nom."\n"); 
	fputs($monfichier, $Prenom."\n"); 
	fputs($monfichier, $Email."\n"); 
	fputs($monfichier, $Remarques."\n"); 

	// 3 : quand on a fini de l'utiliser, on ferme le fichier
	fclose($monfichier);


?>