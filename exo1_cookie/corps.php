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
	
	

    include 'entete.php';	


	echo '
	<div id="contenu">
		
		<div class="sortie">
			<div style="width:100%; padding:0; ">
				 <button onclick="window.location.href=\'form.php\';">Formulaire de saisie</button>
				 <button onclick="window.location.href=\'corps.php\';">Afficher la saise</button>
				 <button onclick="window.location.href=\'cookies.php\';">Afficher les cookies</button>
			</div>
		
			<div class="paragraphe" style="width:100%; padding:0;">
				<h5 >Affichage des saisies et sauvegarde sur cookies<br></h5> ';
													 	   
				   if(empty($nom)) echo '<span class="warning">Entrer votre nom</span><br>';
				   if(empty($prenom)) echo '<span class="warning">Entrer votre prenom</span><br>';	   
				   if(empty($password)) echo '<span class="warning">Entrer votre password</span><br>';	 
				   if(empty($punition)) echo '<span class="warning">Saisir la punition</span><br>';	  			   
				   if(empty($nbFois))  echo '<span class="warning">Préciser le nbFois</span><br>';

				   // AFFICHAGE
				   echo '
				   <table>
					 <tr><td >Nom:</td><td >'.$nom.' </td></tr>		 
					 <tr><td >Prénom:</td><td >'.$prenom.'</td></tr>			 		 
					 <tr><td>Mot de passe:</td><td>'.$password.'</td></tr>		 
					 <tr><td>Punition:</td>			 
						 <td>';
							$n = 1;
							while ($n <= $nbFois)
							{
								if($nbFois <= 100 ){
									 echo $punition.'<br/>';
									 
								}else{
								  echo 'Nombre trop grand <br>';
								  break;
								}
								$n++;					
							}
						echo '</td>
					 </tr>
				   </table>       
				   ';	   
			   echo '
		   </div><!-- .paragraphe -->
		</div><!-- .sortie -->				
	</div><!-- #contenu --> ';
	 
	
	include 'piedPage.php'; 
?>
