    <?php include 'entete.php';  ?>
	<div id="contenu">
		<div class="sortie">
		    <div style="width:100%; padding:0; ">
			     <button onclick="window.location.href='form.php';">Formulaire de saisie</button>
			     <button onclick="window.location.href='cookies.php';">Afficher les cookies</button>   
			     <button onclick="window.location.href='nomInternautes.php';">Dernier internaute saisi</button>
			</div>
			<div class="paragraphe" style="width:100%; padding:0;">
				<h3>Voici le dernier enregistrement </h3>	

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
		    </div><!-- .paragraphe -->
		</div><!-- .sortie -->
    </div><!-- contenu -->
	
    <?php include 'piedPage.php';  ?>
	