
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');

body {

	   background-image:url(blanc.jpg);
	   background-attachment:fixed;
	   font-size: 19px;  
	   color: black;
	   background: Silver ;

}


#main-container {
  background: #eaedf2;
  width: 1000px;
  height: 600px;
  margin: 50px auto;
  border-radius: 4px 2px 2px 4px;
}

.dark-menu {
  background: #33353c;
  width: 70px;
  height: 100%;
  border-radius: 2px 0 0 2px;
  text-align: center;
  float: left;
}

.dark-menu a {
  color: #76838c;
  display: block;
  padding: 17px;
  text-decoration: none;
}

.dark-menu a:hover {
  color: #fff;
}

.dark-menu a.active {
  color: white;
  border-left: solid #5e9cf7 3px;
}

.light-menu {
  width: 120px;
  height: 100%;
  float: left;
  margin-right: -9px;
}

.light-menu a {
  color: #85899b;
  display: block;
  padding: 10px 10px 10px 22px;
  text-decoration: none;
  font-size: 12px;
  font-weight: 600;
}

.light-menu a:hover {
  color: #333;
}

.light-menu a.active {
  color: #33353c;

}

.active-icon {
  margin-left: -3px;
}

#search-btn {
  background: #5e9cf7;
  color: #fff;
  border-radius: 2px 0 0 0;
}

.top-menu {
  background: #fff;
  width: 819px;
  max-height: 56px;
  float: left;
  margin-left: -1px;
}

#page_title {
  background: #fff;
  padding: 11px 35px 11px 20px;
  float: left;
  font-size: 25px;
  margin: 0px -10px 20px 0;
}

nav {
	position: relative;
	z-index: 1;
	white-space: nowrap;
  float: left;
  position: relative;
  left: 10px;
}

nav a {
	position: relative;
	display: inline-block;
	padding: 1.9em 2em 1.2em 1em;
	color: #757c8f;
	text-decoration: none;
	margin: 0 -3px;
  position: relative;
  top: 4px;
  font-size: 13px;
  font-weight: 600;
} 

nav a:hover::before {
	content: ''; /* To generate the box */
	position: absolute;
	top: 0; right: 0; bottom: .5em; left: 0;
	z-index: -1;
	border-bottom: none;
	border-radius: 5px 2px 0 0;
	background: #eaedf2;
	box-shadow: 0 2px hsla(0,0%,100%,.5) inset;
	transform: perspective(5px) rotateX(2deg);
	transform-origin: bottom left;
}

.active-tab::before {
	content: ''; /* To generate the box */
	position: absolute;
	top: 0; right: 0; bottom: .5em; left: 0;
	z-index: -10;
	border-bottom: none;
	border-radius: 5px 2px 0 0;
	background: #eaedf2;
	box-shadow: 0 2px hsla(0,0%,100%,.5) inset;
	transform: perspective(5px) rotateX(2deg);
	transform-origin: bottom left;
  box-shadow: inset 0px 0px 10px #dadce0;
  height: 80px;
  margin-top: -14px;
}

.active-tab {
  color: #5e9cf7;
  padding: 1.9em 3em 1.2em 1em;
  margin-right: -10px;
  margin-left: 1px
}

#content {
  background: #eaedf2;
  width: 811px;
  height: 544px;
  float: left;
  margin-left: 7px;
  position: relative;
  z-index: 10;
}

#table-content {
  background: #fff;
  width: 97.5%;
  height: 93.1%;
  margin-top: 20px;
  box-shadow: #dcdee3 0px 0px 10px;
  margin-left: 5px;
}

#table-content table {
  width: 100%;
}

#table-content thead {
  background: #f2f3f5;
}

#table-content thead tr td {
  color: #757e92;
  font-size: 10px;
  text-transform: uppercase;
  padding: 14px 10px;
}

#table-content tbody tr td {
  padding: 14px 10px;
  border-bottom: #eaecee solid 1px;
}

#table-content tbody tr:hover {
  background: #fefaf2;
}

.name-td {
  font-size: 13px;
  font-weight: 600;
}

.desc-td {
  font-size: 13px;
  color: #64697a;
}

.date-td {
  text-align: right;
  font-size: 9px;
}

.checked {
  background: #fefaf2;
}

#credit {
  color: #76838c;
  width: 300px;
  margin: 0 auto;
  font-size: 12px;
  text-align: center;
}
</style>


<div id='container">
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>Tableau de bord</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="css/dashboard.css">
  <link rel='stylesheet' link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<div id="main-container">
  <!-- Menu de Gauche -->
  <div class="dark-menu">
    <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
    <a href="#"></span><i class="fa fa-folder-o" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-sliders" aria-hidden="true"></i></a>
  </div>  

  <!-- Fin Menu Gauche -->
  
  <!--  Menu en Haut-->
  <div class="top-menu">
    <nav class="left">
      <a href="C_Accueil/index" class="selected">Accueil</a>
      <a href="C_Projet/index" class="selected">Projet</a>
      <a href="C_Contact/index" class="selected">Contact</a>
      <a href="C_Formation/index" class="selected">Formation</a>
	  <a href="C_Admin/index" class="selected">Admin</a>
	  
	  
	  	  <a href="" class="selected"></a>
	  	  <a href="" class="selected"></a>
	  	  <a href="" class="selected"></a>
		  <a href="" class="selected"></a>
	  	  <a href="" class="selected"></a>
	  	  <a href="" class="selected"></a>
	  <a href="C_Tableau_de_bord/index" class="selected">Tableau_de_bord</a>
    </nav>
  </div>

  <div id="content">
    <div id="table-content">
      <table cellspacing="0" cellpadding="0">

        <tbody>
          <tr>
  
 
<td class="name-td">Béta</td>



    <tbody>
      <tr>


   
    <tbody>

	  <tr>

			
			
			<div id="container">
<!--  formulaire de contact  -->
 <form action="<?= base_url().'C_Tableau_de_bord/add_admin' ?>" method="POST" role="form">


	<!-- Tableau de 2 colonnes / 7 lignes -->
		<table>
			<!-- 1ère ligne : titre -->
			<p>
			<tr><td align='center 'colspan='2'>  </td><td></td></tr>
			</p>
			<!-- lignes 2 à 6 : saisies -->

	
	  		<h2>Add Admin</h2>
 			<li>
				<label>nom et prenom : <span class="obligatoire"></span><br></label>
				<input type="text" name="nom_Admin" class="endeux" placeholder="Nom"/>
				<input type="text" name="prenom_Admin" class="endeux" placeholder="Prénom"/>
			</li> 
			<li>     
			  <label>login <span class="obligatoire"></span></label>
			   <input type="text" name="login_Admin" class="champs-long"/>
			</li> 
			<li>  
		
			  <label>motDePasse <span class="obligatoire"></span></label>
			   <input type="password" name="motDePasse" class="champs-long"/>
			  
			</li> 
			<li>  
			

			  
			</li> 	  
			<p>
			<button>Ajouter un admin</button>
			</p>
			<div>

			</div>
		</table>
        <!-- 6ème ligne bouton de validation -->
	</form>	

</div>

	  </tr>
    </tbody>
</table>
	  </tr>	

</form>  
 
            <td class="date-td"> <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>


        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
	    <!-- Formulaire de changement de nom de projet-->
            <form action="<?= base_url().'C_Tableau_de_bord/change_name' ?>" method="POST" role="form">
                <legend>Changement nom </legend>

                <div class="form-group">
                    <label for="">Sélectionnez un admin:</label>
                    <?php  echo form_dropdown("id_Admin", $id_Admin); ?>

                </div>
                
                <div class="form-group">
                    <label for="">Nouveau nom:</label>
                    <?php  echo form_input($new_nom_Admin); ?>

                </div>



                <?php echo form_submit($btn_ch_nom_Admin); ?>

            </form>
			  <!-- Formulaire de changement de description de projet-->
            <form action="<?= base_url().'C_Tableau_de_bord/change_prenom' ?>" method="POST" role="form">
                <legend>Changement prenom</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un admin:</label>
                    <?php  echo form_dropdown("id_Admin", $id_Admin); ?>

                </div>

                <div class="form-group">
                    <label for="">Nouveau prenom :</label>
                    <?php  echo form_input($new_prenom_Admin); ?>

                </div>



                <?php echo form_submit($btn_ch_prenom_Admin); ?>

            </form>

            <!-- Formulaire de changement de description de projet-->
            <form action="<?= base_url().'C_Tableau_de_bord/change_login' ?>" method="POST" role="form">
                <legend>Changement lien de projet</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un login:</label>
                    <?php  echo form_dropdown("id_Admin", $options); ?>

                </div>

                <div class="form-group">
                    <label for="">Nouveau login:</label>
                    <?php  echo form_input($new_login_Admin); ?>

                </div>



                <?php echo form_submit($btn_ch_login_Admin); ?>

            </form>
			


