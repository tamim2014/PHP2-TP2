    <?php include 'entete.php';  ?>
	<div id="contenu">
		<div class="sortie">
		    <div style="width:100%; padding:0; ">
			     <button onclick="window.location.href='captcha.php';">Formulaire de saisie</button>
			     <button onclick="window.location.href='cookies.php';">Afficher les cookies</button>   
			     <button onclick="window.location.href='nomInternautes.php';">Dernier internaute saisi</button>
			</div>
			<div class="paragraphe" style="width:100%; padding:0;">				
				<?php	
					$fichier = fopen('nomInternautes.txt', 'rb');				
					$captcha=isset($_GET["verif"])?$_GET["verif"]:'';// transmis depuis corpsFic2.php
					
					if($captcha){
						echo "Verifier votre saisie( si t'est pas un robot !)"	;
					}else{
						$ligne = fgets($fichier);	
						echo '<h3>Voici le dernier enregistrement </h3>	'.$ligne.'<br>';		 					
					}							   
				?>
		    </div>
		</div><!-- .sortie -->
    </div><!-- contenu -->
	
    <?php include 'piedPage.php';  ?>
	