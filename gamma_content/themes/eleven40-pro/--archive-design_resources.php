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
				
	<div>			
<section>

<div class="cpt"/>
<h3>Analytics</h3>
	<ul>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">(More... )</a></li>
	</ul>
	<h3>Code</h3>
	<ul>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">(More... )</a></li>
	</ul>
	<h3>Content</h3>
	<ul>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">(More... )</a></li>
	</ul>
	<h3>Design</h3>
	<ul>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">(More... )</a></li>
	</ul>
	<h3>Project Management</h3>
	<ul>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">(More... )</a></li>
	</ul>
	<h3>UX | UI</h3>
	<ul>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">This was taken in Gamla Stan (Old Town) in a large square of amazing buildings.</a></li>
		<li><a href="#">(More... )</a></li>
	</ul>
</div>


</section>
		
	
		</div><!-- end .entry-content -->

<?php
}
genesis();