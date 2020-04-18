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
		* {
			box-sizing: border-box;
		}
		body{
			margin:0;
		}
	
	    /**********  ZONING ************************/

		main{
           
		}

		#contenu{
			width: 70%;  
			float: none;
			padding: 25px 20px;
			background: #ECECEA; 
			border:none;
			box-shadow:none;			
			margin:auto;			
		}
		#contenu:after {
			content: "";
			display: table;
			clear: both;
		}
		
		/* ne pas factoriser le footer car il y un bleme sur le footer de la page d'accueil */
		
		footer, .footer {
			background-color: #74AFAD;
			padding:1%;
			text-align: left;		
			/* 
			 * Fixer le footer au cas le contenu ne remplit pas la hauteur de l'écran
			 * Mais si le contenu est suffisant, i fo virer ces trucs car ils  posent un probleme(voir page d'accueil) */
			*/
			position: absolute ;
			width:100%;
			bottom:0 ;           		
		}
		
		/************* Mise en page contenu *****************/
		
		.sortie{
			  margin: 0 auto;
			  width:84%; 			 			 		 
		}
		
		button{
			width:32.8%;		    
			padding:2em 1em;
		  
			border:none;
		}

		.paragraphe{
			margin: 1em auto;
			width:84%;
            float:left;			
			border:1px solid #8c8b8b; 
			padding:2% 5%  !important;

			background: #f7f7f9;
		}
		.warning{
			color:gray;
			font:italic 1em calibri light;
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
		
