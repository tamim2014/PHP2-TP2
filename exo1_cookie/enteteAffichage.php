<?php
   
	$nom = isset($_GET["nom"]) ? $_GET["nom"] : ''; 
	setcookie('nom', $nom, time()+86400*7); 
	
	$prenom = isset($_GET["prenom"]) ? $_GET["prenom"] : '';
	setcookie('prenom', "Emilie", time()+3600*24*7);
	
	$password= isset($_GET["password"]) ? $_GET["password"] : '';
	setcookie('pass', $password, time()+86400*7);
	
	$punition = isset($_GET["punition"]) ? $_GET["punition"] : '';
	setcookie('punition', $punition, time()+86400*1);
	
	$nbFois = isset($_GET["nbFois"]) ? (int) $_GET["nbFois"] : '';
	setcookie('nbFois', $nbFois, time()+86400*7);	

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../menu.css" />
    <link rel="shortcut icon" href="../favicon.ico"  />
    <style>		
		
		/* ne pas factoriser le footer car il y un bleme sur le footer de la page d'accueil */
		
		footer, .footer {
	
			/* 
			 * Fixer le footer au cas le contenu ne remplit pas la hauteur de l'écran
			 * Mais si le contenu est suffisant, i fo virer ces trucs car ils  posent un probleme(voir page d'accueil) */
			*/
			position: absolute ;
			width:100%;
			bottom:0 ;           		
		}
			
    </style>	
</head>
<body>
	<div class="topnav">
	    <a class="active" href="../index.php">TP2</a>
	    <a href="../exo1_cookie/form.php">Exo3: Cookies</a> 
	   	<a href="../exo2_fichier_corpsFic/form.php">Exo4.b: Fichier( lecture ligne par ligne)</a>
	    <a href="../exo2_fichier_corpsFic2/form.php">Exo4.d: Fichier(dernier enregistrement)</a>
	</div>
	<main>
	    <div id="entete"></div>
		
