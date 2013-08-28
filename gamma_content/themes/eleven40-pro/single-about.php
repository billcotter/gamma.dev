<?php
/**
 * This file adds the Landing template to the eleven40 Pro Theme.
 *
 * @author StudioPress
 * @package Generate
 * @subpackage Customizations
 */

/*
Template Name: About
*/

remove_action( 'genesis_loop', 'genesis_do_loop' );
 
add_action( 'genesis_loop', 'wpm_design_resources' );
function wpm_design_resources() {  


//* Force full width content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
?>
		
	


<!--
<figure>
<img src="http://gamma.dev/gamma_content/uploads/2013/08/bill-1024x670.jpg" alt="bill" width="100%" height="100%" class="alignleft size-large wp-image-86" />
<figcaption>
<h3>jkjknk</h3>
<p>lknalknlkanlsknl klsanlcknlaskcns;lan klasnclknaslkn skan;lsan lknalknlkanlsknl klsanlcknlaskcns;lan klasnclknaslkn skan;lsan
lknalknlkanlsknl klsanlcknlaskcns;lan klasnclknaslkn skan;lsan lknalknlkanlsknl klsanlcknlaskcns;lan klasnclknaslkn skan;lsan
</p>
<p>Read More...</p>
</figcaption>
</figure>
-->



			
	<div class="one-fourth first">
	
	<figure class="about-img"><img src="http://gamma.dev/gamma_content/uploads/2013/08/bill13.jpg" />
	</figure>
	</div>
	
	
<div class="three-fourths about-content">

<section>

<blockquote>Panel and adding new widgets to this area This is the Primary Sidebar Widget Area.</blockquote>

 </div>  

 <div class="two-fourths about-box">
    <h2>About:</h2>
	<p>
        Wired Project Management (aka WiredPM), is the creative outlet of Bill Cotter. That’s me. I am passionate about design, typography, and the media and tools of my craft. I am currently an independent contractor, where I leading a small design team, and overseeing an evolving set of design challenges for a growing list of features and uses of the service. This site is a collection of creative thinking, writing, and work that represents the problem solving, simple solutions, and cost-effective results I’ve produced and delivered for clients and readers around the world. This site is also where I ramble on about design and all things that interest me.</p>
		
		<h2>Process:</h2>
		<ul>
		<li>How To Add Text Over An Image How How To Add Text Over An Image How</li>
		<li>How To Add Text Over An Image How How To Add Text Over An Image How</li>
		<li>How To Add Text Over An Image How How To Add Text Over An Image How</li>
		</ul>
		<p>
        How To Add Text Over An Image How To Add Text Over An Image. How To Add Text Over An Image How To Add Text Over An Image How To Add Text Over An Image. How To Add Text Over An Image</p>
		</div>
		<div class="one-fourth about-box">
		<h2>Skills:</h2>
		<ul>
		<li>How To Add Text Over An Image How How To Add Text Over An Image How</li>
		<li>How To Add Text Over An Image How How To Add Text Over An Image How</li>
		<li>How To Add Text Over An Image How How To Add Text Over An Image How</li>
		</ul>
		
		<h2>Interests:</h2>
		<ul>
		<li>How To Add Text Over An Image How How To Add Text Over An Image How</li>
		<li>How To Add Text Over An Image How How To Add Text Over An Image How</li>
		<li>How To Add Text Over An Image How How To Add Text Over An Image How</li>
		</ul>
    
  <section>  
	
	</div>

<?php



//* Run the Genesis loop
}
genesis();