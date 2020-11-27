

<!-- NAV -->
<ul class="nav md-tabs light-blue lighten-1 mx-0 mb-0 ">
    <?php
    // print_r($nav);

    for ($i = 0; $i < sizeof($nav); $i++) {
        $libelle = $nav[$i]->libelle;
        $lien = $nav[$i]->lien;
        echo "
        <li class='nav-item'>
            <a class='nav-link' href='$lien'>$libelle</a>
        </li>
        ";
    }
    ?>
    
</ul>
<!-- /NAV -->