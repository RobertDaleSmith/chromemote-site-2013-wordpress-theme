				<div class="side_bar_box">
					<div class="" id="">
						<p class="side_bar_box_title">In the Media</p>
					</div>

					<div class="blog_box_body">
						<p style="line-height:12px; ">&nbsp;</p>
						<?php
 							global $post;
 							$myposts = get_posts('numberposts='.$sidePressCount.'&category=3');
 						foreach($myposts as $post) :
 					?>
 					<?php 
 						$postTitle=the_title('','',false); 
 						$postTitle=substr($postTitle,7,60); 
 						if(strlen( the_title('','',false)) >= 61)
 						{
 							$postTitle = $postTitle .'…';
 							
 						}
 							
 					?>
 					
 					<em style="font-size:14px;color:#898989;font-family: helvetica, arial, sans-serif;">
	 					<?php the_time('jS M, Y'); ?>
 					</em>
 					
 					<em style="font-size:14px;color:#898989;font-family: helvetica, arial, sans-serif;">
 					<div style="display:inline-block;float:right;">
 						<?php
							$custom_fields = get_post_custom(get_the_ID());
							$source_site_field = $custom_fields['source_site_field'];
							foreach ( $source_site_field as $key => $value )
								echo $value;
						?>
					</div>
 					</em>							
					<br>
					
					<?php
						$custom_fields = get_post_custom(get_the_ID());
						$source_url_field = $custom_fields['source_url_field'];
						foreach ( $source_url_field as $key => $value )
							$source_url = $value;
					?>
					
					<a href="<?php the_permalink(); ?>"><?php echo $postTitle; ?></a>
				
					<p style="line-height:15px;">&nbsp;</p>
				 
					<?php endforeach; ?>
											
						<div style="text-align:right; ">
							<a href="<?php bloginfo('url');?>/in-the-media" class="goto_blog_button" id="goto_blog_button" ><div style="height:10px; align:left;vertical-align:top;display:inline;padding-right:10px; font-size:13px;">More Press</div><div style="display:inline;padding-bottom:20px;"><img src="<?php bloginfo('template_directory');?>/images/circle_triangle_button_color.png" ></div></a>
						</div>
						
						
						
					</div>

				</div>