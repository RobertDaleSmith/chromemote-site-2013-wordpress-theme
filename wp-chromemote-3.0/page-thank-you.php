<?php
/*
Template Name: Thank You Page
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
					<h2 class="get_gtv_box_title" style="margin-top:10px; margin-bottom:8px;">Thank You for contributing to Chromemote!</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<div style="height:40px;display:block;overflow:hidden;">&nbsp;</div>
				
				<div class="blog_excerpt">
  					<p>
  						Thank you so much for your contribution. User support and feedback are what built this project, so we rely heavily on our users to continue. You have taken the first step to help contribute to Chromemote's growth. Now be sure to follow us on Twitter, Facebook, and Google+. Also don't forget to spread the word by clicking the Tweet and Share buttons below. 
  					</p>
 				
				
				
				<table cellpadding="0" cellspacing="0" border="0" width="620">
   				
   					
   						<tr height="40" width="320"><td><h3>1.) Circle and +1 on Google Plus</h3></td></tr>
   						
   					
   					
   					
   						<tr width="320" align="center">
   							<td><br>
   								<div class="g-plus" data-href="//plus.google.com/107890677565458476428" data-rel="publisher"></div>
	   						</td>
   						</tr>


						<tr width="320"><td><h3>2.) Follow and Tweet on Twitter</h3></td></tr>
							

   						<tr width="320" align="center">
   							<td><br>
   								<a href="https://twitter.com/Chromemote" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Chromemote</a>
   								<br><br><br>
   								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.chromemote.com/" data-via="Chromemote" data-size="large">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								<br><br>
   								
   							</td>
   						</tr>
	
   						<tr width="320"><td><h3>3.) Like and Share on Facebook</h3></td></tr>
   						
   						<tr width="320" align="center">
   							<td><br>
   								<div class="fb-like" data-href="http://www.facebook.com/chromemote" data-send="true" data-width="250" data-show-faces="true" data-font="tahoma"></div>
   								
   								<br><br>
   								<div class="fb_share">
    								<a name="fb_share" type="button_count" share_url="http://www.chromemote.com/" href="http://www.facebook.com/sharer.php">Share</a>
    								<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
								</div>
							</td>
   						</tr>

   					
   				
   				</table>
   				
   				</div><!--div class="blog_excerpt" -->
				
   				
   				<br>
				<div class="line"></div>
				<div class="white_line"></div>
   				
   				<!-- Begin MailChimp Signup Form -->
				<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:#f9f9f9; clear:left; font:14px Helvetica,Arial,sans-serif; }
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup" style="color:#62626c;">
					<form action="http://chromemote.us6.list-manage.com/subscribe/post?u=b365df4c02f4e9d341229fc15&amp;id=06189b5c7b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<h3>4.) Subscribe to our mailing list</h3>
						<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
						<div class="mc-field-group">
							<label for="mce-FNAME">Full Name  <span class="asterisk">*</span>
							</label>
							<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
						</div>
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
							</label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>	
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</form>
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