<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title> PHP2: TP1/Exercice1 </title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<header>
		<div id="en-tete"> 
			<?php
			setlocale(LC_TIME, 'fra_fra');			 
			echo strftime('%A %d %B %Y, %Hh:%M')."<br/>"; // samedi 04 avril 2020, 23:43 
			?>
            <h4 >Travaux pratiques en PHP - 2ème semestre </h4>			
		</div>
		<div id="menu"> </div>
	</header>