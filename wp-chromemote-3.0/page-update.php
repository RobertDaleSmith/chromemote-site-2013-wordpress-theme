<?php
/*
Template Name: Update Chromemote Page
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
					<h2 class="get_gtv_box_title" style="margin-top:10px; margin-bottom:8px;">Update Chromemote!</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<div style="height:40px;display:block;overflow:hidden;">&nbsp;</div>
				
				<?php
					global $post;
					$myposts = get_posts('numberposts=1&category=4');
					foreach($myposts as $post) :
 				?>
 				<?php 
					$postTitle=the_title('','',false); 
					$postTitle=substr($postTitle,0,69); 
					if(strlen( the_title('','',false)) >= 70)
 					{
 						$postTitle = $postTitle .'…';		
 					}
 							
 				?>
					
				<?php
					$custom_fields = get_post_custom(get_the_ID());
					$latest_version_field = $custom_fields['update_version_field'];
					foreach ( $latest_version_field as $key => $value )
						$latest_version = $value;
						
					$installed_version = 'detecting...';
				?>
					
				
				<div class="blog_excerpt">
  					<p>
  						We are releasing updates all the time for Chromemote. Updates should install automatically upon release. You can speed up the process by updating directly from Chromemote.com at any time.			
  						<br><br>Latest Version: &nbsp;&nbsp;&nbsp;&nbsp; <b>v.</b><b id="latest-version"><?php echo $latest_version; ?></b>
  						<br>Installed Version: &nbsp; <b>v.</b><b id="installed-version"><?php echo $installed_version; ?></b>
  						<br><br>
  						<div style="text-align:center;">
  							<button class="update_button" id="update_button" onclick="window.open('https://chrome.google.com/webstore/detail/bhcjclaangpnjgfllaoodflclpdfcegb','_blank');" style="margin-left:  25px; margin-right: 25px; margin-top: 20px;"><div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.png" align="left">&nbsp;&nbsp;&nbsp;INSTALL FREE!</div></button>
						</div>
  					</p>
 				
				<?php endforeach; ?>
				
				
				
				
				</div>
				
				
								
			<?php endwhile; else: ?> 
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
			
		</div>
		<div class="blank_box" id="blank_box">
					<br>
		</div>
		<div class="span4">
		
			<div style="display:inline-block;">
				
				<?php get_sidebar(); ?>	
			</div>		
		</div>
	</div>

</div>

<script>
	document.getElementById("side_bar_install_box").style.display = 'none';
	
	var bodyWrapper	= $('#body_container');
    var bodyHeight	= bodyWrapper.height();
    headerWrapper 		= $('#header-wrapper');    
    var headerWidth = headerWrapper.width();
	if(document.getElementById("blank_box"))
		if ( headerWidth > 960 )
    	{
    	
    		document.getElementById('blank_box').style.height= (bodyHeight-775) +"px";
   	 	}
    	else
    	{
    		document.getElementById('blank_box').style.height= 0 +"px";
    	}
	
</script>



<?php get_footer(); ?>