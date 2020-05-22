<?php

add_action('init', function() {

    $words = [
        'name' => 'actualité',
        'plural' => 'actualités',
        'single_a' => 'une',
        'single_b' => 'l\'',
        'several_a' => 'les',
        'several_b' => 'des',
        'new' => 'nouvelle',
        'all' => 'toutes',
        'no' => 'aucune'
    ];

    register_extended_post_type('news', [
			'slug' => 'actualites',
            'menu_icon' => 'dashicons-megaphone',
            'supports' => array('title'),
			'labels' => define_labels($words, true),
			'singular' => 'actualite',
			'plural' => 'actualites'
        ]
    );
});
