<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" lang="en">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# 
                  website: http://ogp.me/ns/website#">
	<?php 
    	$site_url = current_page_url();
    	
    	$echoedTitle = '';
    	
    	$thisPageTitle = wp_title('',FALSE);
    	if($thisPageTitle == '  Blog')
	    	$isNotBlogPage = false;
	    else
	    	$isNotBlogPage = true;
    	
    	$parentName = '';
    	foreach((get_the_category()) as $category) { 
    		$cat_id = $category->cat_ID;
			if($cat_id == '2')
				$parentName = 'Blog';
			if($cat_id == '3')
				$parentName = 'In The Media';
			if($cat_id == '4')
				$parentName = 'Changelog';
				
		}
		$cat_offeset = strlen($parentName);
		$cat_offeset = $cat_offeset + 3;
    
    	$pageCount = '|';
    	
    	if($paged != 0) 
    		$pageCount =  '| Page '.$paged.' |';
    	    	
    	$tit = wp_title($pageCount,FALSE,'right');
    	$cat_offeset = 50 - $cat_offeset;
		$echoedTitle = substr($tit, 0, $cat_offeset);
		if (strlen($tit) > $cat_offeset) $echoedTitle = $echoedTitle . "… | ";
		
		if($parentName != '' && $isNotBlogPage)
    		$echoedTitle = $echoedTitle . $parentName . ' | ';
    	
    	if(strcmp($site_url,"http://chromemote.com/") == 0)
   	    	$echoedTitle = 'Chromemote - The Google TV Remote Control for Chrome';
    	else
    	{
    		$echoedTitle = $echoedTitle . 'Chromemote.com'; 
    		if (strlen($echoedTitle) <= 40) $echoedTitle = $echoedTitle . ' - Google TV Remote for Chrome';
    	}
		
		
		
		$og_type = 'article';
		//if(strcmp($site_url,"http://chromemote.com/") == 0)
		//	$og_type = 'website';

		//if((strpos($site_url, 'http://chromemote.com/blog/') !== FALSE) ||
		//   (strpos($site_url, 'http://chromemote.com/in-the-media/') !== FALSE)   )
		//	$og_type = 'blog';
					
		
   	?>
   	
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/favicon.png">
	
	<meta charset="utf-8">
	
	<meta name="title" 		  content="<?php echo $echoedTitle ?>" />
	<meta name="copyright" 	  content="MoteLabs.com - 2012" />
	<meta name="email" 		  content="robert@motelabs.com" />
	<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    } echo ". Chromemote is an extension for the Google Chrome web browser that adds full remote control of any Google TV, directly from within the web browser itself.";
    ?>" />
    
	<meta name="viewport" content="width=320, width=device-width, initial-scale=1, maximum-scale=1" /> <!-- This will force the device viewport to maintain the correct scale -->
	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- This will remove the Safari web browsers address bar & bookmarks bar giving your web page a native appearance -->
	
	<meta property="fb:app_id" content="508653672520377" />
	<meta property="fb:admins" content="537257174" />  
	
	<meta property="og:title" content="<?php echo $echoedTitle ?>" />
	<!--
	<meta property="og:url" content="<?php echo $site_url; ?>" >
	<meta property="og:site_name" content="Chromemote.com - The Google TV Remote for Chrome" />
	
	<meta property="og:author" content="537257174" />
		-->
	<meta property="og:type" content="<?php echo $og_type; ?>" />
<meta property="og:image" content="http://chromemote.com/chromemote_og_default_logo.png" />


    <title><?php echo $echoedTitle;	?></title>
    
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


 	<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/bhcjclaangpnjgfllaoodflclpdfcegb">
	<link rel="alternate" type="application/rss+xml" title="Chromemote Blog (RSS 2.0)" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Chromemote Blog (ATOM)" href="<?php bloginfo('atom_url'); ?>" />
		
	<script>document.addEventListener("touchstart", function() {},false);</script> <!-- this will tell the iphone to enable active states on links --> 
	
	
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	
    <?php wp_head(); ?>
    

	<!--start of Offerchat js code-->
	<script type='text/javascript'>
		var ofc_key = '28c3b850cdcae6479a174753c57ae412';
		(function(){
			var oc = document.createElement('script'); oc.type = 'text/javascript';
			oc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'offerchat.com/offerchat_widget.min.js?r='+ Math.random();
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(oc, s);
		}());
	</script>
	<!--end of Offerchat js code-->
	
	
</head>

<body <?php body_class(); ?> id="body_container">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=389505511105424";
  			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

<div id="full_wrapper" class="full_wrapper">
	<!-- Top Header with logo and navigation menu-->
	<div id="header-wrapper">
				<div id="header-wrapper-center">
					
					<div id="header">
						<div id="logo_container">
							<a class="logo" href="<?php bloginfo('url');?>" ><img src="<?php bloginfo('template_directory');?>/images/logo.png" class=""></a>
						</div>
						<div id="header_menu_container">
							<ul id="header_menu_list" style="">
								<?php //wp_list_pages(array('title_li' => '', 'exclude' => 13'));
									$parent_pages_to_exclude = array(13,41,49,51,53,55,130,171,399,419,524);
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
								
								<!--	
									<li style="display:inline;padding: 15px;"><a href="index.html" id="header_menu_link" style="color:#ffffff;">Home</a></li>
									<li style="display:inline;padding: 15px;"><a href="index2.html" id="header_menu_link">Tour</a></li>
									<li style="display:inline;padding: 15px;"><a href="index2.html" id="header_menu_link">FAQ</a></li>
									<li style="display:inline;padding: 15px;"><a href="index2.html" id="header_menu_link">Get&nbsp;GTV</a></li>
									<li style="display:inline;padding: 15px;"><a href="index2.html" id="header_menu_link">Blog</a></li>
									<li style="display:inline;padding: 15px;"><a href="index2.html" id="header_menu_link">Support&nbsp;Us</a></li>
									
									<li style="display:inline;padding: 15px;vertical-align:middle;">
										<a href="" id="header_menu_link"><img src="<?php bloginfo('template_directory');?>/images/header-signup-button.png" class="action_button"  style="vertical-align:middle;margin-top:-4px;"></a>									
									</li>
								-->
								<li style="display:inline;padding: 15px;vertical-align:middle;">
									<button class="support_button_header" onclick="location.href='<?php bloginfo('url');?>/support-us'" >Support Us</button>
								</li>
								
									
									
									
									
							</ul>
						</div>
					</div>
				
				</div>
	</div>
	
	
<div id="content_body_area">
