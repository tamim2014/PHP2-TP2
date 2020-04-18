
    <?php include 'entete.php';  ?>
	
	<div id="contenu">
		<div class="entree">
		    <div style="width:100%; padding:0;">
		        <button onclick="window.location.href=/'form.php/';">Formulaire de saisie</button>
		        <button onclick="window.location.href=/'cookies.php/';">Afficher les cookies</button>   
		        <button onclick="window.location.href=/'nomInternautes.php/';">listes des internautes</button>
			</div>
			<p></p>
			<form action="corpsFic.php" method="get">
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
	</div><!-- div#contenu -->
	
     
    <?php include 'piedPage.php';  ?>


