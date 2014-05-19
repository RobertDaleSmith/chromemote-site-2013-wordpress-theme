<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		<script>
		$(window).resize(function() {
		    makeMainResponsive();
		    makeHomeResponsive();
		});

		var onPageLoad = function() {
			makeMainResponsive();
		    makeHomeResponsive();
		};
		window.onload = onPageLoad;
	
		</script>
		<?php the_content(); ?>
		
		
		<!-- Front page call to action area-->
	<div id="action-wrapper">
		<div id="action_wrapper_center">
		
			<div id="top_wrapper">
			
				<div id="primary_content">
					<h1><?php bloginfo('description'); ?></h1>
					<div id="install_container">
						<h2><img src="<?php bloginfo('template_directory');?>/images/check.png" align="left" style="margin-top:5px;"><b>Remotely</b> control Google TV directly from Google Chrome on Mac or PC!</h2>
						<h2><img src="<?php bloginfo('template_directory');?>/images/check.png" align="left" style="margin-top:5px;"><b>Fling</b> videos & websites instantly and easily to your TV!</h2>
						<br>
						<!--<a href="#" class="install_button"><img class="action_button" src="<?php bloginfo('template_directory');?>/images/install.png"></a>-->
						
						
						<button class="install_button" id="install_button" onclick = "window.open('https://chrome.google.com/webstore/detail/bhcjclaangpnjgfllaoodflclpdfcegb','_blank');" style="width:224px;"><div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.png" align="left">&nbsp;&nbsp;&nbsp;INSTALL FREE!</div></button>
						
					
						
						
						<div class="tour_button_holder">&nbsp;</div>
						<a href="<?php bloginfo('url');?>/tour" class="tour_button" id="tour_button"><div style="height:10px; align:left;vertical-align:top;display:inline;padding-right:10px;">Take a Tour</div><div style="display:inline;"><img src="<?php bloginfo('template_directory');?>/images/circle_triangle_button.png"></div></a>
						<br><br>						
						<div id="cws_button_holder">Available in the <a href="https://chrome.google.com/webstore/detail/chromemote-beta/bhcjclaangpnjgfllaoodflclpdfcegb" target="_blank" class="cws_button">Chrome Web Store</a></div>
						
					</div>
					
					<div id="video_container" style="overflow: hidden;">
						<!--div style="position:relative;text-align:right;top:30px;right:20px;height:0px;"><a href="">FLING</a></div!-->
						<iframe width="405" height="228" src="http://www.youtube.com/embed/Ok0egjv3eCk" id="demo_video" frameborder="0" allowfullscreen></iframe><br>
						
						 <ul id="social_links">
                                <li>
                                    <div style="height: 20px; overflow: hidden;">
                                        <fb:like href="http://www.facebook.com/chromemote/" send="false" layout="button_count" width="450" show_faces="true"></fb:like>
                                    </div>
                                </li>
                                <li style="margin-left: -2px;">
                                    <iframe allowtransparency="true" frameborder="0" scrolling="no" src="https://platform.twitter.com/widgets/follow_button.html?screen_name=chromemote&show_count=false&show_screen_name=false" style="height: 20px; width: 60px;" ></iframe>
                                </li>
                                <li>
                                	<g:plusone size="medium" href="https://plus.google.com/107890677565458476428" annotations="none"></g:plusone>
                                </li>
                            </ul>
					</div>
				</div>
				
			</div>		
				
		</div>
	</div>
	
	<!-- Header bar to at start of every content page-->
	<div id="header-bar"></div>
	<div class="white_line"></div>
	
		
	<!-- -->
	<div id="body_wrapper">
		<br>
		<div class="grey_line" id="grey_line_seperator1"></div>
			<p class="as_seen_on_title">As seen on:</p>
		<div class="grey_line" id="grey_line_seperator2"></div>

		<div>
			<div style="display:inline-block;"><a href="http://gigaom.com/2012/07/16/cord-cutters-using-chrome-as-a-google-tv-remote/" target="_blank"><div class="as_seen_on_gigaom" id="as_seen_on"></div></a></div>
			<div style="display:inline-block;"><a href="http://lifehacker.com/5928415/chromemote-is-a-google-tv-remote-that-lives-in-chrome" target="_blank"><div class="as_seen_on_lifehacker" id="as_seen_on"></div></a></div>
			<div style="display:inline-block;"><a href="http://androinica.com/2012/07/chromemote-turns-your-chrome-browser-into-a-google-tv-remote-app-reviews/" target="_blank"><div class="as_seen_on_androinica" id="as_seen_on"></div></a></div>
			<div style="display:inline-block;"><a href="http://www.androidcentral.com/chromemote-offers-better-solution-controlling-your-google-tv" target="_blank"><div class="as_seen_on_androidcentral" id="as_seen_on"></div></a></div>

		</div>
		
		
		
		<div id="secondary_content">
			
			
			
			<div class="box" id="support_box">
				<div class="headline" id="support_box_headline">
					<p class="box_title">Support Us!</p>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
				<p class="grey_bold">Like Chromemote?</p>
				<p class="grey_italic">You make this possible by supporting the&nbsp;developers!&nbsp;Click&nbsp;below&nbsp;to&nbsp;help!</p>
				<br>
				<!--<a href="#" class="support_button"></a>-->
				<button class="support_button" onclick="location.href='<?php bloginfo('url');?>/support-us'"><b>Support Us</b></button>
				<br><br>
				<p class="grey_italic">You can also Support us by purchasing your&nbsp;next&nbsp;Google&nbsp;TV&nbsp;below.</p>
				<br>
				<!--<a href="#" class="google_tv_button"></a>-->
				<button class="google_tv_button" onclick="location.href='<?php bloginfo('url');?>/get-gtv'"><b>Google TV List</b></button>
				<br>
			</div>
			
			<div class="box" id="press_box">
				<div class="headline" id="press_box_headline">
					<p class="box_title">In the Media</p>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
				
				<div class="blog_box_body">
				<p style="line-height:12px; ">&nbsp;</p>
					<?php
 						global $post;
 						$myposts = get_posts('numberposts=3&category=3');
 						foreach($myposts as $post) :
 					?>
 					<?php 
 						$postTitle=the_title('','',false); 
 						$postTitle=substr($postTitle,7,55); 
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
					
					<a href="<?php echo $source_url; ?>" target="_blank"><?php echo $postTitle; ?></a>
				
					<p style="line-height:15px;">&nbsp;</p>
				 
					<?php endforeach; ?>
					<div style="text-align:right; ">
						<a href="<?php bloginfo('url');?>/in-the-media" class="goto_blog_button" id="goto_blog_button" ><div style="height:10px; align:left;vertical-align:top;display:inline;padding-right:10px; font-size:13px;">More Press</div><div style="display:inline;padding-bottom:20px;"><img src="<?php bloginfo('template_directory');?>/images/circle_triangle_button_color.png" ></div></a>
					</div>
					
				</div>
				
				
			</div>
			
			<div class="box" id="blog_box">
				<div class="headline" id="blog_box_headline">
					<p class="box_title">Recent Blog Posts</p>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
				
				<div class="blog_box_body">
					<p style="line-height:12px; ">&nbsp;</p>
					<?php
 						global $post;
 						$myposts = get_posts('numberposts=3&category=2');
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
			
			<div class="wide_box" id="faq_box">
				<div class="wide_headline" id="faq_box_headline">
					<p class="box_title" id="faq_box_title">Frequently Asked Questions</p>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
				
				<div class="blog_box_body">
					
					<p style="line-height:8px; ">&nbsp;</p>
					<a href="<?php bloginfo('url');?>/faq/#what-is-chromemote">What is Chromemote?</a><br>
					<a href="<?php bloginfo('url');?>/faq/#why-google-tv">Why Google TV and what is Google TV?</a><br>
					<a href="<?php bloginfo('url');?>/faq/#features-chromemote-has">What features does Chromemote currently have?</a><br>
					<a href="<?php bloginfo('url');?>/faq/#features-coming-soon">What features are coming soon to Chromemote?</a><br>
					<a href="<?php bloginfo('url');?>/faq/#how-dows-chromemote-work">How does Chromemote work?</a><br>
					<a href="<?php bloginfo('url');?>/faq/#chrome-os-support">Will Chrome OS support be added?</a><br>
					
					<p style="line-height:10px;">&nbsp;</p>
															
					<div style="text-align:right; ">
						<a href="<?php bloginfo('url');?>/faq" class="goto_blog_button" id="goto_blog_button" ><div style="height:10px; align:left;vertical-align:top;display:inline;padding-right:10px; font-size:13px;">More FAQ</div><div style="display:inline;padding-bottom:20px;"><img src="<?php bloginfo('template_directory');?>/images/circle_triangle_button_color.png" ></div></a>
					</div>
					
				</div>
				
			</div>
			
			<div class="wide_box" id="updates_box">
				<div class="wide_headline" id="updates_box_headline">
					<p class="box_title">Recent Updates</p>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
				
				
				
				<div class="blog_box_body">
					<p style="line-height:12px; ">&nbsp;</p>
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
					<!--<a href="<?php the_permalink(); ?>"><?php echo $postTitle; ?></a>-->
					
					
					
					
					<?php
						$custom_fields = get_post_custom(get_the_ID());
						$latest_version_field = $custom_fields['update_version_field'];
						foreach ( $latest_version_field as $key => $value )
							$latest_version = $value;
					?>
					<a href="<?php the_permalink(); ?>">
					<center class="updates_box_title">Latest Update: <em class="updates_box_date_version"><?php the_time('jS M, Y'); ?> (v.&nbsp;<?php echo $latest_version; ?>)</em></center>
					</a>			
					<p style="line-height:10px;">&nbsp;</p>
					<?php
						$custom_fields = get_post_custom(get_the_ID());
						$update_highlights_field = $custom_fields['update_highlights_field'];
						foreach ( $update_highlights_field as $key => $value )
							$update_highlights_field = $value;
					?>
					
					<div class="updates_highlights"><?php echo $update_highlights_field; ?></div>
										
					<p style="line-height:15px;">&nbsp;</p>
				 
					<?php endforeach; ?>
					<div style="text-align:right; ">
						<a href="<?php bloginfo('url');?>/changelog" class="goto_blog_button" id="goto_blog_button" ><div style="height:10px; align:left;vertical-align:top;display:inline;padding-right:10px; font-size:13px;">Changelog</div><div style="display:inline;padding-bottom:20px;"><img src="<?php bloginfo('template_directory');?>/images/circle_triangle_button_color.png" ></div></a>
					</div>
				
				
				
				
				
			</div>
			
			
		</div>
	</div>
		
		
		

<?php endwhile; else: ?> 
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p> 
<?php endif; ?>

<?php get_footer(); ?>