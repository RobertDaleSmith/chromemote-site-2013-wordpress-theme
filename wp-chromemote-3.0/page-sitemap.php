<?php
/*
Template Name: Sitemap Page
*/
?>
<?php get_header(); ?>

<script>
	$(window).resize(function() {
	    makeMainResponsive();
	});
	var onPageLoad = function() {
		makeMainResponsive();
	};
	window.onload = onPageLoad;

</script>

<!-- Header bar to at start of every content page-->
<div id="header-bar"></div>
<div class="white_line"></div>

<div id="body_wrapper">	

	<div class="row">
		<div class="span8">
		
			<br>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<div class="blog_box" id="faq_box">
				
				
				
				<div class="blog_headline" style="">					
					<h2 class="box_title" style="margin-top:10px; margin-bottom:8px;margin-left:-40px;"><?php the_title(); ?></h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<br><br>
			
				
				<div class="blog_excerpt">
					
	  					<p>
	  						<?php the_content(); ?>
	  					</p>
  					
  				</div>
 				
 				
 				
 				
			</div>

				
								
			<?php endwhile; else: ?> 
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
			
		</div>
		<div class="span4">
		
			<div style="display:inline-block;">
				
				<?php get_sidebar(); ?>	
			</div>		
		</div>
	</div>

</div>

<?php get_footer(); ?>