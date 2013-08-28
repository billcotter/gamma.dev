<?php
/**
 * Metaboxes
 *
 * This file registers any custom metaboxes
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

 
 
  
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function wjc_book_review_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	
	$meta_boxes[] = array(
		'id'         => 'book-review',
		'title'      => 'Book Review Metabox',
		'pages'      => array( 'book-review' ), 
		
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			
			// Title
			array(
				'name' => 'Title:',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_book_title',
				'type' => 'text',
			),
			

			// Author\'s Link (full url)
			array(
				'name' => 'Author\'s Link (full url):',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_book_author_full',
				'type' => 'text',
			),


			// Author\'s Link (pretty url)
			array(
				'name' => 'Author\'s Link (pretty url):',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_book_author_pretty',
				'type' => 'text',
			),


			// Publisher\'s Link (full url)
			array(
				'name' => 'Publisher\'s Link (full url):',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_book_publisher_full',
				'type' => 'text',
			
			),

			// Publisher\'s Link (pretty url)
			array(
				'name' => 'Publisher\'s Link (pretty url):',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_book_publisher_pretty',
				'type' => 'text',
			
			),

			// Release Date Picker
			array(
			'name' => 'Release Date Picker',
			'desc' => 'field description (optional)',
			'id' => $prefix . 'wjc_release_date',
			'type' => 'text_date'

			),

		
			// Book Website (full url)
			array(
				'name' => 'Book Website (full url):',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_book_website_full',
				'type' => 'text',
			),

			// Book Website (pretty url)
			array(
				'name' => 'Book Website (pretty url):',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_book_website_pretty',
				'type' => 'text',
			),


			/* Final Word*/
			array(
			'name' => 'Final Word',
			'desc' => 'Enter text for a quote',
			'std' => 'standard value (optional)',
			'id' => $prefix . 'wjc_book_comment',
			'type' => 'textarea_small'
			),

			
			

			/* Final Word 
			array(
			'name' => 'Final Word',
			'desc' => 'field description (optional)',
			'id' => $prefix . 'wjc_book_comment',
			'type' => 'wysiwyg',
			'options' => array(

			array(
			    'wpautop' => true, // use wpautop?
			    'media_buttons' => true, // show insert/upload button(s)
			    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
			    'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
			    'tabindex' => '',
			    'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
			    'editor_class' => '', // add extra class(es) to the editor textarea
			    'teeny' => false, // output the minimal editor config used in Press This
			    'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
			    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
			    'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()	
			    ),
			),
		),
*/
		
			// IMAGE UPLOAD
            array(
                'name'    => 'Book Image',
                'desc'    => 'Image of Book Jacket.',
                'id'      => $prefix . 'wjc_book_image',
                'type'    => 'file',
                'save_id' => false, // save ID using true
                'allow'   => array('attachment') // limit to just attachments with array( 'attachment' )
            ),

		
		),
	);
	
	
	return $meta_boxes;
}

add_filter( 'cmb_meta_boxes', 'wjc_book_review_metaboxes' );








// Resource Metaboxes

function wjc_resource_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	
	$meta_boxes[] = array(
		'id'         => 'resource',
		'title'      => 'Resource Metabox',
		'pages'      => array( 'resource' ), 
		
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			
			// Resource Name
			array(
				'name' => 'Resource Name:',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_resource_name',
				'type' => 'text',
			),
			
		
			// Resource Link (full url)
			array(
				'name' => 'Resource Link (full url):',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_resource_link__full',
				'type' => 'text',
			),

			// Resource Link (pretty url)
			array(
				'name' => 'Resource Link (pretty url):',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_resource_link_pretty',
				'type' => 'text',
			),


			/* Resource Description */
			array(
			'name' => 'Resource Description',
			'desc' => 'Enter text for a quote',
			'std' => 'standard value (optional)',
			'id' => $prefix . 'wjc_resource_description',
			'type' => 'textarea_small'
			),
		
		),
	);
	
	
	return $meta_boxes;
}

add_filter( 'cmb_meta_boxes', 'wjc_resource_metaboxes' );













// Design Resource Metabox

function wjc_design_resource_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	
	$meta_boxes[] = array(
		'id'         => 'design-resource',
		'title'      => 'Design Resource Metabox',
		'pages'      => array( 'design-resource' ), 
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(


		// Title
			array(
				'name' => 'Resource Type:',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'wjc_design_resource_type',
				'type' => 'text',
			),


			/* Final Word*/
			array(
			'name' => 'Resource Type Description',
			'desc' => 'Enter text for a quote',
			'std' => 'standard value (optional)',
			'id' => $prefix . 'wjc_design_resource_type_description',
			'type' => 'textarea_small'
			),



			/* Resource Type Description 
			array(
			'name' => 'Resource Type Description',
			'desc' => 'field description (optional)',
			'id' => $prefix . 'wjc_design_resource_type_description',
			'type' => 'wysiwyg',
			'options' => array(

			array(
			    'wpautop' => true, // use wpautop?
			    'media_buttons' => true, // show insert/upload button(s)
			    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
			    'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
			    'tabindex' => '',
			    'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
			    'editor_class' => '', // add extra class(es) to the editor textarea
			    'teeny' => false, // output the minimal editor config used in Press This
			    'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
			    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
			    'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()	
			    ),
			),
		),

		*/
			// IMAGE UPLOAD
            array(
                'name'    => 'Design Resource Image',
                'desc'    => 'Image of design Resource.',
                'id'      => $prefix . 'wjc_design_resource_image',
                'type'    => 'file',
                'save_id' => false, // save ID using true
                'allow'   => array('attachment') // limit to just attachments with array( 'attachment' )
            ),

		
		),
	);
	
	
	return $meta_boxes;
}

add_filter( 'cmb_meta_boxes', 'wjc_design_resource_metaboxes' );
















/**
 * Initialize Metabox Class
 * @since 1.0.0
 * see /lib/metabox/example-functions.php for more information
 *
 */
  
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( BE_DIR . '/lib/metabox/init.php' );
	}
}
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );