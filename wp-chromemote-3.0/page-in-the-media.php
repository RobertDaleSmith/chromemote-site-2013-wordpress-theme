<?php
/*
Template Name: In The Media Page
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
		return 55;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );			
?>
<!-- Header bar to at start of every content page-->
<div id="header-bar"></div>
<div class="white_line"></div>

<div id="body_wrapper">	
	
	
	<div class="row">
		<div class="span8">
			<!--<h1>In The Media</h1>-->
		
		
			
			<br>
			<?php
 				global $post;
 				$myposts = get_posts('numberposts=25&category=3');
 				foreach($myposts as $post) : setup_postdata($post);
 			?>
 			<?php 
				$postTitle=the_title('','',false); 
				$postTitle=substr($postTitle,7,100); 
				if(strlen( the_title('','',false)) >= 101)
				{
					$postTitle = $postTitle .'…';
					
				}						
			?>
			<?php
				$custom_fields = get_post_custom(get_the_ID());
				$source_site_field = $custom_fields['source_site_field'];
				foreach ( $source_site_field as $key => $value )
					$sourceSite = $value;
			?>
			<div class="blog_box" id="faq_box">
				
				
				
				<div class="blog_headline">					
					<h2 class="box_title" style="margin-top:10px; margin-bottom:8px;"><a href="<?php the_permalink(); ?>"><em style="font-weight:100;"><?php echo $sourceSite; ?></em><br><?php echo $postTitle; ?></a></h2>
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
				
					<blockquote class="bigquote">
	  					<?php the_excerpt(); ?>
	  				</blockquote>
 				
 					<br>
 					
 					
 					<?php
						$custom_fields = get_post_custom(get_the_ID());
						$source_author_field = $custom_fields['source_author_field'];
						foreach ( $source_author_field as $key => $value )
							$sourceAuthor = $value;
					?>
 					<?php
						$custom_fields = get_post_custom(get_the_ID());
						$source_url_field = $custom_fields['source_url_field'];
						foreach ( $source_url_field as $key => $value )
							$sourceUrl = $value;
					?>
 					Source: <a href="<?php echo $sourceUrl; ?>" target="_blank"><?php echo $sourceSite; ?></a> | <?php echo $sourceAuthor; ?>
 				</div>
 				
 				
			</div>
			
			
			<?php endforeach; ?>
			
		</div>
		<div class="span4" style="vertical-align:top;">
		
			<div style="display:inline-block;">
				
				<?php get_sidebar(); ?>	
			
				<?php $sidePressCount= 20	; include 'sidebar-in-the-media.php';?>
			</div>	
		</div>
	</div>


	
	


</div>

<?php get_footer(); ?>