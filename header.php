<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apical</title>

    <?php
        wp_head();
    ?>
</head>
<body>
    
</body>
</html>
<header>
        <div class="contenuheader">
            <div class="avant">

            </div>
            
            <div class="centre">
                <img class="logo" src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical, ma plateforme d'apprentissage">
            </div>
            
            <div class="apres">
                <div class="menuicones">
                    <a href="/Apical"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil"></a> 
                    <img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher">
                    <img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title="Authentification">
                </div>
            </div>

            
        </div>

        <div class="container navbar">
                <div class="navbar-container">
                <?php
                    $pages = get_pages(); // Retrieve pages
                    if ($pages) :
                        foreach ($pages as $page) :
                            // Check if the page has "marker" in its title
                            if (strpos($page->post_title, 'marker') === false && strpos($page->post_title, 'Pages') === false) {
                                // Exclude pages with "marker" and "Pages" in their title
                                ?>
                                <li class="page_item"><a href="<?php echo get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
                                <?php
                            }
                        endforeach;
                    endif;
                    ?>

                    

                 </div>
        </div>
    </header>
