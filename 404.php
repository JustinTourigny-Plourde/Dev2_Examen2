<?php get_header(); ?>

<div class="container">
    <h2 class="p404">Page 404</h2><br>
    <h3>Cette page n'est pas disponible</h3><br>

    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
</div>

<?php get_footer(); ?>
