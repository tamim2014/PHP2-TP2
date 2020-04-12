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
		<button onclick="window.location.href='form.php';">Formulaire de saisie</button>
		<button onclick="window.location.href='corps.php';">Afficher la saise</button>
		<button onclick="window.location.href='cookies.php';">Afficher les cookies</button>

		<h5 >Affichage des saisies et sauvegarde sur cookies</h5>
       			
		<?php  	   
		   if(empty($nom)) echo 'Entrer votre nom<br>';
		   if(empty($prenom)) echo 'Entrer votre prenom<br>';	   
		   if(empty($password)) echo 'Entrer votre password<br>';	 
		   if(empty($punition)) echo 'Saisir la punition<br>';	  			   
		   if(empty($nbFois))  echo 'Préciser le nbFois<br>';

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
	   ?>   
    </div>
	<div class="footer">
         <small style="color:#ECECEA;"><span style="color:gray;">2019 &copy; -</span> Master Handi</small>
    </div>
</body>
</html>  
