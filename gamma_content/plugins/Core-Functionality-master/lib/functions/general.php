<?php
/**
 * General
 *
 * This file contains any general functions
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
 
/**
 * Don't Update Plugin
 * @since 1.0.0
 * 
 * This prevents you being prompted to update if there's a public plugin
 * with the same name.
 *
 * @author Mark Jaquith
 * @link http://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
 *
 * @param array $r, request arguments
 * @param string $url, request url
 * @return array request arguments
 */
function be_core_functionality_hidden( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/plugins/update-check' ) )
		return $r; // Not a plugin update request. Bail immediately.
	$plugins = unserialize( $r['body']['plugins'] );
	unset( $plugins->plugins[ plugin_basename( __FILE__ ) ] );
	unset( $plugins->active[ array_search( plugin_basename( __FILE__ ), $plugins->active ) ] );
	$r['body']['plugins'] = serialize( $plugins );
	return $r;
}
add_filter( 'http_request_args', 'be_core_functionality_hidden', 5, 2 );

// Use shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );


/**
 * Remove Menu Items
 * @since 1.0.0
 *
 * Remove unused menu items by adding them to the array.
 * See the commented list of menu items for reference.
 *
 */
function be_remove_menus () {
	global $menu;
	$restricted = array(__('Links'));
	// Example:
	//$restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Links'), __('Pages'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action( 'admin_menu', 'be_remove_menus' );

/**
 * Customize Admin Bar Items
 * @since 1.0.0
 * @link http://wp-snippets.com/addremove-wp-admin-bar-links/
 */
function be_admin_bar_items() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'new-link', 'new-content' );
}
add_action( 'wp_before_admin_bar_render', 'be_admin_bar_items' );


/**
 * Customize Menu Order
 * @since 1.0.0
 *
 * @param array $menu_ord. Current order.
 * @return array $menu_ord. New order.
 *
 */
function be_custom_menu_order( $menu_ord ) {
	if ( !$menu_ord ) return true;
	return array(
		'index.php', // this represents the dashboard link
		'edit.php?post_type=page', //the page tab
		'edit.php', //the posts tab
		'edit-comments.php', // the comments tab
		'upload.php', // the media manager
    );
}
//add_filter( 'custom_menu_order', 'be_custom_menu_order' );
//add_filter( 'menu_order', 'be_custom_menu_order' );

/**
 * Pretty Printing
 * 
 * @author Chris Bratlien
 *
 * @param mixed
 * @return null
 */
function be_pp( $obj, $label = '' ) {  

	$data = json_encode(print_r($obj,true));
    ?>
    <style type="text/css">
      #bsdLogger {
      position: absolute;
      top: 30px;
      right: 0px;
      border-left: 4px solid #bbb;
      padding: 6px;
      background: white;
      color: #444;
      z-index: 999;
      font-size: 1.25em;
      width: 400px;
      height: 800px;
      overflow: scroll;
      }
    </style>    
    <script type="text/javascript">
      var doStuff = function(){
        var obj = <?php echo $data; ?>;
        var logger = document.getElementById('bsdLogger');
        if (!logger) {
          logger = document.createElement('div');
          logger.id = 'bsdLogger';
          document.body.appendChild(logger);
        }
        ////console.log(obj);
        var pre = document.createElement('pre');
        var h2 = document.createElement('h2');
        pre.innerHTML = obj;
 
        h2.innerHTML = '<?php echo addslashes($label); ?>';
        logger.appendChild(h2);
        logger.appendChild(pre);      
      };
      window.addEventListener ("DOMContentLoaded", doStuff, false);
 
    </script>
    <?php
}

/**
 * Disable WPSEO Nag on Dev Server 
 *
 */
function be_disable_wpseo_nag( $options ) {
	if( strpos( site_url(), 'localhost' ) || strpos( site_url() ,'master-wp' ) )
		$options['ignore_blog_public_warning'] = 'ignore';
	return $options;
}
add_filter( 'option_wpseo', 'be_disable_wpseo_nag' );

// Disable WPSEO columns on edit screen 
add_filter( 'wpseo_use_page_analysis', '__return_false' );





//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

/** Customize Read More Link */
add_filter( 'excerpt_more', 'be_more_link' );
add_filter( 'get_the_content_more_link', 'be_more_link' );
add_filter( 'the_content_more_link', 'be_more_link' );
function be_more_link($more_link) {
    return sprintf('... <p><a href="%s" class="button-blue more-link">%s</a>', get_permalink(), 'Read More');
}




/**
 * Remove Image Alignment from Featured Image
 *
*/
function be_remove_image_alignment( $attributes ) {
  $attributes['class'] = str_replace( 'alignleft', 'alignnone', $attributes['class'] );
  return $attributes;
}
add_filter( 'genesis_attr_entry-image', 'be_remove_image_alignment' );

/* Add Support for Custom background
------------------------------------------------ */
add_theme_support('custom-background');


// Add custom post types to home
function custom_post_archive($query) {
    if ($query->is_main_query() && $query->is_home())
        $query->set( 'post_type', array('design-resource', 'book-review',  'post') );
    remove_action( 'pre_get_posts', 'custom_post_archive' );
}
add_action('pre_get_posts', 'custom_post_archive');



/**
 * Hooks the WP cpt_post_types filter 
 *
 * @param array $post_types An array of post type names that the templates be used by
 * @return array The array of post type names that the templates be used by
 
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'book-review';
    $post_types[] = 'design-resource';
    
    return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );

**/


/** Meta Entry Footer **/
add_action( 'genesis_entry_footer', 'custom_field_entry_content' );

/**
* @author Brad Dalton - WP Sites
* @link http://wp.me/p1lTu0-9WF
**/
function custom_field_entry_content() {
if(is_singular( $post_type = 'book-review')  ) {


echo '<div class="content-box-blue">';


echo '<section>';


echo '<figure>';
echo '<img src="'; ?> 
<?php genesis_custom_field('_cmb_wjc_book_image') ?>
<?php
echo '"/>';
echo '</figure>';




echo '<h2>';
genesis_custom_field('_cmb_wjc_book_title'); 
echo '</h2>';


echo '<ul>';



echo '<li><strong>Author: </strong>'; 
echo '<a href="'; 
genesis_custom_field('_cmb_wjc_book_author_full');
echo '">';
genesis_custom_field('_cmb_wjc_book_author_pretty');
echo '</a>';
echo '</li>';


echo '<li><strong>Publisher: </strong>'; 
echo '<a href="'; 
genesis_custom_field('_cmb_wjc_book_publisher_full');
echo '">';
genesis_custom_field('_cmb_wjc_book_publisher_pretty');
echo '</a>';
echo '</li>';


echo '<li><strong>Book website: </strong>'; 
echo '<a href="'; 
genesis_custom_field('_cmb_wjc_book_website_full');
echo '">';
genesis_custom_field('_cmb_wjc_book_website_pretty');
echo '</a>';
echo '</li>';


echo '<li><strong>Release date: </strong>'; 
genesis_custom_field('_cmb_wjc_release_date');
echo '</li>';


//echo '<li>';
//echo do_shortcode('[author-post-rating]'); 
//echo '</li>';

echo '<li><strong>Final Word: </strong>';
genesis_custom_field('_cmb_wjc_book_comment');
echo '</li>';

 
echo '</ul>';

echo '<hr>';
the_terms( $post->ID, 'book-topic',  '<strong>Book Category:</strong> ', ', ', '' );


echo '</section>';

echo '</div>';



}
}






/** Meta Entry Footer */
add_action( 'genesis_entry_content', 'wjc_custom_field_entry_content' );

/**
* @author Brad Dalton - WP Sites
* @link http://wp.me/p1lTu0-9WF
*/
function wwjc_custom_field_entry_content() {
if(is_singular( $post_type = 'resource' )) {



echo '<section>';

echo '<h2>';
genesis_custom_field('_cmb_wjc_resource_name'); 
echo '</h2>';


echo '<li><strong>Final Word: </strong>';
genesis_custom_field('_cmb_wjc_resource_description');
echo '</li>';


echo '</section>';





}
}






/** Meta Entry Footer */
add_action( 'genesis_entry_footer', 'wjc_custom_field_entry_footer' );

/**
* @author Brad Dalton - WP Sites
* @link http://wp.me/p1lTu0-9WF
*/
function wjc_custom_field_entry_footer() {
if(is_singular( $post_type = 'design-resource' )) {

echo '<div class="content-box-blue">';


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


echo '<p><strong>Description: </strong>';
genesis_custom_field('wjc_design_resource_type_description');
echo '</p>';

echo '<hr>';
the_terms( $post->ID, 'design-resource',  '<strong>Design Category:</strong> ', ', ', '' );


echo '</section>';

echo '</div>';



}
}

