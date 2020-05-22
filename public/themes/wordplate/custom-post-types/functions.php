<?php

/**
 * Définit les labels d'un CPT
 * @param array $words : Les mots de liaisons du CPT
 * @param Boolean $feminine : Si le CPT est un nom féminin
 */
function define_labels($words = [], $feminine = false)  {

    // Exemple 
    // $words = [
    //     'name' => "actu",
    //     'plural' => "actus",
    //     'single_a' => "une",
    //     'single_b' => "l'",
    //     'several_a' => "des",
    //     'several_b' => "les",
    //     'new' => 'nouvelle',
    //     'all' => 'toutes',
    //     'no' => 'aucune'
    // ];
    
    $parent = ($feminine) ? "parente" : "parent";
    return [
        'name' => _x( ucfirst($words['plural']), 'Post Type General Name', 'text_domain' ),
        'singular_name' => _x( ucfirst($words['name']), 'Post Type Singular Name', 'text_domain' ),
        'menu_name' => __(ucfirst($words['plural']), 'text_domain' ),
        'name_admin_bar' => __($words['name'], 'text_domain' ),
        'archives' => __("Archives " .$words['several_a']. " " .$words['plural'] , 'text_domain' ),
        'attributes' => __("Attributs", 'text_domain' ),
        'parent_item_colon' => __($words['name'] . " " .$parent, 'text_domain' ),
        'all_items' => __(ucfirst($words['all']). " " .$words['several_a']. " " .$words['plural'], 'text_domain' ),
        'add_new_item' => __("Ajouter " .$words['single_a']. " " .$words['new']. " " .$words['name'], 'text_domain' ),
        'add_new' => __("Ajouter", 'text_domain' ),
        'new_item' => __(ucfirst($words['new']). " " .$words['name'], 'text_domain' ),
        'edit_item' => __("Editer " . $words['single_b'] . " " . $words['name'], 'text_domain' ),
        'update_item' => __("Mettre à jour " .$words['single_b']. " " .$words['name'], 'text_domain' ),
        'view_item' => __("Voir " .$words['single_b']. " " .$words['name'], 'text_domain' ),
        'view_items' => __("Voir " .$words['several_b']. " " .$words['plural'], 'text_domain' ),
        'search_items' => __("Rechercher", 'text_domain' ),
        'not_found' => __(ucfirst($words['no']). " " .$words['name'], 'text_domain' ),
        'not_found_in_trash' => __(ucfirst($words['no']). " " .$words['name']. " dans la poubelle", 'text_domain' ),
        'filter_items_list' => __("Filtrer la liste des " . $words['plural'], 'text_domain' ),
    ];
}