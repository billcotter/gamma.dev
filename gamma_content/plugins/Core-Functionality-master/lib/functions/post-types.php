<?php
/**
 * Post Types
 *
 * This file registers any custom post types
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/** Book Review CPT */
add_action('init', 'wjc_register_my_cpt');
function wjc_register_my_cpt() {
register_post_type('book-review',
  array(
    'label' => 'Book Reviews',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'taxonomies' => array('category'),
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'book-review'),
    'query_var' => true,
    'exclude_from_search' => false,
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
      'author',
      'page-attributes',
      'genesis-cpt-archives-settings'
      ),
    'labels' => array (
      'name' => 'Book Reviews',
      'singular_name' => 'Book Review',
      'menu_name' => 'Book Reviews',
      'add_new' => 'Add Book Review',
      'add_new_item' => 'Add New Book Review',
      'edit' => 'Edit',
      'edit_item' => 'Edit Book Review',
      'new_item' => 'New Book Review',
      'view' => 'View Book Review',
      'view_item' => 'View Book Review',
      'search_items' => 'Search Book Reviews',
      'not_found' => 'No Book Reviews Found',
      'not_found_in_trash' => 'No Book Reviews Found in Trash',
      'parent' => 'Parent Book Review',
    ),
  )
);
 
 }	



 /** Design Resources CPT */
add_action('init', 'wjc_register_design_resource');
function wjc_register_design_resource() {
register_post_type('design-resource',
  array(
    'label' => 'Design Resources',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'taxonomies' => array('category'),
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'design-resource'),
    'query_var' => true,
    'exclude_from_search' => false,
    'supports' => array(
      'title',
      //'editor',
      'thumbnail',
      'author',
      'page-attributes',
      //'genesis-cpt-archives-settings'
      ),
    'labels' => array (
      'name' => 'Design Resources',
      'singular_name' => 'Design Resource',
      'menu_name' => 'Design Resources',
      'add_new' => 'Add Design Resource',
      'add_new_item' => 'Add New Design Resource',
      'edit' => 'Edit',
      'edit_item' => 'Edit Design Resource',
      'new_item' => 'New Design Resource',
      'view' => 'View Design Resource',
      'view_item' => 'View Design Resource',
      'search_items' => 'Search Design Resources',
      'not_found' => 'No Design Resources Found',
      'not_found_in_trash' => 'No Design Resources Found in Trash',
      'parent' => 'Parent Design Resource',
    ),
  )
);
 
 }




 // Resources CPT 
add_action('init', 'wjc_register_resource');
function wjc_register_resource() {
register_post_type('resource',
  array(
    'label' => 'Resources',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'taxonomies' => array('category'),
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'resources'),
    'query_var' => true,
    'exclude_from_search' => false,
    'supports' => array(
      'title',
      //'editor',
      'thumbnail',
      'author',
      'page-attributes',
      //'genesis-cpt-archives-settings'
      ),
    'labels' => array (
      'name' => 'Resources',
      'singular_name' => 'Resource',
      'menu_name' => 'Resources',
      'add_new' => 'Add Resource',
      'add_new_item' => 'Add New Resource',
      'edit' => 'Edit',
      'edit_item' => 'Edit Resource',
      'new_item' => 'New Resource',
      'view' => 'View Resource',
      'view_item' => 'View Resource',
      'search_items' => 'Search Resources',
      'not_found' => 'No Resources Found',
      'not_found_in_trash' => 'No Resources Found in Trash',
      'parent' => 'Parent Resource',
    ),
  )
);
 
 }


