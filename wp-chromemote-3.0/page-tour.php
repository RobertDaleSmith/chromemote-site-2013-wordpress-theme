<?php
/*
Template Name: Tour Page
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
					<h2 class="get_gtv_box_title" style="margin-top:10px; margin-bottom:8px;">Tour Chromemote</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<div style="height:40px;display:block;overflow:hidden;">&nbsp;</div>
				
				<div class="blog_excerpt">
  					<p>
  				
  				
  				
  				
  				


    			<div class="about_Chromemote_Panel_Body"> 
    			
    				<strong>Chromemote</strong></span>&nbsp;[kr<em>ohm</em>-<strong>moht</strong>]&nbsp;<a href="http://content.dictionary.com/help/dictionary/luna/Spell_pron_key.html" target="_blank"><img alt="" src="<?php bloginfo('template_directory');?>/images/pronounce_more_info.png" style="width: 15px; height: 15px; " /></a>&nbsp;<span audio="<?php bloginfo('template_directory');?>/images/pronounce_chromemote.mp3" default="<?php bloginfo('template_directory');?>/images/pronounce_chromemote.mp3"><embed align="texttop" flashvars="soundUrl=<?php bloginfo('template_directory');?>/images/pronounce_chromemote.mp3" height="15" id="speaker" loop="false" menu="false" quality="high" salign="t" src="<?php bloginfo('template_directory');?>/images/speaker.swf" type="application/x-shockwave-flash" width="17" wmode="transparent"></embed></span>&nbsp;is short for Chrome Remote. Chromemote is an extension for the Google Chrome web browser that adds full remote control of any Google TV, directly from within the web browser itself. <br><br>This means that Mac OSX, Windows, and Linux based computers running the Chrome web browser can now remotely control and interact with any Google TV on the same local area network. 
    			
    				
    			</div><br>
    			
				<center><img src="<?php bloginfo('template_directory');?>/images/about-ui-top-half.png">

    			<div class="about_Chromemote_Panel_Title">Smart TV Remote for Laptops</div><br></center>
    			
    			<div class="about_Chromemote_Panel_Body">
    			
    				Chromemote adds a simple universal remote interface to the Chrome web browser which gives you complete control of Google TV and your home entertainment center from your computer. <br><br>Chromemote eliminates the need for you to have to reach for another remote control device while you are watching television and surfing the internet on your laptop.    				
    				
    				    				
    			</div><br>
    			    	
    			    	
    			    	
    			    	
    			    	
    			<center><img src="<?php bloginfo('template_directory');?>/images/about-notebook-to-tv-2.png">
				
    			<div class="about_Chromemote_Panel_Title">Fling Web Content to the TV</div><br></center>
    			
    			<div class="about_Chromemote_Panel_Body">
    			
    				With Chromemote you can <em>fling</em> YouTube videos and other web links to open instantly on your TV. With a single button press you can launch the web page from the currently opened browser tab on your computer's web browser, to open on the television screen. 
    				<br><br>
    				As well as being able to fling websites and videos to the television, you can also launch your favorite Google TV applications directly from your computer.
    				<br><br>
    				Now with Chromemote you can also share your computer's keyboard and mouse input with Google TV. This makes it very easy to type and control the cursor on the television.
    				    			
    			</div><br>

    			
    			
    			
    			
	
    			<center><img src="<?php bloginfo('template_directory');?>/images/about-fling-image-to-tv.png">
    			
    			<div class="about_Chromemote_Panel_Title">Right Click & Fling Content</div><br></center>
    			
    			<div class="about_Chromemote_Panel_Body"> 
    			
    				Chromemote also makes it easier to fling web content from your laptop to your TV with context menus. Simply right click on images, web pages, links, or selected text, and then click Fling to Google TV. Find the content you want to watch on your laptop, and then fling it to your TV instantly with Chromemote.
    			
    				
    			</div><br>
    			
	

	
		
				<center><img src="<?php bloginfo('template_directory');?>/images/about-pin-full.png">
	
	    		<div class="about_Chromemote_Panel_Title">User Feature Requests</div><br></center>
	    		
    			<div class="about_Chromemote_Panel_Body">
    			
    				Many users have requested the ability to keep the Chromemote remote pinned open, and we have answered. In our most recent release we added to Chromemote the ability to pin to a tab within the browser.<br><br>Do you see something missing from Chromemote that your would like to see? Then feel free to share and we will do our best to make it happen.
    				    			
    			</div>
    			    			
		    	
    			
    			
		      				
  				
  				
  				
  				
  				
  				
  				
  				
  				
  				
  				
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