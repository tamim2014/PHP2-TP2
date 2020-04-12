<!DOCTYPE html>

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

?>
<html>
<body>
	<h3> TP2/Exercice1: Traitement du formulair( enregitrement des internautes dans un fichier texte)</h3>	
	<?php  	   
	   if(empty($nom)) echo 'Entrer votre nom<br>';
	   if(empty($prenom)) echo 'Entrer votre prenom<br>';	   
	   if(empty($password)) echo 'Entrer votre password<br>';	 
	   if(empty($punition)) echo 'Saisir la punition<br>';	  			   
	   if(empty($nbFois))  echo 'Préciser le nbFois<br>';

       // SAISIE exo2
	   $SaisieFichier = fopen("nomInternautes.txt","a+");
	   echo fwrite($SaisieFichier,$nom." , ".$prenom."\r\n");
       fclose($SaisieFichier);
	   
	  
	   header('Location: nomInternautes.php'); 
	   
   ?>  
</body>
</html>  
