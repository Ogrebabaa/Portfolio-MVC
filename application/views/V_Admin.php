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

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center>
<div class="floating-box">
<form action="<?= base_url().'C_Admin/run' ?>" method="POST" role="form"> 

<label for="uname">Login</label>
<input type="text" id="login_Admin" name="login_Admin"><br><br>
<label for="pwd">Mot de passe</label>
<input type="password" id="motDePasse" name="motDePasse"><br><br>
<input name="submit" type="submit" id="submit" value="Login"><br>
<p>ADMIN ONLY <a href="C_Accueil"> Menu-principal</a></p>
</center>
</body>
</html>


</form>