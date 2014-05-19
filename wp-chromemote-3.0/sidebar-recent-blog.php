				<div class="side_bar_box">
					<div class="" id="">
						<p class="side_bar_box_title">Recent Blog Posts</p>
					</div>

					<div class="blog_box_body">
						<p style="line-height:12px; ">&nbsp;</p>
						<?php
 							global $post;
 							$myposts = get_posts('numberposts='.$sideBlogCount.'&category=2');
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
						<a href="<?php the_permalink(); ?>"><?php echo $postTitle; ?></a>
						
						<br>
					
						<em style="font-size:12px;color:#898989;font-family: helvetica, arial, sans-serif;"><?php the_time('jS M, Y'); ?></em>
				
						<p style="line-height:15px;">&nbsp;</p>
				 
						<?php endforeach; ?>
						
						<div style="text-align:right; ">
							<a href="<?php bloginfo('url');?>/blog" class="goto_blog_button" id="goto_blog_button" ><div style="height:10px; align:left;vertical-align:top;display:inline;padding-right:10px; font-size:13px;">Go to Blog</div><div style="display:inline;padding-bottom:20px;"><img src="<?php bloginfo('template_directory');?>/images/circle_triangle_button_color.png" ></div></a>
						</div>
						
						
						
					</div>

				</div>