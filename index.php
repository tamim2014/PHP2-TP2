<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="menu.css" />

</head>
<body>

<div class="topnav">
  <a class="active" href="index.php">TP2</a>
  <a href="exo1_cookie/form.php">Exo3: Manipulation des cookies</a>
  <a href="exo2_fichier_corpsFic/form.php">Exo4.b: Lecture de fichier(ligne par ligne)</a>
  <a href="exo2_fichier_corpsFic2/form.php">Exo4.d: Lecture de fichier(dernier enregistrement)</a>
</div>

<div style="padding-left:16px">
  <h2>1) Différence entre session et cookie ?</h2>
  <p>
    <ul type="square">
	  <li>
	    <b>Les variables sessions</b> sont dans un fichier <u>sur le serveur</u>
		<ul type="disc">
		   <li>Permettent de stocker des infos pendant toute la durée d’une connexion, </li>
		   <li>et d’échanger ces informations d’une page à l’autre   </li>
		   <li>&dollar;_SESSION[ ] est une variable globale</li>
		</ul>
	  </li>
	  <li>
	    <b>Un cookie</b> est  un  fichier sur le disque dur du <u>post client</u>
		<ul type="disc">
		   <li>Permet de stocker les infos même hors connexion</li>
		   <li>&dollar;_COOKIE[ ] est une variable locale( voir la conséquence sur TP2/ note 1.j  )</li>
		</ul>
	  </li>
	</ul> 
  </p>
</div>

<div style="padding-left:16px">
  <h2>2) Où stocker le cookie ?</h2>
  <p>
    <ul type="square">
	  <li>C'est le navigateur du poste client qui gère l'emplacement de stockage </li>	  
	</ul> 
  </p>
</div>

<div style="padding-left:16px">
  <h2>3) Quels sont les paramètres d'un cookie ?</h2>
  <p>
    <ul type="square">
	  <li>7 parmètres. 3 sont obligatoires: <b>setcookie(nom,  valeur, date d'expiration) ;</b> </li>	
      <li>Les autres sont à false ou null,  sauf le dernier ( <b>httpOnly</b> ) </li>
      <li>Ce dernier exclu les language de script. Ce qui protège des attaques XSS. </li>	  
	</ul> 
  </p>
  <p style="font:italic 1.1em calibri light">
    &#9888; setcookie() défini 1 seul cookie et s'écrit avant tout code HTML !!!<br>
	&#9888; sous chrome on peut voir l'etat des cookie avec la touche <b>Ctrl+Shift+J</b>
  </p>
</div>





</body>
</html>



