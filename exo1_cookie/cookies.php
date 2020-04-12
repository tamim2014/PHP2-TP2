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
		<!-- Mais pourquoi mes cookies sont écrasé à chaque fois que je retourne au formulaire de saisie ?????????? -->
		<button onclick="window.location.href='form.php';">Formulaire de saisie</button>
		<button onclick="window.location.href='corps.php';">Afficher la saise</button>
		<button onclick="window.location.href='cookies.php';">Afficher les cookies</button>
		<p></p>	
		<?php
			/**	
			 * Blème de champs formulaire nom rempli
			 * Je sais pas pourquoi le cookie me signale des erreurs. Normalent c'est pas son affaire, mais je sais pas !.
			 * Si j'affiche directement  $_COOKIE['nomDuCookie'] ça m'fait "Notice: Undefined index" en cas de champs nom rempli.
			 * c'pour ça  je fais ces tampons 
			 */
			 $tampon_nom = isset($_COOKIE['nom']) ? $_COOKIE['nom'] : '';
			 $tampon_prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : '';
			 $tampon_pass = isset($_COOKIE['pass']) ? $_COOKIE['pass'] : '';
			 $tampon_nbFois = isset($_COOKIE['nbFois']) ? (int)$_COOKIE['nbFois'] : ''; 
			 $tampon_punition = isset($_COOKIE['punition']) ? $_COOKIE['punition'] : ''; 		 
					 

		   // AFFICHAGE: $ COOKIE[’nomCookie’] = ’valeur’;
			if(isset($_COOKIE['nom']) && !empty($_COOKIE['nom'])){
			   echo '
			   <table>
				 <tr><td >COOKIE Nom:</td><td >'.$tampon_nom.' </td></tr>		 
				 <tr><td >COOKIE Prénom:</td><td >'.$tampon_prenom.'</td></tr>			 		 
				 <tr><td>COOKIE Mot de passe:</td><td>'.$tampon_pass.'</td></tr>		 
				 <tr><td>COOKIE Punition:</td>			 
					 <td>';
						$n = 1;
						while ($n <= $tampon_nbFois)
						{
							if($tampon_nbFois <= 100 ){
								 echo $tampon_punition.'<br/>';
								 
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
			}	   
	   ?>
    </div>
	<div class="footer">
         <small style="color:#ECECEA;"><span style="color:gray;">2019 &copy; -</span> Master Handi</small>
    </div>	
 </body>
</html>  
