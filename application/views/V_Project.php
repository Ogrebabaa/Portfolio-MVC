

<div class="project-container container">

    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"><?php echo $title ?></h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
    </div>
    
    <div class="row">
        
    <?php

    //generation visuel des projets
    for ($i = 1; $i <= $nb_projects; $i++) {
        $current_project = $projects["Project$i"];
        echo "
        <div class='col'>
            <div class='card ' style='width: 18rem;'>
                <img src='https://source.unsplash.com/random/400x200' class='card-img-top' alt='random img'>
                <div class='card-body'>
                    <h1 class='card-title'>$current_project->nom </h1>
                    <p class='card-text'>$current_project->description</p>
                    <a target='blank' href='$current_project->lien' class='btn btn-primary'>Go somewhere</a>
                </div>
            </div>
        </div>
        ";
    }


    ?>
    
   
    
    </div>
    


<?php

    /**
     * 
     * FORM 1 parametres
     * ADD PROJET
     */

    $nom = array(
        'name'          => 'nom',
        'id'            => 'nom',
        'placeholder'   => 'Nom du projet',
    );

   

    $description = array(
        'name'          => 'description',
        'id'            => 'description',
        'placeholder'   => 'description du projet'
    );



    $lien = array(
        'name'          => 'lien',
        'id'            => 'lien',
        'placeholder'   => 'lien du projet',
    );

    $btn = array(
        'name'          => 'btn_add',
        'id'            => 'btn_add',
        'class'         => 'btn btn-primary',
        'value'         => 'Ajouter le projet'
    );

    /**
     * 
     * FORM 2 parametres
     * RM PROJET
     */
    $options = array();
    for ($i = 1; $i <= $nb_projects; $i++) {
        $id = $projects["Project$i"]->id;
        $options[$id] = $projects["Project$i"]->nom;
    }

    $btn_rem = array(
        'name'          => 'btn_rem',
        'id'            => 'btn_rem',
        'class'         => 'btn btn-primary',
        'value'         => 'Supprimer le projet'
    );
    /**
     * 
     * FORM 3 parametres
     * SET NOM
     */
    $new_name = array(
        'name'          => 'new_name',
        'id'            => 'new_name',
        'placeholder'   => 'Nouveau nom du projet',
    );

    $btn_ch_name = array(
        'name'          => 'btn_ch_name',
        'id'            => 'btn_ch_name',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );
     /**
     * 
     * FORM 3 parametres
     * SET DESC
     */
    $new_description = array(
        'name'          => 'new_description',
        'id'            => 'new_description',
        'placeholder'   => 'Nouvelle description du projet',
    );

    $btn_ch_description = array(
        'name'          => 'btn_ch_description',
        'id'            => 'btn_ch_description',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );
     /**
     * 
     * FORM 3 parametres
     * SET LIEN
     */
    $new_lien = array(
        'name'          => 'new_lien',
        'id'            => 'new_lien',
        'placeholder'   => 'Nouveau lien du projet',
    );

    $btn_ch_lien = array(
        'name'          => 'btn_ch_lien',
        'id'            => 'btn_ch_lien',
        'class'         => 'btn btn-primary',
        'value'         => 'Changer'
    );


?> 

    <div class="row">
        <div class="col ">
        <!-- Formulaire d'ajout de projet, à etoffer plus tard, la c'etait pour test les fonctions -->
            <form action="<?= base_url().'C_Projet/add_a_project' ?>" method="POST" role="form">
                <legend>Ajout de projet</legend>

                <div class="form-group">
                    <label for="">Nom:</label>
                    <?php  echo form_input($nom); ?>

                </div>

                <div class="form-group">
                    <label for="">Description:</label>
                    <?php  echo form_textarea($description); ?>

                </div>

                <div class="form-group">
                    <label for="">Lien:</label>
                    <?php  echo form_input($lien); ?>

                </div>

                <?php echo form_submit($btn); ?>

            </form>
        </div>
        <div class="col ">
            <!-- Formulaire de suppression de projet, à etoffer plus tard, la c'etait pour test les fonctions -->
            <form action="<?= base_url().'C_Projet/remove_a_project' ?>" method="POST" role="form">
                <legend>Suppression de projet</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un projet:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>



                <?php echo form_submit($btn_rem); ?>

            </form>
            <!-- Formulaire de changement de nom de projet-->
            <form action="<?= base_url().'C_Projet/change_name' ?>" method="POST" role="form">
                <legend>Changement nom de projet</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un projet:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>
                
                <div class="form-group">
                    <label for="">Nouveau nom:</label>
                    <?php  echo form_input($new_name); ?>

                </div>



                <?php echo form_submit($btn_ch_name); ?>

            </form>
            <!-- Formulaire de changement de description de projet-->
            <form action="<?= base_url().'C_Projet/change_description' ?>" method="POST" role="form">
                <legend>Changement description de projet</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un projet:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>

                <div class="form-group">
                    <label for="">Nouvelle description:</label>
                    <?php  echo form_input($new_description); ?>

                </div>



                <?php echo form_submit($btn_ch_description); ?>

            </form>

            <!-- Formulaire de changement de description de projet-->
            <form action="<?= base_url().'C_Projet/change_lien' ?>" method="POST" role="form">
                <legend>Changement lien de projet</legend>

                <div class="form-group">
                    <label for="">Sélectionnez un projet:</label>
                    <?php  echo form_dropdown("id", $options); ?>

                </div>

                <div class="form-group">
                    <label for="">Nouveau lien:</label>
                    <?php  echo form_input($new_lien); ?>

                </div>



                <?php echo form_submit($btn_ch_lien); ?>

            </form>
        </div>
    </div>

</div>