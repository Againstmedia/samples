<?php //do not include opening tag

/* Custom Post Type Behandlungen */

add_action( 'init', 'create_custom_post_type' );

function create_custom_post_type() {

   $labels = array(
    'name' => __( 'Behandlungen' ),
    'singular_name' => __( 'Behandlung' ),
    'all_items' => __('Alle Behandlungen'),
    'add_new' => _x('Neue Behandlung hinzufügen', 'Behandlungen'),
    'add_new_item' => __('Neue Behandlung'),
    'edit_item' => __('Behandlung bearbeiten'),
    'new_item' => __('Neue Behandlung'),
    'view_item' => __('Zeige Behandlung'),
    'search_items' => __('Suche in Behandlungen'),
    'not_found' =>  __('Keine Behandlungen gefunden'),
    'not_found_in_trash' => __('Keine Behandlungen im Papierkorb'),
    'parent_item_colon' => ''
    );

    $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-universal-access-alt',
		'show_in_rest' => true,
	'rewrite' => array('slug' => 'behandlung'),
	'supports'  => array( 'title', 'editor', 'thumbnail' , 'custom-fields', 'excerpt', 'genesis-seo', 'genesis-cpt-archives-settings' )
	);

  register_post_type( 'Behandlungen', $args);
}
