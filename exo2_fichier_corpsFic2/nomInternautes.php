
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../menu.css" />
    <link rel="shortcut icon" href="../favicon.ico"  />	
</head>
<body>
	<div class="topnav">
	    <a class="active" href="../index.php">TP2</a>
		<a href="../exo1_cookie/form.php">Exo3: Manipulation des cookies</a>
	    <a href="../exo2_fichier_corpsFic/form.php">Exo4.b: Lecture de fichier(ligne par ligne)</a>
	    <a href="../exo2_fichier_corpsFic2/form.php">Exo4.d: Lecture de fichier(dernier enregistrement)</a>
	</div>
	<div id="contenu">
	    <button onclick="window.location.href='form.php';">Formulaire de saisie</button>
	    <button onclick="window.location.href='cookies.php';">Afficher les cookies</button>   
	    <button onclick="window.location.href='nomInternautes.php';">Dernier internaute saisi</button>
	    <h3>Afficher le dernier enregistrement </h3>	

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
    </div>
	<div class="footer">
         <small style="color:#ECECEA;"><span style="color:gray;">2019 &copy; -</span> Master Handi</small>
    </div>
</body>
</html>