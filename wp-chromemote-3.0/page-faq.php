<?php
/*
Template Name: FAQ Page
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
					<h2 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">Frequently Asked Questions</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	
				<div class="blog_excerpt">
  					<p>
  						<?php the_content(); ?>
  					</p>
 				</div>
 				
 				<ol class="faq_list">
 				
 					<a href="#what-is-chromemote"><li>What is Chromemote?</li></a>
 					<a href="#why-google-tv"><li>Why Google TV and what is Google TV?</li></a>
 					<a href="#features-chromemote-has"><li>What features does Chromemote currently have?</li></a>
 					<a href="#features-coming-soon"><li>What features are coming soon to Chromemote?</li></a>
 					
 					<a href="#how-does-chromemote-work"><li>How does Chromemote work?</li></a>
 					<a href="#chrome-os-support"><li>Will Chrome OS support be added?</li></a>
 					<a href="#what-is-fling"><li>What the heck is a fling?</li></a>
 					
 					<a href="#how-to-fling"><li>How do I fling websites to my TV?</li></a>
 					<a href="#how-to-share-keyboard-mouse"><li>How do I share my keyboard and mouse/touchpad through Chromemote?</li></a>
 					<a href="#how-come-no-chrome-os-support"><li>How come Chromemote does not work correctly with Chrome OS?</li></a>
 					
 					<a href="#what-is-compatible"><li>What kind of computer systems does Chromemote support?</li></a>
 					<a href="#how-can-help-chromemote"><li>How can I help make Chromemote better?</li></a>
 					<a href="#what-the-permissions"><li>What is up with the permissions level?</li></a>
 					
 				</ol>
 				
 			</div>
		
			<?php endwhile; else: ?> 
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
			
			
			
			<div class="blog_box" id="faq_box">
				<a name="what-is-chromemote" id="what-is-chromemote"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">1. <span style="font-weight:100;">What is Chromemote?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Chromemote is a browsers extension for Google Chrome that integrates remote control of Google TV into the web browser. Right click on any link and Fling it to your TV. Chromemote also provides full remote control interface that can be accessed from a popup window. You can also pin this window to a tab within your browser. With Chromemote you can use your laptops keyboard and touchpad to control your TV. No more need to reach for a remote when you are surfing the internet on your laptop and watching TV at the same time.
						<br><br>
						Chromemote is available in the <a href="https://chrome.google.com/webstore/detail/chromemote-beta/bhcjclaangpnjgfllaoodflclpdfcegb" target="_blank">Chrome Web Store</a> and can be downloaded directly to Chrome web browsers by clicking the install button at the top of every page on this web site. 
						
						<?php  drawBackToTop(); ?>
						
  					</p>
 				</div>
 				
 			</div>
			
			
			
			<div class="blog_box" id="faq_box">
				<a name="why-google-tv" id="why-google-tv"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">2. <span style="font-weight:100;">Why Google TV and what is Google TV?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Google TV is awesome, thats why. :) Actually I had received a Google TV device in a developer contest and wanted to show my thanks by building something really awesome for Google TV. Also Google TV is the perfect platform for having a shared experience between watching TV and surfing the internet on your other devices. Many people use a second device such as a tablet or laptop while watching TV. Google TV is a smart TV platform with a full web browser to allow you to merge your existing TV experience with the web.
  						<br><br>
  						<iframe width="560" height="315" src="http://www.youtube.com/embed/jmqvqgBCP0A" frameborder="0" allowfullscreen></iframe>
  						<br><br>
  						<?php  drawBackToTop(); ?>
  					</p>
 				</div>
 				
 			</div>
			
				
			
			<div class="blog_box" id="faq_box">
				<a name="features-chromemote-has" id="features-chromemote-has"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">3. <span style="font-weight:100;">What features does Chromemote currently have?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Chromemote offers full remote control of multiple Google TV devices. Use your laptop or desktop computer keyboard and mouse to remotely navigate the web on your TV. Chromemote integrates the ability to fling web content to paired Google TV devices. Images, web pages, selected text, and web links can be right clicked on and from a context menu option you can instantly fling that content to open on the big screen. Many users requested the ability to pin the popup remote to stay open, so I recently added the ability to pin Chromemote to a tab in Chrome. This keeps the remote open for extended use.
  						
  						<?php  drawBackToTop(); ?>
  						
  					</p>
 				</div>
 				
 			</div>
			
			
			
			<div class="blog_box" id="faq_box">
				<a name="features-coming-soon" id="features-coming-soon"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">4. <span style="font-weight:100;">What features are coming soon to Chromemote?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
						We are currently developing the ability for users to fully customize the remote control interface. First will be button customization. You will be able to rearrange buttons, edit all the remote buttons, and change the icons on each button. Second will be the ability to not only select alternate themes but a feature to import and export themes. We want to allow the DIY users out there to create and share their own remote control themes. We also want to build an TV app launcher interface, add ChromeOS support, add the ability to sync you TV channel list with Chromemote, and many many more features. 
						<br><br>
						Actually we are more interested in what you want to see Chromemote do. Contact the developer directly with your ideas and thoughts at <a href="mailto:robert@chromemote.com">robert@chromemote.com</a>.
						
						<?php  drawBackToTop(); ?>
						
  					</p>
 				</div>
 				
 			</div>
			
			
					
				
			
			<div class="blog_box" id="faq_box">
				<a name="how-does-chromemote-work" id="how-does-chromemote-work"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">5. <span style="font-weight:100;">How does Chromemote work?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Chromemote is made possible by the power of the Google TV platform. Chromemote is able to discover and pair with Google TV devices attached to the same local area network. Once paired with a Google TV, your Google Chrome web browser is now ready to send any remote commands, web content, mouse movements, keyboard commands, etc.
  						
  						<?php  drawBackToTop(); ?>
  						
  					</p>
 				</div>
 				
 			</div>
						
			
					
				
			
			<div class="blog_box" id="faq_box">
				<a name="chrome-os-support" id="chrome-os-support"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">6. <span style="font-weight:100;">Will Chrome OS support be added?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Yes, we are actively researching a way to make it possible for Chrome OS to communicate with Google TV devices.
  						
  						<?php  drawBackToTop(); ?>
  						
  					</p>
 				</div>
 				
 			</div>
									
			
					
				
			
			<div class="blog_box" id="faq_box">
				<a name="what-is-fling" id="what-is-fling"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">7. <span style="font-weight:100;">What the heck is a fling?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Chromemote adds a menu option to the right click context menu that allows you to send web content to your TV instantly. Right click a link to a YouTube video on your laptop and then click 'Fling to Google TV' to have that link open start playing on the TV. 
  					
  						<?php  drawBackToTop(); ?>
  						
  						
  					</p>
 				</div>
 				
 			</div>
 												
			
					
				
			
			<div class="blog_box" id="faq_box">
				<a name="how-to-fling" id="how-to-fling"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">8. <span style="font-weight:100;">How do I fling websites to my TV?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Once you have paired with a Google TV device you can fling almost any web content to your TV. Right click on links, images, selected text, and web pages to access the 'Fling to Google TV' option. Simply click Fling to Google TV to fling the web content to the TV.
  						
  						<?php  drawBackToTop(); ?>
  					
  					</p>
 				</div>
 				
 			</div>
 												
			
					
				
			
			<div class="blog_box" id="faq_box">
				<a name="how-to-share-keyboard-mouse" id="how-to-share-keyboard-mouse"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">9. <span style="font-weight:100;">How do I share my keyboard and mouse/touchpad through Chromemote?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Once you are paired with a Google TV, your keyboard will be automatically shared with the Google TV each time you open the popup or tabbed Chromemote remote interface. So when you open the Chromemote UI, you can just start typing on your computers keyboard to send the commands to your TV. Many keyboard keys have ben mapped to improve control. Such as the CTRL acts as the Google TV search button. To control the cursor on your Google TV, you just have to click the cursor icon on Chromemote to access the touchpad interface. Click and drag your mouse over the touch pad to move the cursor on the TV. Do a single click on the touch pad to send the left mouse click to the Google TV.
  					
  						<?php  drawBackToTop(); ?>
  						
  					</p>
 				</div>
 				
 			</div>
 												
			
					
				
			
			<div class="blog_box" id="faq_box">
				<a name="how-come-no-chrome-os-support" id="how-come-no-chrome-os-support"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">10. <span style="font-weight:100;">How come Chromemote does not work correctly with Chrome OS?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Chrome OS does not support the essential plugin that allows Chromemote to communicate with Google TV. Google built an NPAPI that allows developers to build Google Chrome Extensions that communicate with Google TVs. The downside to this type of plugin is that it is not supported by Chrome OS. Also seems that it may never be supported. We are researching a different method of communication to get around this problem. Stay tuned for updates for Chrome OS support.
  					</p>
  					
  					<?php  drawBackToTop(); ?>
  					
 				</div>
 				
 			</div>
 												
			
					
				
			
			<div class="blog_box" id="faq_box">
				<a name="what-is-compatible" id="what-is-compatible"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">11. <span style="font-weight:100;">What kind of computer systems does Chromemote support?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Chromemote is compatible with Google Chrome running on Windows, Linux, and Mac OSX. Sorry there is not any Chrome OS support at this time.
  					</p>
  					
  					<?php  drawBackToTop(); ?>
  					
 				</div>
 				
 			</div>
 												
			
					
				
			
			<div class="blog_box" id="faq_box">
				<a name="how-can-help-chromemote" id="how-can-help-chromemote"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">12. <span style="font-weight:100;">How can I help make Chromemote better?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						We built our dream, but is it yours? Tell us what we missed or what you love about Chromemote. Also feel free to leave a donation. Chromemote is honor-ware, which means you pay only what you can afford for Chromemote. If you can not afford it, then continue to use for free with our blessing. We want to share our work with the world so please tell all your friends about Chromemote.
  					</p>
  					
  					<?php  drawBackToTop(); ?>
  					
 				</div>
 				
 			</div>
 			
				
			
			<div class="blog_box" id="faq_box">
				<a name="what-the-permissions" id="what-the-permissions"></a>
				<div class="blog_headline">					
					<h3 class="faq_page_box_title" style="margin-top:10px; margin-bottom:8px;">13. <span style="font-weight:100;">What is up with the permissions level?</span></h3>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>
	 			<div style="line-height:2px;">&nbsp;</div>
	 				
 				<div class="blog_excerpt">
  					<p>
  						Chromemote uses a special type of plugin to communicate with Google TV. The Google Chrome Web store gives every Chrome extension using an NPAPI plugin this permissions level warning. The api plugin was built and developed by Google TV developers so it is safe.
  					</p>
  					
  					<?php  drawBackToTop(); ?>
 					
 				</div>
 				
 				
 				
 				
 			</div>
			
			
		</div>
		<div class="span4">
		
			<div style="display:inline-block;">
				
				<?php get_sidebar(); ?>	
			</div>	
		</div>
	</div>

</div>

<?php get_footer(); ?>