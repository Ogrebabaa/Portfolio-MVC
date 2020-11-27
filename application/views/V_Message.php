<style>

body{
	   background-image:url(blanc.jpg);
	   background-attachment:fixed;
	   font-size: 25px;  
	   color: black;
	   background: Silver ;
}
form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 800px;
  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  border: 10px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */


  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 5px solid #999;
}

input:focus, textarea:focus {
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}


.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 90px; /* même taille que les étiquettes */
} 
button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: .5em;
}

</style>


<div id="container">
<!--  formulaire de contact  -->
 <form action="<?= base_url().'C_Contact/add_message' ?>" method="POST" role="form">


	<!-- Tableau de 2 colonnes / 7 lignes -->
		<table>
			<!-- 1ère ligne : titre -->
			<p>
			<tr><td align='center 'colspan='2'> Choisir son sujet et envoyez votre message ! </td><td></td></tr>
			</p>
			<!-- lignes 2 à 6 : saisies -->

	
	  		<h2>Contactez-moi</h2>
 			<li>
				<label>Identification : <span class="obligatoire"></span><br></label>
				<input type="text" name="nom_Message" class="endeux" placeholder="Nom"/>
				<input type="text" name="prenom_Message" class="endeux" placeholder="Prénom"/>
			</li> 
			<li>     
			  <label>E-mail <span class="obligatoire"></span></label>
			   <input type="email" name="mail_Message" class="champs-long"/>
			</li> 
			<li>  
			  <label>Sujet</label>
			   <select name="objet_Message" class="champs-select">
			         
					  <option value="Les_cours">TP</option>
                      <option value="Les_devoirs">DM</option>
                      <option value="Projets">PJ</option>
                      <option value="PPE">PPE</option>
                      <option value="Veille_Technologique">Veille-technologique</option>
                      <option value="Veille_Juridique">Veille-juridique</option>
                      <option value="Portfolio">Portfolio</option>
                      <option value="autre">Autre</option>

			    </select>
			</li> 
			<li>  
			   <label>Votre message<span class="obligatoire">*</span></label>
			   <textarea name="contenu_Message" id="champs5" class="champs-long champs-textarea"></textarea>
			  
			</li> 	  
			<p>
			<button>Envoyer votre message</button>
			</p>
			<div>

			</div>
		</table>
        <!-- 6ème ligne bouton de validation -->
	</form>	

</div>


