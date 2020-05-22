<?php

declare(strict_types=1);

require "autoload.php";

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    register_nav_menus([
        'navigation' => __('Navigation', 'wordplate'),
    ]);
});

add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);


/**
 * Mise à jour du placeholder pour le titre d'un CPT
 * @param String $title : Le placeholder par défaut
 * @param WP_Post $post : La publication en cours d'édition
 */
function cpt_title_place_holder($title , $post) {
    switch($post->post_type) {
        case('news'):
            $title = "Titre de l'actualité";
            break;
        default:
            $title = "Titre de la publication";
            break;
    }
    return $title;
}
add_filter('enter_title_here', 'cpt_title_place_holder' , 20 , 2 );