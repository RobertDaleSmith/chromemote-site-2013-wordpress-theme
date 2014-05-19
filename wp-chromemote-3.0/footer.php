</div></div>
	<div id="foot">
		<div class="white_line"></div>
		<br>
		<div class="white_line_footer" id="white_line_footer_seperator1"></div>
			<p class="footer_box_title">Connect With Us</p>
		<div class="white_line_footer" id="white_line_footer_seperator2"></div>
		<div id="connect"><em>Tell us what </em><b>YOU</b><em> want! We&nbsp;want&nbsp;to&nbsp;hear&nbsp;from&nbsp;you!</em></div>
		
		<div id="connect_buttons_container">
		<!--
			<a href="" id="footer_connect_buttons"><img src="<?php bloginfo('template_directory');?>/images/footer_feedback_button.png" class="action_button"  style=""></a>
			<a href="" id="footer_connect_buttons"><img src="<?php bloginfo('template_directory');?>/images/footer_reportbug_button.png" class="action_button"  style=""></a>
			<a href="" id="footer_connect_buttons"><img src="<?php bloginfo('template_directory');?>/images/footer_contact_button.png" class="action_button"  style=""></a>
		-->
		
			<button class="google_tv_button" id="footer_connect_buttons" onclick="window.open('https://chrome.google.com/webstore/detail/chromemote-beta/bhcjclaangpnjgfllaoodflclpdfcegb/reviews');"><b>Leave Feedback</b></button>
			<button class="google_tv_button" id="footer_connect_buttons" onclick="window.open('https://chrome.google.com/webstore/support/bhcjclaangpnjgfllaoodflclpdfcegb?hl=en&gl=US#bug');"><b>Report a Bug</b></button>
			<button class="google_tv_button" id="footer_connect_buttons" onclick="location.href='<?php bloginfo('url');?>/contact'"><b>Contact</b></button>
			
		</div>
		
		<div id="social_links_footer_container">
			
			<div style="display:inline-block;">		
				<a href="http://www.chromemote.com/facebook" target="_blank" id="social_footer_links"><img src="<?php bloginfo('template_directory');?>/images/footer_social_facebook.png" class="social_icon_button"  style=""></a>
				<div id="footer_like_button">
					<fb:like href="http://www.facebook.com/chromemote/" send="false" layout="button_count" width="450" show_faces="true"></fb:like>
				</div>
			</div>
			<div style="display:inline-block;">
				<a href="http://www.chromemote.com/twitter/" target="_blank" id="social_footer_links"><img src="<?php bloginfo('template_directory');?>/images/footer_social_twitter.png" class="social_icon_button"  style=""></a>
				<div id="footer_follow_button">
					<iframe allowtransparency="true" frameborder="0" scrolling="no" src="https://platform.twitter.com/widgets/follow_button.html?screen_name=chromemote&show_count=true&show_screen_name=false" style="height: 20px; width: 88px;" ></iframe>
				</div>
			</div>
			<div style="display:inline-block;">
				<a href="https://plus.google.com/107890677565458476428" rel="publisher" target="_blank" id="social_footer_links"><img src="<?php bloginfo('template_directory');?>/images/footer_social_gplus.png" class="social_icon_button"  style=""></a>
				<div id="footer_plus_button">
					<g:plusone size="medium" href="https://plus.google.com/107890677565458476428"></g:plusone>
				</div>
			</div>
			
			
			
		</div>
		
		
		
		
		
	
	
	<div id="footer_menu_list_container">
		<div id="footer_menu_list_center" style="text-align:center;">
		
			<ul id="footer_menu_list">
			
				<?php 
					//wp_list_pages(array('title_li' => ''));
					$parent_pages_to_exclude = array(49,51,55,171);
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
		
		</div>
		
	</div>
			
	<div id="copyright_container">
		<div id="copyright_text">
			Copyright&nbsp;&copy;&nbsp;2012 <a href="http://www.motelabs.com/" class="copyright_link">Mote&nbsp;Labs</a>. All&nbsp;Rights&nbsp;Reserved.	
		</div>	
	</div>
	
	
<?php wp_footer(); ?>

<script>
	    				function installSuccess() {
	    					if (document.getElementById('extension-is-installed')) {
	    					
	    						if(document.getElementById("install_button"))
	    							document.getElementById("install_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow_heart.gif" align="left">&nbsp;&nbsp;&nbsp;UPDATED!</div>';
	    					
		    					if(document.getElementById("update_button"))
		    						document.getElementById("update_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow_heart.gif" align="left">&nbsp;&nbsp;&nbsp;UPDATED!</div>';	 
	    					
	    					}
	    					else {
	    						
	    						if(document.getElementById("install_button"))
	    							document.getElementById("install_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow_heart.gif" align="left">&nbsp;&nbsp;&nbsp;INSTALLED!</div>';

	    						if(document.getElementById("update_button"))
		    						document.getElementById("update_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow_heart.gif" align="left">&nbsp;&nbsp;&nbsp;INSTALLED!</div>';
	    					
	    					}
	    					
	    						   					
	    					setTimeout(function(){
	    						this.document.location.href = "http://www.chromemote.com/tipjar";
	    					
	    					},2500);
	    					
	    				}
	    				function installFail() {
	    					if (document.getElementById('extension-is-installed')) {
								
								if(document.getElementById("install_button"))
									document.getElementById("install_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.png" align="left">&nbsp;&nbsp;&nbsp;INSTALLED!</div>';
								
								if(document.getElementById("update_button"))
									document.getElementById("update_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.png" align="left">&nbsp;&nbsp;&nbsp;UPDATE NOW!</div>';
														
							}
							else {
	    						if(document.getElementById("install_button"))
		    						document.getElementById("install_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.png" align="left">&nbsp;&nbsp;&nbsp;INSTALL FREE!</div>';
		    						
		    					if(document.getElementById("update_button"))
		    						document.getElementById("update_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.png" align="left">&nbsp;&nbsp;&nbsp;UPDATE NOW!</div>';
		    						
	    					}
	    					
	    				}
	    				
	    				function inLineInstall() {
	    					chrome.webstore.install("https://chrome.google.com/webstore/detail/bhcjclaangpnjgfllaoodflclpdfcegb", installSuccess, installFail);
	    					
	    					if (document.getElementById('extension-is-installed')) {
								if(document.getElementById("install_button"))
									document.getElementById("install_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.gif" align="left">&nbsp;&nbsp;&nbsp;UPDATING...</div>';
								
								if(document.getElementById("update_button"))
									document.getElementById("update_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.gif" align="left">&nbsp;&nbsp;&nbsp;UPDATING...</div>';
														
							}
							else {
	    						if(document.getElementById("install_button"))
	    							document.getElementById("install_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.gif" align="left">&nbsp;&nbsp;&nbsp;INSTALLING...</div>';
	    							
	    						if(document.getElementById("update_button"))
	    							document.getElementById("update_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.gif" align="left">&nbsp;&nbsp;&nbsp;INSTALLING...</div>';
	    					}

	    				}
    					if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
    						if(document.getElementById("install_button"))
    							document.getElementById("install_button").onclick = inLineInstall;
    						
    						if(document.getElementById("update_button"))
    							document.getElementById("update_button").onclick = inLineInstall;
    							
  						}
  						else {
  							//onclick="location.href='<?php bloginfo('url');?>/support-us'"
    						//document.getElementById("install_button").onclick = "window.open('https://chrome.google.com/webstore/detail/bhcjclaangpnjgfllaoodflclpdfcegb','_blank');";
    						
  						}  			
  						
  						
  								
    				</script>

    				
    				<script>
    				window.onload = function() {
    					
						if (document.getElementById('extension-is-installed')) {
						
							if(document.getElementById("install_button"))
								document.getElementById("install_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.png" align="left">&nbsp;&nbsp;&nbsp;INSTALLED!</div>';
							
							if(document.getElementById("update_button"))
								document.getElementById("update_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow.png" align="left">&nbsp;&nbsp;&nbsp;UPDATE NOW!</div>';
							
												
						}
					}
					</script>
    					
					<script>
						if (chrome.app.isInstalled) {
						
							if(document.getElementById("install_button"))
								document.getElementById("install_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow_heart.gif" align="left">&nbsp;&nbsp;&nbsp;INSTALLED!</div>';
								
							if(document.getElementById("update_button"))
								document.getElementById("update_button").innerHTML= '<div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/install_button_arrow_heart.gif" align="left">&nbsp;&nbsp;&nbsp;UPDATED!</div>';
								
						}
					</script>
</div>
<a href="https://plus.google.com/111291216195697323432?rel=author"></a>
</body>

</html>
