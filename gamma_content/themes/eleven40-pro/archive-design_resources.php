<?php
/**
 * Template Name: Design Resources Archive
 */
 
remove_action( 'genesis_loop', 'genesis_do_loop' );
 
add_action( 'genesis_loop', 'wpm_design_resources' );
function wpm_design_resources() {  ?>


<div class="content-box-snow">
 
        <h2><?php _e('Resources', 'genesis'); ?></h2>
		
		<p>From time to time I find myself looking for code that I can use when building themes. I'm guessing you have the same problem, so feel free to use what you see.</p>
</div>				
				
	<div id="container">
    <img id="image" src="http://gamma.dev/gamma_content/uploads/2013/08/IMAG1550-1024x768.jpg" alt="IMAG1550" width="1024" height="768" class="alignleft size-large wp-image-79" />
    <p id="text">
        How To Add Text Over An Image How To Add Text Over An Image. How To Add Text Over An Image How To Add Text Over An Image How To Add Text Over An Image. How To Add Text Over An Image 555
    </p>
	
	
	</div>
	




		
	
		
<?php
}
genesis();