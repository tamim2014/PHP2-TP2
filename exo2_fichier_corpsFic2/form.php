<!DOCTYPE html>
<html>
<head>
	<title>TP2: Exercice1</title>
	<link rel="stylesheet" type="text/css" href="../menu.css" />
	
</head>
<body>

	<div class="topnav">
	  <a class="active" href="../index.php">TP2</a>
	  <!-- <a href="exo1_cookie/form.php">Exo3: Manipulation des cookies</a> -->
	  <a href="#">Exo3: Manipulation des cookies</a> 
	  <a href="../exo2_fichier_corpsFic/form.php">Exo4.b: Lecture de fichier(ligne par ligne)</a>
	  <a href="../exo2_fichier_corpsFic2/form.php">Exo4.d: Lecture de fichier(dernier enregistrement)</a>
	</div>
	
	<div id="contenu" class="onglet1-sujet ">	
		<button onclick="window.location.href='form.php';">Formulaire de saisie</button>
		<button onclick="window.location.href='cookies.php';">Afficher les cookies</button>   
		<button onclick="window.location.href='nomInternautes.php';">Dernier internaute saisi</button>
		<p></p>
		<form action="corpsFic2.php" method="get">
		   <table>
			 <tr><td>Nom :</td><td><input type="text" name="nom" placeholder="Votre nom"></td></tr>
			 <tr><td>Prénom:</td><td><input type="text" name="prenom" placeholder="Votre prenom"></td></tr>
			 <tr><td>Password:</td><td><input type="password" name="password" placeholder="Votre mot de passe"></td></tr>
			 <tr><td>Punition:</td><td><input type="text" name="punition"></td></tr>
			 <tr><td>nbFois:</td><td><input type="number" name="nbFois" value="10"></td></tr>
			 
			 <tr ><td colspan="2" ><input type="submit" name="submit" value="Envoyer"  style="width:100%;"></td></tr>
		   </table>
		</form>
	</div>
</body>
</html>



