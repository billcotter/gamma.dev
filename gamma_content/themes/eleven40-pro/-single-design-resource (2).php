<?php

/*
 * Template Name Posts: Design Resource
 * This template displays Video Review Details
 */



 /** Meta Entry Footer */
add_action( 'genesis_entry_footer', 'wjc_custom_field_entry_footer' );

/** */
* @author Brad Dalton - WP Sites
* @link http://wp.me/p1lTu0-9WF

function wjc_custom_field_entry_footer() {


echo '<div class="content-box-snow">';


echo '<section>';


echo '<figure>';
echo '<img src="'; ?> 
<?php genesis_custom_field('_cmb_wjc_design_resource_image') ?>
<?php
echo '"/>';
echo '</figure>';




echo '<h2>';
genesis_custom_field('_cmb_wjc_design_resource_type'); 
echo '</h2>';


echo '<p><strong>Final Word: </strong>';
genesis_custom_field('wjc_design_resource_type_description');
echo '</p>';

echo '<hr>';
the_terms( $post->ID, 'design-resource',  '<strong>Design Category:</strong> ', ', ', '' );


echo '</section>';

echo '</div>';



}

genesis();
