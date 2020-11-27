<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
  <div class="row">
        
    <?php

    //generation visuel des projets
    for ($i = 1; $i <= $nb_Competences; $i++) {
        $current_Competences = $Competences["Competences$i"];
        echo "
        <div class='col'>
            <div class='list ' style='width: 18rem;'>
                <div class='card-body'>
                    <ul class='list-group'>
                    <li class='list-group-item'>$current_Competences->Competences</li>
                    </ul>
                   
                </div>
            </div>
        </div>
        ";
    }


    ?>
    <form action="" method="post">
     <ul class="formexo" >
    <li>
        <label>Nouvelle compétence:</label>
        <textarea name="Competences" id="champs5" class="champs-long champs-textarea"></textarea>
      </li>
      <li>
        <input  value="Envoyer" type="submit">
      </li>

    </ul>
    </form> 
<?php
	if (!defined('DNS')) define('DNS','mysql:host=localhost;dbname=portfolio_mvc');
	if (!defined('LOGIN')) define('LOGIN','root');
	if (!defined('PASSWORD')) define('PASSWORD','');
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
				  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
				  PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
?>
<?php
      
 try {
        $dbco = new PDO(DNS,LOGIN,PASSWORD,$options);
        $dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        
    
        // On insère les données reçues si les champs sont remplis
        if(!empty($_POST)) {
            $Competences = $_POST["Competences"];
            $sth=$dbco->prepare("INSERT INTO pfc_competences(Competences)
                                 VALUES(:Competences)");
            $sth->bindParam(':Competences',$Competences);
            $sth->execute();
    }
      

        // On recupère les infos de la table
//        $sth = $dbco->prepare("SELECT nom,prenom, email
//                               FROM Pf_Contact");
//        $sth->execute();
//    
//        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
//        $keys = array_keys($resultat);
//        for($i=0;$i<count($resultat);$i++) {
//            $n = $i+1;
//            echo 'Utilisateur N°'.$n.' :<br>';
//            foreach($resultat[$keys[$i]] as $key=> $value) {
//                echo $key." : ".$value.'<br>';
//            }
//            echo '<br>';
//        }
    
    }
    catch(PDOException $e) {
        echo 'Impossible de traiter les données.
        Erreur : '.$e->getMessage();
    }
    ?>




    
</body>
</html>
