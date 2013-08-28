<?php
/**
 * Taxonomies
 *
 * This file registers any custom taxonomies
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */


/**
 * Create Book Topics Taxonomy
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/** Book Topics Taxonomy */
function wjc_register_book_topic_taxonomy() {
	$labels = array(
		'name' => 'Book Topics',
		'singular_name' => 'Book Topic',
		'search_items' =>  'Search Book Topics',
		'all_items' => 'All Book Topics',
		'parent_item' => 'Parent Book Topic',
		'parent_item_colon' => 'Parent Book Topic:',
		'edit_item' => 'Edit Book Topic',
		'update_item' => 'Update Book Topic',
		'add_new_item' => 'Add New Book Topic',
		'new_item_name' => 'New Book Topic Name',
		'menu_name' => 'Book Topic'
	); 	

	register_taxonomy( 'book-topic', array('book-review'), 
		array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'book-topics' ),
		)
	);
}
add_action( 'init', 'wjc_register_book_topic_taxonomy' );





/**
 * Create Design Resource Taxonomy
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/** Design Ressources Taxonomy */
function wjc_register_design_resource_taxonomy() {
	$labels = array(
		'name' => 'Design Ressources',
		'singular_name' => 'Design Resource',
		'search_items' =>  'Search Design Resources',
		'all_items' => 'All Design Resources',
		'parent_item' => 'Parent Design Resource',
		'parent_item_colon' => 'Parent Design Resource:',
		'edit_item' => 'Edit Design Resource',
		'update_item' => 'Update Design Resource',
		'add_new_item' => 'Add New Design Resource',
		'new_item_name' => 'New Design Resource Name',
		'menu_name' => 'Design Resource'
	); 	

	register_taxonomy( 'design-resource', array('design-resource'), 
		array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'design-resources' ),
		)
	);
}
add_action( 'init', 'wjc_register_design_resource_taxonomy' );


