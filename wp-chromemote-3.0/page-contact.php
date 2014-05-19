<?php
/*
Template Name: Contact Page
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
					<h2 class="get_gtv_box_title" style="margin-top:10px; margin-bottom:8px;">Contact the Chromemote Team</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<div style="height:40px;display:block;overflow:hidden;">&nbsp;</div>
				
				<div class="blog_excerpt">
  					<p>
  						Please share your thoughts, opinions, and ideas for Chromemote. We would love to hear what you think. Share any feature requests, theme requests, or anything you would like to see in future releases of Chromemote. We are dedicated to building what the user wants, so don't be shy and tell us what we are missing. 
  						
  					</p>
 				</div>
 				<div class="line"></div>
				<div class="white_line"></div>

				<div class="blog_excerpt">
  					<p>
  						<?php the_content(); ?>
  					</p>
 				</div>
				
				
			</div>

				
								
			<?php endwhile; else: ?> 
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
			
			
						<div class="blog_box" id="faq_box">
				
				
				<a id="what-others-say" name="what-others-say"></a>
				<div class="blog_headline">					
					<h2 class="get_gtv_box_title" style="margin-top:10px; margin-bottom:8px;">What Others Are Saying About Chromemote</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<div style="height:40px;display:block;overflow:hidden;">&nbsp;</div>
				
				<div class="blog_excerpt" align="center">
  					<p>
  						
  						
  						
  						<br>
  			<div style="text-align:left; margin-bottom:30px;">
	  					<a href="https://plus.google.com/108434712734934507970/" target="_blank">
	  						<img src="https://www.google.com/s2/photos/profile/108434712734934507970" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>

    					<a href="https://plus.google.com/108434712734934507970/" class="twit-title-link" target="_blank">Rick Collamore</a>
    					<font color="#999999" size="2">+RickCollamore</font><br>
		    			<span>Works perfectly. My kids were watching TV and I found an image of some poop then "flung" it. We all got a good laugh out of it.</span>


			</div>
    		
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/Hidesquadron1" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=Hidesquadron1&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/Hidesquadron1" class="twit-title-link" target="_blank">James T. George</a>
    					<font color="#999999" size="2">@Hidesquadron1</font><br>
		    			<span>One of the best extensions ive seen for Google Chrome yet. When i got it running with my Costar I freaked.</span>
			

			</div>
			
			<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/LaurieDesAutels" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=LaurieDesAutels&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/LaurieDesAutels" class="twit-title-link" target="_blank">Laurie DesAutels</a>
    					<font color="#999999" size="2">@LaurieDesAutels</font><br>
		    			<span>I love this app! @mprogano: Check out Chromemote, the Google TV Remote for Google Chrome http://www.chromemote.com/  #GoogleTV</span>
			

			</div>
			
			
			<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/WinDroidGuy" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=WinDroidGuy&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/WinDroidGuy" class="twit-title-link" target="_blank">WinDroidGuy</a>
    					<font color="#999999" size="2">@WinDroidGuy</font><br>
		    			<span>@Chromemote to the rescue, I was too lazy to get up to find my TV remote and I was on my laptop, so I just used it to turn on my TV, thanks!</span>
			

			</div>
    					
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="https://plus.google.com/113058402452906905047/" target="_blank" target="_blank">
	  						<img src="https://www.google.com/s2/photos/profile/113058402452906905047" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="https://plus.google.com/113058402452906905047/" class="twit-title-link" target="_blank">Mike Kendall</a>
    					<font color="#999999" size="2">+MikeKendall</font><br>
		    			<span>	This seriously has to be one of the best extensions I've used on Chrome. I haven't touched my Google Remote on my Nexus 7, nor have I used my Logitech remote. 
								
								Thanks for creating something truly useful and enjoyable. 
								
								<a href="https://plus.google.com/s/chrome" target="_blank" class="twit-link">#chrome</a>   <a href="https://plus.google.com/s/googletv" target="_blank" class="twit-link">#googletv</a>   <a href="https://plus.google.com/s/gtv" target="_blank" class="twit-link">#gtv</a>  <br><br>
						</span>
			

			</div>    
		    		
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/justin_cohen" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=justin_cohen&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/justin_cohen" class="twit-title-link" target="_blank">Justin Cohen</a>
    					<font color="#999999" size="2">@justin_cohen</font><br>
		    			<span>@chromemote just got my Google TV & Chromemote back and running - love the apps addition!</span>
			

			</div>
    		
    			    	
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/instanttechnews" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=instanttechnews&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/instanttechnews" class="twit-title-link" target="_blank">technews</a>
    					<font color="#999999" size="2">@instanttechnews</font><br>
		    			<span>Second screens don't have to always be tablets: A new Chrome extension called <b>Chromemote</b> turns your computer's b... <a href="http://bit.ly/O4bElR" target="_blank" class="twit-link">http://bit.ly/O4bElR</a></span>
			

			</div>
    		
    			    	
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/GoogleTV" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=GoogleTV&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/GoogleTV" class="twit-title-link" target="_blank">Google TV Team</a>
    					<font color="#999999" size="2">@GoogleTV</font><br>
		    			<span>If you have a <a href="https://twitter.com/search/realtime?q=%23GoogleTV" target="_blank" class="twit-link">#GoogleTV</a> and use <a href="https://twitter.com/search/realtime?q=%23chrome" target="_blank" class="twit-link">#chrome</a>, get the <a href="http://www.twitter.com/chromemote" class="twit-link" target="_blank">@chromemote</a> extension. RT <a href="http://www.twitter.com/RobertDaleSmith" class="twit-link" target="_blank">@RobertDaleSmith</a> <a href="http://www.twitter.com/justin_cohen" class="twit-link" target="_blank">@justin_cohen</a> [very cool!]</span>
			

			</div>    	
    			    	
    			    	
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/gauntface" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=gauntface&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/gauntface" class="twit-title-link" target="_blank">Matt Gaunt</a>
    					<font color="#999999" size="2">@gauntface</font><br>
		    			<span>Google TV + Chrome + <b>Chromemote</b> = Awesome Sauce</span>
			

			</div>   
			
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/googletvdev" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=googletvdev&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/googletvdev" class="twit-title-link" target="_blank">Google TV Developers</a>
    					<font color="#999999" size="2">@googletvdev</font><br>
		    			<span>Check out how Robert developed <a href="https://twitter.com/search/realtime?q=%23chromemote" target="_blank" class="twit-link">#Chromemote</a> as Chrome remote for <a href="https://twitter.com/search/realtime?q=%23googletv" target="_blank" class="twit-link">#GoogleTV</a>: http://goo.gl/l8MNe after <a href="https://twitter.com/search/realtime?q=%23io12" target="_blank" class="twit-link">#io12</a> session on 2nd screen apps.</span>
			

			</div>   
			
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/JakesPlacePS" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=JakesPlacePS&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/JakesPlacePS" class="twit-title-link" target="_blank">Jake</a>
    					<font color="#999999" size="2">@JakesPlacePS</font><br>
		    			<span>Google TV Remote + Google Chrome = Chromemote. http://www.chromemote.com/</span>
			

			</div> 
			
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/DistortedLoop" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=DistortedLoop&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/DistortedLoop" class="twit-title-link" target="_blank">Dave</a>
    					<font color="#999999" size="2">@DistortedLoop</font><br>
		    			<span>Works well, about time someone did this: <a href="https://twitter.com/search/realtime?q=%23chromemote" target="_blank" class="twit-link">#Chromemote</a> as Chrome remote for <a href="https://twitter.com/search/realtime?q=%23googletv" target="_blank" class="twit-link">#GoogleTV</a>: http://goo.gl/l8MNe (TiVo's had similar for years.)</span>
			

			</div> 
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/AtomArcade" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=AtomArcade&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/AtomArcade" class="twit-title-link" target="_blank">Atom Arcade</a>
    					<font color="#999999" size="2">@AtomArcade</font><br>
		    			<span>Check out Chromemote, the Google TV Remote for Google Chrome http://www.chromemote.com/ <a href="https://twitter.com/search/realtime?q=%23googletv" target="_blank" class="twit-link">#GoogleTV</a> via <a href="http://www.twitter.com/chromemote" class="twit-link" target="_blank">@Chromemote</a></span>
			

			</div> 
    			  
    			  
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/welsinga" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=welsinga&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/welsinga" class="twit-title-link" target="_blank">Wiebe Elsinga</a>
    					<font color="#999999" size="2">@welsinga</font><br>
		    			<span><a href="https://twitter.com/search/realtime?q=%23chromemote" target="_blank" class="twit-link">#Chromemote</a> is also handy when you are developing apps for <a href="https://twitter.com/search/realtime?q=%23googletv" target="_blank" class="twit-link">#GoogleTV</a> http://www.chromemote.com</span>
			

			</div> 
			
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/sebacancinos" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=sebacancinos&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/sebacancinos" class="twit-title-link" target="_blank">Sebastian Cancinos</a>
    					<font color="#999999" size="2">@sebacancinos</font><br>
		    			<span><a href="http://www.twitter.com/chromemote" class="twit-link" target="_blank">@chromemote</a> I just tested it at home and I LOVE IT!! It's just what I needed</span>
			

			</div> 
			
			
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/WichitaScanner" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=WichitaScanner&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/WichitaScanner" class="twit-title-link" target="_blank">WichitaScanner</a>
    					<font color="#999999" size="2">@WichitaScanner</font><br>
		    			<span><a href="http://www.twitter.com/chromemote" class="twit-link" target="_blank">@chromemote</a> WOW, What a Great app you have made!!! Works faster than the Logitech remote!! You guys have a winner here. <a href="https://twitter.com/search/realtime?q=%23googletv" target="_blank" class="twit-link">#GoogleTV</a></span>
			

			</div> 
			
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/lifehacker" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=lifehacker&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/lifehacker" class="twit-title-link" target="_blank">Lifehacker</a>
    					<font color="#999999" size="2">@lifehacker</font><br>
		    			<span>Control your Google TV directly from Chrome: lifehac.kr/E5vW</span>
			

			</div> 
			
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/androinica" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=androinica&size=bigger" border="0" align="left" style="border-radius: 16px;-moz-border-radius: 16px;-webkit-border-radius: 16px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/androinica" class="twit-title-link" target="_blank">Androinica</a>
    					<font color="#999999" size="2">@androinica</font><br>
		    			<span>Chromemote turns your Chrome browser into a Google TV Remote [App Reviews] goo.gl/fb/R8UsR</span>
			

			</div> 
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/GoogleTV" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=GoogleTV&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/GoogleTV" class="twit-title-link" target="_blank">GoogleTV</a>
    					<font color="#999999" size="2">@GoogleTV</font><br>
		    			<span>Chromemote A great little Chrome extension for controlling your <a href="https://twitter.com/search/realtime?q=%23googletv" target="_blank" class="twit-link">#GoogleTV</a> lifehacker.com/5928415/ Via <a href="http://www.twitter.com/cwporter" class="twit-link" target="_blank">@cwporter</a> [awesome indeed]</span>
			

			</div>   
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/Brett_Freeman" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=Brett_Freeman&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/Brett_Freeman" class="twit-title-link" target="_blank">Brett Freeman</a>
    					<font color="#999999" size="2">@Brett_Freeman</font><br>
		    			<span>If you've got a Google TV unit, then you must install +Chromemote. Slick! bit.ly/OXPXCq</span>
			

			</div>    
    			  
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/3DayStartup" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=3DayStartup&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/3DayStartup" class="twit-title-link" target="_blank">3 Day Startup</a>
    					<font color="#999999" size="2">@3DayStartup</font><br>
		    			<span><a href="https://twitter.com/search/realtime?q=%23chromemote" target="_blank" class="twit-link">#Chromemote</a>, a GoogleTV Remote that lives in Chrome from <a href="http://www.twitter.com/3DSHouston" class="twit-link" target="_blank">@3DSHouston</a>, is making a big splash in the news lately! bit.ly/NUwKTe</span>
			

			</div>    
			
			
    		<div style="text-align:left; margin-bottom:30px;">
	  					<a href="http://www.twitter.com/V3RDICT" target="_blank">
	  						<img src="https://api.twitter.com/1/users/profile_image?screen_name=V3RDICT&size=bigger" border="0" align="left" style="border-radius: 8px;-moz-border-radius: 8px;-webkit-border-radius: 8px; margin-right:10px;" width="50" height="50">
	  					</a>
	  				
    					<a href="http://www.twitter.com/V3RDICT" class="twit-title-link" target="_blank">Jeremiah</a>
    					<font color="#999999" size="2">@V3RDICT</font><br>
		    			<span>Chromemote makes life with a GTV so much more convenient. Don't have to reach for my phone or remote to control my GTV box.</span>
			

			</div>    

			
    		<div style="">
	  			
	  			<a href="https://plus.google.com/s/chromemote" class="twit-link" target="_blank" style="float:left;">More on Google Plus...</a>
	  				
	  			<a href="https://twitter.com/search?q=chromemote" class="twit-link" target="_blank" style="float:right;">More on Twitter...</a>
				<br>
			</div>
  						
  						
  						
  						
  						
  					</p>
 				</div>
 								
				
			</div>
			
			
			
			
			
		</div>
		<div class="span4">
		
			<div style="display:inline-block;">
				
				<?php get_sidebar(); ?>	
			

				<?php include 'sidebar-social-connect.php' ?>
				
			</div>
			
					
		</div>
	</div>

</div>

<?php get_footer(); ?>