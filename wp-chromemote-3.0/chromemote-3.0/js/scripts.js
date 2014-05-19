var makeHomeResponsive = function() {
	
	
	var headerWrapper, headerCenterWrapper;  
    
    headerWrapper 		= $('#header-wrapper');
    headerCenterWrapper = $('#header-wrapper-center');
    
    var headerWidth = headerWrapper.width();
    var headerHeight= headerWrapper.height();
	
	if ( headerWidth > 960 )
    {//reset to defaults
    	var demoVideo = document.getElementById('demo_video');
		demoVideo.style.width = 405 + "px";
		demoVideo.style.height= 228 + "px";
		
		var socialBtnContainer = document.getElementById('social_links');
		socialBtnContainer.style.width= 325 + "px";
		
		document.getElementById('video_container').style.marginTop  = 0 + "px";
		var logoRightMargin = document.getElementById('logo_container');
		logoRightMargin.style.marginRight= 155 + "px";
    }
    
        
    if ( headerWidth < 920 && headerWidth > 730 )
    {
    	var demoVideo = document.getElementById('demo_video');
		demoVideo.style.width = ( headerWidth - 515 ) + "px";
		demoVideo.style.height= (228*( headerWidth - 515 ))/405 + "px";
		
		var socialBtnContainer = document.getElementById('social_links');
		socialBtnContainer.style.width= ( headerWidth - 580) + "px";

		document.getElementById('video_container').style.marginTop  = (920 - headerWidth)/4 + "px";
    }
    if ( headerWidth <= 730 && headerWidth > 300 )
    {
		document.getElementById('demo_video').style.width = ( headerWidth - 50 ) + "px";
		document.getElementById('demo_video').style.height= (228*( headerWidth - 50 ))/405 + "px";
				
		document.getElementById('social_links').style.width= ( headerWidth - 120) + "px";
		document.getElementById('video_container').style.marginLeft = 25 + "px";
		document.getElementById('video_container').style.marginTop  = 0 + "px";
		$('#install_container').width(headerWidth);
    }
    else if ( headerWidth >= 730 && headerWidth > 320 )
    {
	    document.getElementById('video_container').style.marginLeft = 0 + "px";
    	$('#install_container').width(490);
    }
    
    
    if( headerWidth <= 435) 
    {
       	document.getElementById('tour_button').style.paddingTop = 25 + "px";
       	document.getElementById('tour_button').style.paddingLeft= 45 + "px";
    }
    else
    {
	    document.getElementById('tour_button').style.paddingTop = 0 + "px";
	    document.getElementById('tour_button').style.paddingLeft= 0 + "px";
	}
    
    
    
    // 958 - 860 =  98
    // 920 - 515 = 405
    // 920 - 595 = 325
    // 920 - 692 = 228
    
    
    
    //Main Page Boxes
    
    
    if ( headerWidth >= 960 )
    {
		document.getElementById('support_box').style.width= 298 + "px";
		document.getElementById('support_box_headline').style.width= 297 + "px";
		
		document.getElementById('press_box').style.width= 298 + "px";
		document.getElementById('press_box_headline').style.width= 297 + "px";
		
		document.getElementById('blog_box').style.width= 298 + "px";
		document.getElementById('blog_box_headline').style.width= 297 + "px";
		
		document.getElementById('faq_box').style.width  = 458 + "px";
		document.getElementById('faq_box').style.height = 200 + "px";
		document.getElementById('faq_box_headline').style.width = 457 + "px";
		
		
		document.getElementById('updates_box').style.width= 458 + "px";
		document.getElementById('updates_box_headline').style.width= 457 + "px";

    
    }
    if ( headerWidth < 960 && headerWidth >= 660)
    {
    	var offSetInt = 22;
		
		document.getElementById('support_box').style.width= ( ( headerWidth/2 ) - offSetInt) + "px";
		document.getElementById('support_box_headline').style.width= ( ( headerWidth/2 ) - offSetInt-1) + "px";
		
		document.getElementById('press_box').style.width= ( ( headerWidth/2 ) - offSetInt) + "px";
		document.getElementById('press_box_headline').style.width= ( ( headerWidth/2 ) - offSetInt-1) + "px";
		
		document.getElementById('blog_box').style.width= ( ( headerWidth/2 ) - offSetInt) + "px";
		document.getElementById('blog_box_headline').style.width= ( ( headerWidth/2 ) - offSetInt-1) + "px";
		
		document.getElementById('faq_box').style.width= ( ( headerWidth/2 ) - offSetInt) + "px";
		document.getElementById('faq_box').style.height= 305 + "px";
		document.getElementById('faq_box_headline').style.width= ( ( headerWidth/2 ) - offSetInt-1) + "px";
		
		document.getElementById('updates_box').style.width= ( ( headerWidth ) - offSetInt) + "px";
		document.getElementById('updates_box_headline').style.width= ( ( headerWidth ) - offSetInt-1) + "px";

    
    }
    if ( headerWidth < 660 && headerWidth > 320)
    {
    	var offSetInt = 22;
		
		document.getElementById('support_box').style.width= ( ( headerWidth ) - offSetInt) + "px";
		document.getElementById('support_box_headline').style.width= ( ( headerWidth ) - offSetInt-1) + "px";
		
		document.getElementById('press_box').style.width= ( ( headerWidth ) - offSetInt) + "px";
		document.getElementById('press_box_headline').style.width= ( ( headerWidth ) - offSetInt-1) + "px";
		
		document.getElementById('blog_box').style.width= ( ( headerWidth ) - offSetInt) + "px";
		document.getElementById('blog_box_headline').style.width= ( ( headerWidth ) - offSetInt-1) + "px";
		
		document.getElementById('faq_box').style.width= ( ( headerWidth ) - offSetInt) + "px";
		document.getElementById('faq_box').style.height= 200 + "px";
		document.getElementById('faq_box_headline').style.width= ( ( headerWidth ) - offSetInt-1) + "px";
		
		document.getElementById('updates_box').style.width= ( ( headerWidth ) - offSetInt) + "px";
		document.getElementById('updates_box_headline').style.width= ( ( headerWidth ) - offSetInt-1) + "px";
    
    
    }
    if ( headerWidth <= 320 )
    {
		document.getElementById('support_box').style.width= 298 + "px";
		document.getElementById('support_box_headline').style.width= 297 + "px";
		
		document.getElementById('press_box').style.width= 298 + "px";
		document.getElementById('press_box_headline').style.width= 297 + "px";
		
		document.getElementById('blog_box').style.width= 298 + "px";
		document.getElementById('blog_box_headline').style.width= 297 + "px";
		
		document.getElementById('faq_box').style.width  = 298 + "px";
		document.getElementById('faq_box').style.height = 200 + "px";
		document.getElementById('faq_box_headline').style.width = 297 + "px";
		
		
		document.getElementById('updates_box').style.width= 298 + "px";
		document.getElementById('updates_box_headline').style.width= 297 + "px";
    }
    
    if( headerWidth >= 330)
    	document.getElementById('faq_box_title').style.fontSize = 22 + "px";
    else
	    document.getElementById('faq_box_title').style.fontSize = 20 + "px";
    
    
    
    
    //Grey Line Seperators
    if( headerWidth >= 960)
    {
    	document.getElementById('grey_line_seperator1').style.width = 420 + "px";
    	document.getElementById('grey_line_seperator2').style.width = 420 + "px";
    }
    if( headerWidth < 960 && headerWidth > 320)
    {
    	document.getElementById('grey_line_seperator1').style.width = ( headerWidth/2 )-70 + "px";
    	document.getElementById('grey_line_seperator2').style.width = ( headerWidth/2 )-70 + "px";
    }
    if( headerWidth <= 320)
    {
    	document.getElementById('grey_line_seperator1').style.width = ( 320/2 )-70 + "px";
    	document.getElementById('grey_line_seperator2').style.width = ( 320/2 )-70 + "px";
    }
	
	
	
};


var makeMainResponsive = function() {
	
	
	var headerWrapper = $('#header-wrapper');
	
    var headerWidth = headerWrapper.width();
	
	//Resize header logo width inorder to re-align main menu.
	if ( headerWidth < 960 && headerWidth > 775 )
    {
    	var logoRightMargin = document.getElementById('logo_container');
		logoRightMargin.style.marginRight= ( headerWidth - 800) + "px";
    }
	//White Line Seperators
    if( headerWidth >= 960)
    {    
    	document.getElementById('white_line_footer_seperator1').style.width = 380 + "px";
    	document.getElementById('white_line_footer_seperator2').style.width = 380 + "px";
    }
    if( headerWidth < 960 && headerWidth > 320)
    {
    	document.getElementById('white_line_footer_seperator1').style.width = ( headerWidth/2 )-110 + "px";
    	document.getElementById('white_line_footer_seperator2').style.width = ( headerWidth/2 )-110 + "px";
    }
    if( headerWidth <= 320)
    {	
    	document.getElementById('white_line_footer_seperator1').style.width = ( 320/2 )-112 + "px";
    	document.getElementById('white_line_footer_seperator2').style.width = ( 320/2 )-112 + "px";
    }
    
    
    var bodyWrapper	= $('#body_container');
    var bodyHeight	= bodyWrapper.height();
    
    if ( headerWidth > 960 )
    {
    	if(document.getElementById("blank_box"))
    		document.getElementById('blank_box').style.height= (bodyHeight-775) +"px";
    }
    else
    {
    	if(document.getElementById("blank_box"))
    		document.getElementById('blank_box').style.height= 0 +"px";
    }
};

 

 

