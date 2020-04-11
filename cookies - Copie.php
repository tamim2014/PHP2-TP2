<!DOCTYPE html>

<html>
<body>
	<h3> TP2/Exercice1: Affichage des cookies</h3>	
	<?php  
	

	   // AFFICHAGE: $ COOKIE[’nomCookie’] = ’valeur’;
	    if(isset($_COOKIE['nom']) && !empty($_COOKIE['nom'])){
		   echo '
		   <table>
			 <tr><td >COOKIE Nom:</td><td >'.$_COOKIE['nom'].' </td></tr>		 
			 <tr><td >COOKIE Prénom:</td><td >'.$_COOKIE['prenom'].'</td></tr>			 		 
			 <tr><td>COOKIE Mot de passe:</td><td>'.$_COOKIE['pass'].'</td></tr>		 
			 <tr><td>COOKIE Punition:</td>			 
				 <td>';
					$n = 1;
					while ($n <= $_COOKIE['nbFois'])
					{
						if($_COOKIE['nbFois'] <= 100 ){
							 echo $_COOKIE['punition'].'<br/>';
							 
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
    
   <p><button onclick="window.location.href='cookies.php';">Afficher les cookies</button><p>
   <!-- Mais pourquoi mes cookies sont écrasé à chaque fois que je retourne au formulaire de saisie ?????????? -->
   <button onclick="window.location.href='form.php';">Formulaire de saisie</button></p>
   
 </body>
</html>  
