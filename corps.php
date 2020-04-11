<!DOCTYPE html>

	<?php

		if(isset($_GET["nom"])){
			setcookie('nom', $_GET["nom"], time()+86400*7); 
			setcookie('prenom', "Emilie", time()+3600*24*7);
			setcookie('pass', $_GET["password"], time()+86400*7);
			setcookie('punition', $_GET["punition"], time()+86400*1);
			setcookie('nbFois', (int)$_GET["nbFois"], time()+86400*7);		
		}
	?>
<html>
<body>
	<h3> TP2/Exercice1: Cookies( stockage et affichage)</h3>	
	<?php 
       // VERIF SAISIE
	   
	   if(empty($_GET["nom"])) echo 'Entrer votre nom<br>';
	   if(empty($_GET["prenom"])) echo 'Entrer votre prenom<br>';	   
	   if(empty($_GET["password"])) { $_GET["password"]=''; echo 'Entrer votre password<br>';}	 
	   if(empty($_GET["punition"])) echo 'Saisir la punition<br>';	  			   
	   if(empty($_GET["nbFois"]))  echo 'Préciser le nbFois<br>';

	   // AFFICHAGE
	   echo '
	   <table>
		 <tr><td >Nom:</td><td >'.$_GET["nom"].' </td></tr>		 
		 <tr><td >Prénom:</td><td >'.$_GET["prenom"].'</td></tr>			 		 
		 <tr><td>Mot de passe:</td><td>'.$_GET["password"].'</td></tr>		 
		 <tr><td>Punition:</td>			 
			 <td>';
				$n = 1;
				while ($n <= $_GET["nbFois"])
				{
					if($_GET["nbFois"]<= 100 ){
						 echo $_GET["punition"].'<br/>';
						 
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
   ?>
   <p><button onclick="window.location.href='cookies.php';">Afficher les cookies</button></p>
   <button onclick="window.location.href='form.php';">Formulaire de saisie</button>
   
   
</body>
</html>  
