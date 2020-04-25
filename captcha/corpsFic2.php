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

   $captcha = isset($_GET["captcha"]) ? $_GET["captcha"] : '';	

?>
<html>
<body>
<div id="contenu">
	<h3> Garder seulement le dernier enregistrement</h3>	
	<?php  	   
	   if(empty($nom)) echo 'Entrer votre nom<br>';
	   if(empty($prenom)) echo 'Entrer votre prenom<br>';	   
	   if(empty($password)) echo 'Entrer votre password<br>';	 
	   if(empty($punition)) echo 'Saisir la punition<br>';	  			   
	   if(empty($nbFois))  echo 'Préciser le nbFois<br>';

      
       if(!$captcha){
		  // Pour avoir seulement le dernier enregistrement: on place le pointeur en début de fichier( remplace a+ par w+) 
		   $SaisieFichier = fopen("nomInternautes.txt","w+");
		   echo fwrite($SaisieFichier,$nom." , ".$prenom."\r\n");
		   fclose($SaisieFichier);	  
		   header('Location: nomInternautes.php'); 
	   }else{
		  header('Location: nomInternautes.php?verif="'.$captcha.'"'); 
	   }
	   
   ?>
</div>   
</body>
</html>  
