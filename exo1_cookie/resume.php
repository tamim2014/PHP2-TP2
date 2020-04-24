
	<?php include 'entete.php';  ?>
    <div class="contenu" style="margin-top:1em; margin-bottom:0; padding:1em 0 0 0; ">	
	 	<hr style="width:80.1%; border-color:#558C89; float:left; margin-left:9.9%; ">
		<div class="entree titreFiche "><h3> Fiche2 </button></div>
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
	 	<hr style="width:80%; float:left; margin-left:10%; border-color:#558C89; ">
		<div class="entree titreFiche"><h3> Exercice1( formalisme littéral )</h3></div>
	</div>
	
	<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; ">
		<div class="entree" style="padding:1em;">		   
            <ul type="square">
			     <li>
				    <h3>Table &dollar;_GET: Recupération des valeurs</h3>
					<span class="retenir" style="font-size:0.7em;" >
					    <b class="maron">&dollar;variable</b> <b class="retenir black">=</b> isset( &dollar;_GET["valeur"] ) <b class="retenir black">?</b> &dollar;_GET["valeur"] <b class="retenir black">:</b> ' ' ;
					</span>
				  </li>
				 <li>
				    <h3>Stockage des valeurs sur cookies</h3>
					<span class="retenir" style="width:auto;">
					     setcookie( <b class="bleu">"clé"</b> , <b class="maron">&dollar;variable</b> , <b class="black">dateExpiration</b> ) ;
					</span><br>
					dateExpiration = time() + durée du cookie en seconde
				 </li>
				 <li>
				    <h3>Affichage des cookies</h3>
					<span class="retenir" style="font-size:0.7em;" >
					    <b class="maron">&dollar;variable</b><b class="retenir black">=</b> isset( &dollar;_COOKIE["clé"] )<b class="retenir black">?</b>&dollar;_COOKIE["clé"] <b class="retenir black">:</b> ' ' ;
					</span>
                    <p class="retenir" style="color:black;  width:31%;">					
						 <br>if( <b class="maron">&dollar;variable</b> != '') {
							<br> &emsp;echo <b class="maron">&dollar;variable</b>;
						 <br>} 
					
					</p>
				 </li>
			</ul>
		</div>
		<br><hr class="finExo" ><div class="entree titreExo" ></div>
    </div>
	
	<div class="contenu" style="padding:0; margin-top:3em; margin-bottom:.3em; ">	
	 	<hr style="width:80%; float:left; margin-left:10%; border-color:#558C89; ">
		<div class="entree titreFiche"><h3> Exercice2</h3></div>
	</div>
	
	<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; ">
		<div class="entree" style="padding:1em;">
		        <h3>Stockage ligne par ligne</h3>
				<span class="retenir"><b class="maron">&dollar;nom </b><b class="retenir black">=</b> isset( &dollar;_GET["nom"] )<b class="retenir black">?</b>&dollar;_GET["nom"] <b class="retenir black">:</b> ' ' ; </span><br><br>				
				<span class="retenir"><b class="maron">&dollar;prenom </b><b class="retenir black">=</b> isset( &dollar;_GET["prenom"] )<b class="retenir black">?</b>&dollar;_GET["prenom"] <b class="retenir black">:</b> ' ' ; </span>				
                <p class="retenir" style="color:black;  width:60%;">					
					<br>&dollar;fichier=fopen("nomInternautes.txt",<b style="color:red">"a+"</b>);
				    <br>&dollar;ligne = <b class="maron">&dollar;nom </b>.", ".<b class="maron">&dollar;prenom </b>."\r\n";
					<br>fclose(&dollar;fichier); 					
				</p>

		</div>
		<br><hr class="finExo" ><div class="entree titreExo" ></div>
    </div>
	
	
	<div class="contenu" style="padding:0; margin-top:3em; margin-bottom:.3em; ">	
	 	<hr style="width:80%; float:left; margin-left:10%; border-color:#558C89; ">
		<div class="entree titreFiche"><h3> Exercice3</h3></div>
	</div>
	
	<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; ">
		<div class="entree" style="padding:1em;">
			<h3>Stockage dernier enregistrement</h3>		
			On duplique l'exercice2. Mais on place le pointeur en début du fichier
			<p class="retenir" style="color:black;  width:60%;">					
				<br>&dollar;fichier=fopen("nomInternautes.txt",<b style="color:red">"w+"</b>);				
			</p>
		</div>
		<br><hr class="finExo" ><div class="entree titreExo" ></div>      
    </div>
	

	<div class="contenu" style="padding:0; margin-top:3em; margin-bottom:0; ">	
	 	<hr style="width:80%; float:left; margin-left:10%; border-color:#558C89; ">
		<div class="entree titreFiche"><h3> &Agrave; retenir </h3></div>
	</div>
	
	<div class="contenu" style=" padding-bottom:3em; margin-bottom:1em; margin-top:0; ">
		<div class="entree" style="padding:1em;">
		   
                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, 
				consectetur, adipisci velit
				Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, 
				adipisci velit
				Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
				adipisci velit
				Neque porro quisquam est qui 
				dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
		<br><hr class="finExo" ><div class="entree titreExo" ></div>
    </div>		
	
	
	<?php include 'piedPage.php';  ?>
		





