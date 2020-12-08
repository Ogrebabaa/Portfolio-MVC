<div class="jumbotron bg-white">
  
  <h1 class="display-4"><?php echo "$hi_msg, $nom" ?></h1>
  <p class="lead"><?php echo $desc ?></p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

<form action="<?echo base_url()."C_Accueil" ?>" method="POST">

    <label for="lang">Selectionné une langue:</label>
    
    <input type="radio" name="lang" id="eng" value="ENG">
    <label for="eng">Anglais:</label>
    
    <input type="radio" name="lang" id="fr" value="FR">
    <label for="fr">Français:</label>
    <input type="submit" value="Changer">
  </form>