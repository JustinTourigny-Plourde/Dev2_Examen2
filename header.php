<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apical</title>

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="contenuheader">
            <div class="avant">
                <!-- Content for "avant" -->
            </div>

            <div class="centre">
                <img class="logo" src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical, ma plateforme d'apprentissage">
            </div>

            <div class="apres">
                <div class="menuicones">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil"></a>
                    <a><img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher"></a>
                    <!-- Une petite blague pour toi mon Nico ;) Bonne Correction !!! -->
                    <a href="<?php echo esc_url(home_url('/')); ?>/wp-admin"><img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title="Authentification"></a>
                    <a href="<?php echo wp_logout_url(esc_url(home_url('/')) . '/wp-admin'); ?>"></a>
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
</body>
</html>
