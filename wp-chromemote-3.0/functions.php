<?php 

	function wpbootstrap_scripts_with_jquery() 
	{ 
		wp_register_script( 'jquery-script', get_template_directory_uri() . '/chromemote-3.0/js/jquery.min.js'); 
		wp_enqueue_script( 'jquery-script' ); 
			
		wp_register_script( 'custom-script', get_template_directory_uri() . '/chromemote-3.0/js/scripts.js'); 	// Register the script like this for a theme: 
		wp_enqueue_script( 'custom-script' ); 																	// For either a plugin or a theme, you can then enqueue the script:
	} 
	add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' ); 
			
	if ( function_exists('register_sidebar') )
	{
		register_sidebar(array( 
			'before_widget' => '', 
			'after_widget' => '', 
			'before_title' => '<h3>', 
			'after_title' => '</h3>', 
		));
	}
	
	
	
	
	
	function new_excerpt_more($more) {
       global $post;
		return ' <span class="blog_read_more" style="display:inline-block;"> <a href="'. get_permalink($post->ID) . '"> more...</a></span>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	
	function drawBackToTop() 
	{ 
		echo '	<div align="right">
					<div style="display:inline-block;width:125px;">
						<a href="#">
							<div class="back-to-top-button">Back to top</div>
						</a>
					</div>
				</div>
			 ';
	}	

	add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );
	
	function current_page_url() {
		$pageURL = 'http';
		if( isset($_SERVER["HTTPS"]) ) {
			if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}
	
	# Remove WordPress' canonical links
	remove_action('wp_head', 'rel_canonical');
?>
