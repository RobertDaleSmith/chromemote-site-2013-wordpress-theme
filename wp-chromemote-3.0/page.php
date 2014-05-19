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
				<!--<h1><?php the_title(); ?></h1>	-->
				<?php the_content(); ?>
	
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