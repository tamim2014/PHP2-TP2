<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="shortcut icon" href="favicon.ico"  />
	 <link rel="stylesheet" type="text/css" href="menu.css" />
	 <style>		
		footer {
			position:static;           		
		}

	 </style>
</head>

<body>
	<div class="topnav">
	    <a class="active" href="index.php">TP2</a>
	    <a href="exo1_cookie/form.php">Exo3(Cookies)</a>
	    <a href="exo2_fichier_corpsFic/form.php">Exo4b(Fichier)</a>
	    <a href="exo2_fichier_corpsFic2/form.php">Exo4d(Fichier)</a>
		<a href="exo5/form.php">Exo5(Captcha)</a>    
	    <!-- <a href="sujet/sujet.php"> &Eacutenonc&eacute; </a> -->
	    <div class="dropdown">
		<button class="dropdown-btn" > &Eacutenonc&eacute; </button>
		<div class="dropdown-content">
			<a href="sujet/sujet.php">Sujet</a>
			<a href="exo1_cookie/resume.php">Resume</a>					
		</div>
	</div>
	</div>
	<main>
		<div class="contenu" style="margin-top:1em; margin-bottom:0; padding:1em 0 0 0; ">	
			<hr style="width:80.1%; border-color:#558C89; float:left; margin-left:9.9%; ">
			<div class="entree titreFiche "><h3> Fiche1 </button></div>
		</div>
		<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; padding-top:1em; ">

			<div class="entree" style="padding:1em 5em" >
				<p>
					Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, 
					consectetur, adipisci velit
					Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, 
					adipisci velit
					Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
					adipisci velit
					Neque porro quisquam est qui 
					dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
			   </p>		   
			   <p>
					Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, 
					consectetur, adipisci velit
					Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, 
					adipisci velit
					Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
					adipisci velit
					Neque porro quisquam est qui 
					dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
			   </p>
			   <p >
					Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, 
					consectetur, adipisci velit
					Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, 
					adipisci velit
									
					Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
					adipisci velit
									
					Neque porro quisquam est qui 
					dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
			   </p>      	   
			</div>
			<div class="entree ficheCaptionBas" style="border:none;" > Fiche à retenir &#9888; </div><br><hr class="finExo" ><div class="entree titreExo" ></div>
			
			
		</div><!-- Fiche à retenir -->
		
		<div class="contenu" style="padding:0; margin-top:3em; margin-bottom:.3em; ">	
			<hr style="width:80%; float:left; margin-left:10%; border-color:#558C89;">
			<div class="entree titreFiche"><h3> 1) Différence entre session et cookie ?</h3></div>
		</div>
		
		<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; ">
			<div class="entree" style="padding:1em;" >		   
					<ul type="square" >
					  <li>
						<b>Les variables sessions</b> sont dans un fichier <u>sur le serveur</u>
						<ul type="disc">
						   <li>Stocker des infos pendant toute la durée d’une connexion, </li>
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
			</div>
			<br><hr class="finExo" ><div class="entree titreExo" ></div>
		</div>
		
		<div class="contenu" style="padding:0; margin-top:3em; margin-bottom:.3em; ">	
			<hr style="width:80%; float:left; margin-left:10%; border-color:#558C89; ">
			<div class="entree titreFiche"><h3> 2) Où stocker le cookie ?</h3></div>
		</div>
		
		<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; ">
			<div class="entree" style="padding:1em;">
			   
				<ul type="square">
				  <li>C'est le navigateur du poste client qui gère l'emplacement de stockage </li>	  
				</ul> 
			</div>
			<br><hr class="finExo" ><div class="entree titreExo" ></div>
		</div>
		
		
		<div class="contenu" style="padding:0; margin-top:3em; margin-bottom:.3em; ">	
			<hr style="width:80%; float:left; margin-left:10%; border-color:#558C89; ">
			<div class="entree titreFiche"><h3> 3) Paramètres d'un cookie ?</h3></div>
		</div>
		
		<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; ">
			<div class="entree" style="padding:1em;">		   			
				<ul type="square" >
				  <li>7 parmètres. 3 sont obligatoires: <b>setcookie(nom,  valeur, date d'expiration) ;</b> </li>	
				  <li>Les autres sont à false ou null,  sauf le dernier ( <b>httpOnly</b> ) </li>
				  <li>Ce dernier, exclu les language de script. Ce qui protège des attaques XSS. </li>	  
				</ul> 			
				<p style="font:italic 1.1em calibri light">
					&#9888; setcookie() défini 1 seul cookie et s'écrit avant tout code HTML !!!<br>
					&#9888; sous chrome on peut voir l'etat des cookie avec la touche <b>Ctrl+Shift+J</b>
				</p>
			</div>
			<br><hr class="finExo" ><div class="entree titreExo" ></div>
		</div>

		
		
		<div class="contenu" style="padding:0; margin-top:3em; margin-bottom:0; ">	
			<hr style="width:80%; float:left; margin-left:10%; border-color:#558C89; ">
			<div class="entree titreFiche"><h3> 4) Conclusion TP2 </h3></div>
		</div>
		
		<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; ">
			<div class="entree" style="padding:1em;">		   
				<ul type="square" >
				  <li></li>	
				  <li></li>
				  <li></li>		  
				</ul>
			</div>
			<br><hr class="finExo" ><div class="entree titreExo" ></div>
		</div>		
	
	
		<footer >
			 <small style="color:#ECECEA;"><span style="color:gray;">2019 &copy; -</span> Master Handi</small>
		</footer>
		
    </main>
</body>
</html>
		





