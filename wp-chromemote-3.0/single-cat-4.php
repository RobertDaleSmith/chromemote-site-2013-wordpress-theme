<?php
/*
Template Name: Single Update/Change Log Post
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
				
				
				
				<div class="blog_headline">					
					<h2 class="box_title" style="margin-top:10px; margin-bottom:8px;"><?php the_title(); ?></h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
				<div class="blog_date_box">
						<div class="blog_date_box_day"><?php the_time('j'); ?></div>
						<div class="blog_date_box_month"><?php the_time('M'); ?></div> 
					</div> 
				
				<br><br>&nbsp;
				<p class="blog_comment_count"><img src="<?php bloginfo('template_directory');?>/images/comment_count_icon.png" style="float:left;margin-top:0px;"><?php comments_popup_link('no comments', '1 comment', '% comments'); ?></p>
				
				
				
				
				<div class="blog_excerpt">
					
	  					<p>
	  						<?php the_content(); ?>
	  					</p>
  					
  				</div>
 				
 				
 				<div class="line"></div>
				<div class="white_line"></div>
				<div class="blog_excerpt">
  					<p>	
  						<?php //do_action( 'addthis_widget' ); ?>
  						
  						<h3>Leave a Reply</h3>
						<a name="comments" id="comments"></a>
						
						<?php comment_form(); ?>
  					</p>
 				</div>
 				
 				<div class="line"></div>
 				<div class="white_line"></div>
				<div class="blog_excerpt">
  					<p>	
  						<div class="navigation">
							<div class="alignleft">
								<?php previous_post( '%','‹ Previous', 'no'); ?>
							</div>
							<div class="alignright">
								<?php next_post(	 '%','Next ›'	 , 'no'); ?>
							</div>
						</div> <!-- end navigation -->
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