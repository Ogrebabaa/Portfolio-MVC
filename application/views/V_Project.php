

<div class="project-container container">
    
    <div class="row">
        

    
    <?php

    for ($i = 1; $i <= $nb_projects; $i++) {
        
        
        
        $current_project = $projects["Project$i"];
        echo "
        <div class='col'>
            <div class='card ' style='width: 18rem;'>
                <img src='https://source.unsplash.com/random/400x200' class='card-img-top' alt='random img'>
                <div class='card-body'>
                    <h5 class='card-title'><?php echo $current_project->nom ?></h5>
                    <p class='card-text'>$current_project->description</p>
                    <a target='blank' href='$current_project->lien' class='btn btn-primary'>Go somewhere</a>
                </div>
            </div>
        </div>
        ";
    }


    ?>
    
   
    
    </div>
    
</div>

<?php
    // $this->C_Projet->add_project("TEST1", "https://apple.com", "Les pommes c'est bon");

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
        'name'          => 'btn',
        'id'            => 'btn',
        'class'         => 'btn btn-primary',
        'value'         => 'Submit btn'
    );

?>


<form action="<?= base_url().'/C_Projet/add_a_project' ?>" method="POST" role="form">
    <legend>Form title</legend>

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
