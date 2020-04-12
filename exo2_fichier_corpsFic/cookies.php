<!DOCTYPE html>

<html>
<body>
   <button onclick="window.location.href='form.php';">Formulaire de saisie</button>
   <button onclick="window.location.href='cookies.php';">Afficher les cookies</button>
   <button onclick="window.location.href='nomInternautes.php';">listes des internautes</button>
	<h3> TP2/Exercice1: Affichage des cookies</h3>	
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
      
 </body>
</html>  
