<?php
/*
Template Name: Get GTV Page
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
					<h2 class="get_gtv_box_title" style="margin-top:10px; margin-bottom:8px;">Get a Google TV</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<div style="height:40px;display:block;overflow:hidden;">&nbsp;</div>
				
				<div class="blog_excerpt">
  					<p>
  						Google TV software comes built right into some TVs, but if you don?t want to buy a new TV you can simply buy a set-top box that plugs right into any HDTV and gives you exactly the same functionality. There are no recurring fees and it even updates itself automatically. 
  					</p>
 				</div>
				
				<div align="center">
				
   					<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=chromemote-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B008BDBPTS" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
					&nbsp;
					<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=chromemote-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B009IBX7Z2" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
					&nbsp;
					<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=chromemote-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B009VXUFLG" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
					&nbsp;
					<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=chromemote-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B00AM0ESC4" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
					
				</div>
				<br>
				<div align="center">
				
   					<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=chromemote-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B0074WVYWA" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
   					&nbsp;
   					<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=chromemote-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B0074WVYNO" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
					&nbsp;
					<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=chromemote-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B0040QE98O" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
					&nbsp;
					<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=chromemote-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B004D4917W" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>

  					
   				</div>
				<br>
				<div align="center">
				
   					<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=chromemote-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B00CBYYKKY" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe> 	
                    				
   				</div>
				<br><br>
				
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