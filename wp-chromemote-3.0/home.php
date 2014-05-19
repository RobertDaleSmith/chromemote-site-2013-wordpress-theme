<?php
/*
Template Name: Blog Page
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
<?php 			
	function custom_excerpt_length( $length ) {
		return 100;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );			
?>
<!-- Header bar to at start of every content page-->
<div id="header-bar"></div>
<div class="white_line"></div>

<div id="body_wrapper">	
	
	
	<div class="row">
		<div class="span8">
			<!--<h1>Blog</h1>-->
		
		
			
			<br>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<div class="blog_box">
				
				
				
				<div class="blog_headline">					
					<h2 class="box_title" style="margin-top:10px; margin-bottom:8px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
				<div class="blog_date_box">
						<div class="blog_date_box_day"><?php the_time('j'); ?></div>
						<div class="blog_date_box_month"><?php the_time('M'); ?></div> 
					</div> 
				
				<br><br>&nbsp;
				<p class="blog_comment_count"><img src="<?php bloginfo('template_directory');?>/images/comment_count_icon.png" style="float:left;margin-top:0px;"><?php comments_popup_link('0 comments', '1 comment', '% comments'); ?></p>
				
				<div class="blog_excerpt">
  					<p><?php the_content(); ?></p>
 				</div>
			</div>
			
			
			<?php endwhile; else: ?> 
				<p><?php _e('Sorry, there are no posts.'); ?></p>
			<?php endif; ?>
			<div style="text-align:center;width:620px;position: relative; float:left;">
				<br>
				<?php wp_pagenavi(); ?>
				<br>
			</div>
			
		</div>
		<div class="span4" style="vertical-align:top;">
		
			<div style="display:inline-block;">		
				<?php get_sidebar(); ?>	
			
				<?php $sideBlogCount = 10; include 'sidebar-recent-blog.php'; ?>
				<?php $sidePressCount= 10; include 'sidebar-in-the-media.php';?>
				<?php $sidePressCount= 10; include 'sidebar-tweets.php';?>
			</div>
		</div>
	</div>


	
	


</div>

<?php get_footer(); ?>