
<!DOCTYPE html>
<html>
<body>
   <button onclick="window.location.href='form.php';">Formulaire de saisie</button>
   <button onclick="window.location.href='cookies.php';">Afficher les cookies</button>   
   <button onclick="window.location.href='nomInternautes.php';">Dernier internaute saisi</button>
	<h3> TP2/Exercice2: Afficher le dernier enregistrement </h3>	

<?php	
	$afficheFichier = fopen('nomInternautes.txt', 'rb');
	// 1.AFFICHAGE EN FLUX CONTINU
			 
    //echo fread($afficheFichier, filesize('nomInternautes.txt'));//fread($file,"taille en octet");
	
	// 2.AFFICHAGE LIGNE PAR LIGNE: ici corpsFic2.php seulement la dernière ligne( option w+)
	
	while(!feof($afficheFichier)){
		$ligne = fgets($afficheFichier);
		echo $ligne.'<br>';
	}
			   
?>


</body>
</html>