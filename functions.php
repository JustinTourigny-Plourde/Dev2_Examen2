<?php
function enqueue_styles() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_script() {
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0', true);
}

function si_page_existe_pas_redirect_404() {
    global $wp_query;

    if ($wp_query->is_404) {
        include(get_template_directory() . '/404.php');
        exit;
    }
}

add_action('wp_enqueue_scripts', 'enqueue_script');
add_action('template_redirect', 'si_page_existe_pas_redirect_404');
?>
