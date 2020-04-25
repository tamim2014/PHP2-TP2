    <?php include 'entete.php';  ?>
	<div class="contenu" style="margin-top:1em; margin-bottom:0; padding:1em 0 0 0 ">	
	 	<hr style="width:80.1%; border-color:#558C89; float:left; margin-left:9.9%; ">
		<div class="entree titreFiche"><h3> Stockage sur fichier( <small style="font:italic 0.8em calibri light;">dernier enregistrement</small> ) </h3></div>
	</div>
	<div id="contenu" style="margin-top:0; padding-top:0.8em;">
        <div class="entree">
            <div style="width:100%; padding:0;">		
				<button onclick="window.location.href='form.php';">Formulaire de saisie</button>
			    <button onclick="window.location.href='cookies.php';">Afficher les cookies</button>   
			    <button onclick="window.location.href='nomInternautes.php';" style="padding:2em 1em;">Dernier internaute saisi</button>
			</div>
			<p></p>
			<form action="corpsFic2.php" method="get">
			   <table>
				 <tr><td>Nom :</td><td><input type="text" name="nom" placeholder="Votre nom"></td></tr>
				 <tr><td>Prénom:</td><td><input type="text" name="prenom" placeholder="Votre prenom"></td></tr>
				 <tr><td>Password:</td><td><input type="password" name="password" placeholder="Votre mot de passe"></td></tr>
				 <tr><td>Punition:</td><td><input type="text" name="punition"></td></tr>
				 <tr><td>nbFois:</td><td><input type="number" name="nbFois" value="10"></td></tr>				 
				 <tr><td colspan="2" ><span class="creuxDuBoutonEnvoyer"><input id="envoyer"  type="submit" name="submit" value="Envoyer"  style="width:100%;"></span></td></tr>
			   </table>
			</form>
		</div><!--div.entree -->
	</div><!-- contenu -->


    <?php include 'piedPage.php';  ?>


