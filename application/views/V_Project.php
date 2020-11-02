

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
    
?>

<!-- TEST ajout de projet -->
<!-- <form action="<?//= base_url().'index.php/C_Projet/toto' ?>" method="POST" role="form">
    <legend>Form title</legend>

    <div class="form-group">
        <label for="">label</label>
        <input type="text" class="form-control" id="" placeholder="Input field">
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
