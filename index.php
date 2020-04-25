<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="shortcut icon" href="favicon.ico"  />
	 <link rel="stylesheet" type="text/css" href="menu.css" />
	 <style>

		ul{ margin-top:0 !important;
	 
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
		<a href="exo2_fichier_corpsFic2/captcha.php">Exo5(Captcha)</a>    
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
			<div class="entree titreFiche "><h3> Stockage sur fichier </button></div>
		</div>
		<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; padding-top:1em; ">

			<div class="entree" style="padding:1em 5em" >
				<p>
				    <b>Problème:</b> Les variables sont éphémères. Les cookies n'ont qu'une seule valeur.<br>
					<b>Solution:</b> Si on veut sauvegarder des données de taille moyenne et pour longtemps , i fo  utiliser des fichiers.
				</p>
				<p>
					En principe, on range les fichiers dans un répertoire <i>ad hoc</i> qui doit être en mode <b>execute</b> pour les others.
					Son contenu(*.txt) doit être en mode <b>RW</b> pour others.
					<img src="exo2_fichier_corpsFic/chmod.png" height="100px" class="retenir" style="margin-bottom:0;" >
					<ul type="square" style="color:green; margin-top:-1em !important;">
					    <li>
							Le répertoire en mode X( pour others ):<br> 								
							<span style="color:gray">chmod 77<b style="color:#115">1</b> nomInternautes</span>	
						</li>
						<li>
							Les fichiers en mode RW(pour others):<br>
							<span style="color:gray">chmod 77<b style="color:#115">6</b> nomInternautes/*.txt</span>	
						</li>											
					</ul>
 
			   </p>		   
			   <p>
				 Avant toute chose, il faut ouvrir le fichier:<br> <b class="retenir" style="padding-right:.7em;">fopen( "nomFichier", mode<small style="color:gray">[b]</small> ) <small style="italic 0.5em calibri light; color:gray;">//renvoie 1 <b>flux</b>.<br></small></b><br> 
				 
				 Mode peut être égal à :
				 
				 <ul type="square" style="margin-top:-1em !important; margin-bottom:-1em !important;">
					<li><b>r</b> :   fichier en lecture</li>
                    <li><b>r+</b> : fichier en lecture-écriture<br></li>
                    <li><b style="color:#990099">w</b> :   fichier en ecriture (pointeur au <b style="color:#990099">début</b>)</li>	
                    <li><b style="color:#990099">w+</b> : fichier en lecture-écriture(pointeur au <b style="color:#990099">début</b>)</li>
                    <li><b style="color:#990033">a</b> :   fichier en ecriture (pointeur à la <b style="color:#990033">fin</b>)</li>
                    <li><b style="color:#990033">a+</b> : fichier en lecture-écriture(pointeur à la <b style="color:#990033">fin</b>)</li>					
				</ul>
			   </p>
			   <p >
					Si on place le pointeur en début de fichier(<b style="color:#990099">w+</b>), on écrase l'enregistrement précédent.
					Ce qui permet de sauvegarder uniquement le dernier enregistrement( cf exercice4b ).
					Pour gérer les fichier, d'autres fonctions existent:
					<h3> Contrôle du flux(mode de lecture)</h3>
					<ul type="square" class="retenir" style="margin-top:-1em !important; color:gray;">
						<li><b style="color:#660033">$flux = fopen( 'fic.txt' ,  'r+' )</b> :   nouveau fichier </li>	
						<li><b style="color:#660033">fgets(  $flux )</b> : lecture ligne par ligne</li>
						<li><b style="color:#660033">fgetc()</b> :   lecture caractère par caractère</li>
						<li><b style="color:#660033">fclose( nomFlux )</b> : fermeture  </li>					
					</ul>
					<h3> Contrôle du pointeur <span style="font:italic 0.9em calibri light"> [ <b>fputs</b> est un alias à <b>fwrite</b> ]</span></h3>
					<ul type="square" class="retenir" style="margin-top:-1em !important; color:gray;">
						<li><b style="color:#660033">fputs(  $flux, 'Texte à écrire' )</b> :   le pointeur est placé à la fin du fichier  </li>	
						<li><b style="color:#660033">fseek( $flux , 0 ) </b> : repositionner le pointeur au début du fichier</li>					
					</ul>
			   </p>      	   
			</div>
			<div class="entree ficheCaptionBas" style="border:none;" > N'oublier pas les droits des fichiers &#9888; </div><br><hr class="finExo" ><div class="entree titreExo" ></div>
			
			
		</div><!-- Fiche à retenir -->
		
		<div class="contenu" style="padding:0; margin-top:3em; margin-bottom:.3em; ">	
			<hr style="width:80%; float:left; margin-left:10%; border-color:#558C89;">
			<div class="entree titreFiche"><h3> 1) Différence entre session et cookie ?</h3></div>
		</div>
		
		<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; ">
			<div class="entree" style="padding:1em;" >		   
					<ul type="square" >
					  <li>
						<b>Les variables sessions</b> sont dans un fichier <u><b>sur le serveur</b></u>
						<ul type="disc">
						   <li><b>Durée de stockage:</b> Pendant toute la durée d’une connexion </li>
						   <li><b>Portée:</b> &dollar;_SESSION[ ] est une variable globale    </li>
						   <li><b>Usage:</b> Échanger les informations d’une page à l’autre</li>
						</ul>
					  </li>
					  <li>
						<b>Un cookie</b> est  un  fichier sur le disque dur du <u><b>post client</b></u>
						<ul type="disc">
						   <li><b>Durée:</b> À ma guise(données disponibles même hors connexion)</li>
						   <li><b>Portée:</b> &dollar;_COOKIE[ ] est une variable locale(cf conséquence - TP2/note1.j) </li>
						   <li><b>Usage:</b> Espionner l'internaute(ses habitudes de navigation) </li>
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
				<p style="font:italic 1.1em calibri light; padding-left:5em;">
					&#9888; setcookie() défini 1 seul cookie et s'écrit avant tout code HTML !!!<br>
					&#9888; sous chrome on peut voir l'etat des cookie avec la touche <b>Ctrl+Shift+J</b><br><br>
					&#9888; Une heure = 60s * 60 mn = 3600s<br>
					&#9888; Une journée = 3600s * 24 = 86400s<br>
					&#9888; Une semaine = 86400 * 7<br>
					&#9888; Un  mois = 86400 * 30<br>
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
		





