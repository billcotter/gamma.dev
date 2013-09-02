<?php
//* Reposition the site description
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );
add_action( 'genesis_before_content_sidebar_wrap', 'genesis_seo_site_description' );

/** Remove the post meta function */
//remove_action( 'genesis_entry_footer', 'genesis_post_meta' );


remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'eleven40_grid_loop_helper' );
/** Add support for Genesis Grid Loop */

function eleven40_grid_loop_helper() {

	if ( function_exists( 'genesis_grid_loop' ) ) {
		genesis_grid_loop( array(
			'features'				=> 1,
			'feature_image_size'	=> 0,
			'feature_image_class' 	=> 'alignleft post-image',
			'feature_content_limit' => 0,
			'grid_image_size'		=> 'grid-featured',
			'grid_image_class'		=> 'grid-featured',
			'grid_content_limit' 	=> 250,
			'more'					=> __( '[Continue reading]', 'eleven40' ),
		) );
	} else {
		genesis_standard_loop();
	}

}

genesis();