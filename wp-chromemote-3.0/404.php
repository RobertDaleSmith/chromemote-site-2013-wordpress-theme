<?php
/*
Template Name: 404 Page
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
			<?php endwhile; else: ?>
			<div class="blog_box" id="faq_box">
				
				
				
				<div class="blog_headline">					
					<h2 class="box_title" style="margin-left:-45px;margin-top:10px; margin-bottom:8px;">Error 404 - Page Not Found</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<div style="font-size:10px;">&nbsp;</div>
				
				
				<div class="blog_excerpt">
  					<p>
  						<div style="font-weight:bold;font-size:74px;line-height:60px;">Oops!</div>
  						<div style="margin-left:125px;">
  						
  							It’s looking like you may have taken a wrong turn.<br>
  							Don’t worry... it happens to the best of us. 
  						
  						</div>
  						<?php //_e('Sorry, this page does not exist.'); ?>
  					</p>
  					
  					<br><br><br>
  					<div>
 						Here’s a little map that might help you get back on track:
	 				</div>
	 				
	 				<br>
	 				
	 				<div id="footer_menu_list_center" >
					  <b >
						<ul id="footer_menu_list">
						  
							<?php 
								//wp_list_pages(array('title_li' => ''));
								$parent_pages_to_exclude = array(49,51,171);
								foreach($parent_pages_to_exclude as $parent_page_to_exclude) {
										
									if ($page_exclusions) { $page_exclusions .= ',' . $parent_page_to_exclude; }
									else { $page_exclusions = $parent_page_to_exclude; }
									$descendants = get_pages('child_of=' . $parent_page_to_exclude);
									foreach($descendants as $descendant) {
										$page_exclusions .= ',' . $descendant->ID;
									}
											
								}
								wp_list_pages('title_li=&sort_column=menu_order&exclude=' . $page_exclusions); 
							?>
						</ul>
					  </b>
					</div>
	 				<br><br><br><br><br>
	 				<div align="right" style="font-weight:bold;font-size:154px;line-height:60px;">404</div>
	 				
 				</div>
 				
 				

			</div>

				
								
				
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