
    <?php include 'entete.php'; ?>
	
	<div id="contenu" >
		<div class="sortie">
			<div style="width:100%; padding:0; ">
				<button onclick="window.location.href='form.php';">Formulaire de saisie</button>
				<button onclick="window.location.href='cookies.php';">Afficher les cookies</button>
				<button onclick="window.location.href='nomInternautes.php';">listes des internautes</button>
			</div>
			<div class="paragraphe" style="width:100%; padding:0;">
			   <h3> TP2/Exercice2: Affichage ligne par ligne</h3>	

				<?php	
					$afficheFichier = fopen('nomInternautes.txt', 'rb');
					// 1.AFFICHAGE EN FLUX CONTINU
							 
					//echo fread($afficheFichier, filesize('nomInternautes.txt'));//fread($file,"taille en octet");
					
					// 2.AFFICHAGE LIGNE PAR LIGNE
					
					while(!feof($afficheFichier)){
						$ligne = fgets($afficheFichier);
						echo $ligne.'<br>';
					}				   
				?>
			</div><!-- .paragraphe -->
		</div><!-- .sortie -->
    </div><!-- #contenu --> 
    <?php include 'piedPage.php'; ?>