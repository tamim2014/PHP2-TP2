<!DOCTYPE html>
<html>
<head>
	<title>TP2: Manipulation des cookies</title>
	<link rel="stylesheet" type="text/css" href="../menu.css" />
	<link rel="shortcut icon" href="../favicon.ico"  />
	<style>
		* {
			box-sizing: border-box;
		}
	
	/**********  ZONING ************************/

		main{
           
		}

		#contenu{
			width: 70%;  
			float: none;
			padding: 25px 20px;
			background: #ECECEA; 
			border:none;
			box-shadow:none;			
			margin:auto;			
		}
		#contenu:after {
			content: "";
			display: table;
			clear: both;
		}
		
		footer, .footer {
			background-color: #74AFAD;
			padding:2% 1%;
			text-align: left;
			
			/* Fixer le footer au cas le contenu ne remplit pas la hauteur de l'écran */
			position: absolute;
			width:100%;
			bottom:0;
            		
		}
		
	/************* Mise en page contenu *****************/
		
		.entree{
			  margin: 0 auto;
			  width:84%; 
			  padding:0;
			  background-color:white;   
			  box-shadow:
				0px 2px 2px 0px rgba(0, 0, 0, 0.5) inset,
				0px 2px 2px 0px rgba(255, 255, 255, 0.5);
			  border:1px solid #8c8b8b;
		}
		
		button, .creuxDuBoutonEnvoyer, #envoyer {
			width:33.33%;
			float:right;
			padding:2em;
			border:none;
			  box-shadow:
			0px 2px 2px 0px rgba(0, 0, 0, 0.5) inset,
			0px 2px 2px 0px rgba(255, 255, 255, 0.5);
		}
        .creuxDuBoutonEnvoyer{
			width:100%;
			padding:0.7em;
			margin-bottom:1em;
		}


		#envoyer{
			width:100%;		
			padding:3% 1%;		
		    background:#ececea; /* #74AFAD; */
        	color:#115;
			font-size:1.2em;
            /* Bouton envoyer */
            padding-bottom:1.5em; 
			box-shadow:
			  0 15px 15px 0 #555 inset,
			  0 -10px 1px 0 #777 inset;
			background-color:#ddd;
			
			border:2px solid #bbb;
			border-top:none ;			
		}

		
		form{
			width:100%;
			padding:4em 0 0 0;
			background:#558c89;/* #74AFAD;*/
            color:#f1f1f1/* #ECECEA; */
		}
	
        table{
			width:100%;
			padding-bottom:0;
		}

		table tr td {
			padding:0 1em;
		}

		/* td conteneur des champs input */
		table tr td ~ td {
			width:80%;           		
		}
		input{
			width:100% ;
			padding:1.2em ;
			margin:0.2em 0;
		}
	</style>	
</head>
<body>
	<div class="topnav">
	    <a class="active" href="../index.php">TP2</a>
	    <!-- <a href="../exo1_cookie/form.php">Exo3: Manipulation des cookies</a> -->
		<a href="#">Exo3: Cookies</a> 
	    <a href="../exo2_fichier_corpsFic/form.php">Exo4.b: Fichier( lecture ligne par ligne)</a>
	    <a href="../exo2_fichier_corpsFic2/form.php">Exo4.d: Fichier(dernier enregistrement)</a>
	</div>
    <main>
		<div id="contenu">
		    <div class="entree">
				<div style="width:100%; padding:0;">
					 <button onclick="window.location.href='form.php';">Formulaire de saisie</button>
					 <button onclick="window.location.href='corps.php';">Afficher la saise</button>
					 <button onclick="window.location.href='cookies.php';">Afficher les cookies</button>   
				</div>
				<p></p>
				<form action="corps.php" method="get"  >
				   <table>
					 <tr><td>Nom :</td><td><input type="text" name="nom" ></td></tr>
					 <tr><td>Prénom:</td><td><input type="text" name="prenom" ></td></tr>
					 <tr><td>Password:</td><td><input type="password" name="password" ></td></tr>
					 <tr><td>Punition:</td><td><input type="text" name="punition"></td></tr>
					 <tr><td>nbFois:</td><td><input type="number" name="nbFois" value="10"></td></tr>
					 
					 <tr ><td colspan="2"  ><span class="creuxDuBoutonEnvoyer"><input id="envoyer"  type="submit" name="submit" value="Envoyer"  ></span></td></tr>
				   </table>
				</form>
			</div><!--div.entree -->
		</div><!-- div#contenu -->
		<footer>
			 <small style="color:#ECECEA;"><span style="color:gray;">2019 &copy; -</span> Master Handi</small>
		</footer>		
    </main>
</body>
</html>



