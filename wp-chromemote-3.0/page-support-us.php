<?php
/*
Template Name: Support Us Page
*/
?>


<style>
          #main {
            width: 570px;  /*750x450 guaranteed for !small=true */
          }

          /* Font sizes */
          html {
            
          }
          #main, #main table {
            font-size: 100%;
          }
          h2 {
            font-size: 170%;
          }
          .emphasis {
            font-size: 157%;
          }
          .instructions, #payout {
            font-size: 93%;
          }
          #not-paying {
            background-color: #ff8;
            margin: 5px;
            padding: 5px;
            border: 1px solid #bb4;
          }
          .big-label {
            font-size: 110%;
            top: 10px;
          }

          body {
            margin: 0; /* so it bumps right against the iframe container */
          }
          #main {
            margin: auto; /* if we're in a wider window, center us. */
          }
          h2#title {
          	color: #62626c;
          	font-weight: bold;
            margin-top: 0px; /* h2 by default puts our title way too low */
            margin-bottom: 15px; /* leave some space before the pitch */
            margin-left: -32px;
          }
          .call-to-action {
            font-size: 18px; /* absolute size, so it stays constant relative to buttons */
            color: green;
          }
          .caption {
            font-size: small; /* absolute size, so it stays constant relative to photo */
            font-style: italic;
          }
          #pay-controls {
            margin-top: 1em;
          }
          #a-table {
            /* Highlight the slider a bit; doesn't work in Safari (on Windows at least) */
            background: -webkit-radial-gradient(58% 36px, rgba(252,252,252,255), rgba(252,252,252,0) 200px);
          }
          #slider {
            width: 490px;
            height: 10px;
            
            -webkit-appearance: none !important; /* must do this to then style it */
            
            /* IE10 Consumer Preview */ 
background-image: -ms-linear-gradient(left, #FFAAAA 0%, #AAFFAA 100%);

/* Mozilla Firefox */ 
background-image: -moz-linear-gradient(left, #FFAAAA 0%, #AAFFAA 100%);

/* Opera */ 
background-image: -o-linear-gradient(left, #FFAAAA 0%, #AAFFAA 100%);

/* Webkit (Safari/Chrome 10) */ 
background-image: -webkit-gradient(linear, left top, right top, color-stop(0, #FFAAAA), color-stop(1, #AAFFAA));

/* Webkit (Chrome 11+) */ 
background-image: -webkit-linear-gradient(left, #FFAAAA 0%, #AAFFAA 100%);

/* W3C Markup, IE10 Release Preview */ 
background-image: linear-gradient(to right, #FFAAAA 0%, #AAFFAA 100%);
            
            
            
          }
          #amt-text {
            margin-left: -5px; /* hack to center it on the slider thumb pretty decently */
            padding-top: 5px; /* otherwise it touches the thumb */
          }
          .instructions {
            font-style: italic;
            color: gray;
          }
          #gift .why {
            display:none; /* they don't show till the slider reaches their level */
            margin-right: -4px; /* so periods turn into ellipses */
          }
          #amt-text-row {
            font-size: medium; /* explicitly, regardless of the rest of the page */
          }
        </style>
        

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
				<a name="tip-jar" id="tip-jar"></a>
				
				
				<div class="blog_headline">					
					<h2 class="get_gtv_box_title" style="margin-top:10px; margin-bottom:8px;">Support us by contributing to the Tip Jar!</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<div style="height:50px;display:block;overflow:hidden;">&nbsp;</div>
				
				<div class="blog_excerpt">
  					<p>
  						
  						
  						
  						
  		<div id="main">
          <div id="pitch" style="align:left;">

            <div id="photo" style="float:right; margin-left: 10px">
              <a href="#" id="showme"><img src="<?php bloginfo('template_directory');?>/images/startupweekend_beaker_winner.jpeg" style="border-radius:5px; width:275px; border:0px;" border="0"></a><br/>
              <span class="caption">Robert developing Chromemote</span>
            </div>

            <h2 id="title">The Honor System</h2>
            <!--
            <p>
            Hi, I'm Robert, the developer of Chromemote!  That's me in the picture.
            </p>

            <p>
            Chromemote is "honor-ware".  This means that you <b>pay what you can afford</b> for Chromemote,
            and there's no enforcement except <b>the honor system</b>.  I am trusting you.<br/>
            In fact, I <b>quit my job</b> to work on Chromemote, so I'm trusting you a <i>lot</i> to help me to continue to be able to make progress.
            </p>

            <p>
            I made these <a href="#" id="showme" style="color:blue">before and after shots</a> to help you see how great Chromemote is!
            </p>

            <p>
            Please pay as much as you can.  Am I na&#xEF;ve for trusting you to pay?  I guess we'll find out :)
            </p>-->
            
            
            
            <p>
            	Hello, I'm Robert, the developer and founder behind Chromemote.
			</p>
			
			<br>
			
			<p>
				The Chromemote beta is honor-ware, which means that you only have to pay what you can afford and what you think it is worth. The only enforcement is the honor system and I am relying on you to make this project possible. 
			</p>
			
			<br>
			
			<p>
				I have walked away from internships and quit jobs to allow me to focus and build Chromemote. I'm betting on you to help make it possible for me to continue to make progress.
            </p>
			
			<br>
			
			<p>
				Please pay as much as you can afford and what you think it is worth to you. If you find Chromemote useful and would like to see more progress, then please consider making a contribution.
            </p>
            
            <br>
            
			<p>	
				Remember Chromemote is what it is now because of the contributing users. 
			</p>
			
            <script>
              $(function() {
                $("#showme").click(function(e) {
                  // Show a centered popup with before and after screenshots.
 
                  // Get coords to center the popup correctly
                  var docRect = { 
                    width: $(document).width(), height: $(document).height(),
                    left: e.screenX - e.pageX, top: e.screenY - e.pageY,
                  };
                  var winRect = { width: 600, height: 400 };
                  winRect.left = docRect.left + docRect.width/2 - winRect.width/2;
                  winRect.top =  docRect.top  + docRect.height/2 - winRect.height/2;

                  // Safari bug makes windows too tall for some reason.
                  if (FLAVOR == "S")
                    winRect.height -= 50;

                  // width and height are of document, but left and top are of window.
                  // Hack at left and top to make it look better (ugh)
                  winRect.left -= 8; winRect.top -= 50;

                  var url = 'startupweekend_beaker_winner.jpeg';
                  var details = 'status=0,toolbar=0,location=0,scrollbars=0';
                  for (var k in winRect) {
                    details += "," + k + "=" + winRect[k];
                  }
                  window.open(url, 'compare', details);
                });
              });
            </script>
          </div>

			
          <div id="pay-controls">
            <table id="slider-table">
              <tr>
                <td></td>
                <td><!--div class="instructions">Slide the slider to the right to see how I'll thank you.</div>-->
              </tr>
              <tr>
                <td class="big-label">Amount:</td>
                <td style="vertical-align: bottom; height:0px;">
                  <input id="slider" type="range" min=0 max=100 value=27 /><br/>
                </td>
              </tr>
              <tr>
                <td></td><td id="amt-text-row"><div id="amt-text">$<span id="amt-text-num"></span></div></td>
              </tr>
            </table>
            <div id="payout">
              <div id="gift">
               
                <!--span class="big-label">How I'll thank you:</span>
                <span>I'll</span>
                <span class="why" min="2">send you a thank-you note from the bottom of my heart</span>
                <span class="why" min="30">... and I'll immortalize your name by adding it to the sponsors page</span>
                <span class="why" min="50">... and I'll make your feature request happen asap</span>
                <span class="why" min="100">... and I'll call you up to say thank you personally</span>
                <span class="why" min="200">... and I'll design a custom theme for Chromemote to your specifications</span>
                <span class="why" min="300">... and I'll list you as a premium sponsor on our website and credits</span>
                <span class="why" min="400">... and I'll physically mail you a super-fancy piece of wall art
                                                saying you/your friends/your meetup group/etc make Chromemote happen</span>-->
                . 
              </div>
              
              <div id="not-paying" style="display:none">
                I depend on the support of Chromemote users for my income (yes, I am crazy.)<br/><br/>
                If you can afford to pay to help keep me afloat, then please contribute what you can..<br/>
                If you can't afford to pay anything, then feel free to continue to use Chromemote!<br/><br/>
                You can close this page and continue to use Chromemote without paying.
              </div>
            </div>
            <br/>
            <div id="payment-types" align="top">
              <span style="vertical-align:top; text-align:justify;" class="call-to-action">Choose how to leave a tip:</span>
							
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
              <span id="paypal-xclick-form">
                <form id="paypal-form" style="display: inline" action="https://www.paypal.com/cgi-bin/webscr"
                  method="post" name="_xclick" target="_blank">
                  <input type="hidden" name="cmd" value="_donations">
                  <input type="hidden" name="business" value="donate@chromemote.com">
                  <input type="hidden" name="item_name" value="Chromemote Tip Jar Contribution">
                  <input type="hidden" name="item_number" id="tracking-input" >
                  <input type="hidden" name="amount" id="amount-input">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="no_note" value="0">
                  <input type="hidden" name="return" value="http://www.chromemote.com/tipjar/thank-you/?src=paypal">
                  <input type="image" style="vertical-align: top" id="paypal-xclick-button" src="<?php bloginfo('template_directory');?>/images/paypal-xclick.png"/>
                  
			      <input type="hidden" name="cbt" value="Go Back To The Site" />
        		  <input type="hidden" name="no_shipping" value="1" />

                  
                  
                </form>
              </span>
              
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <span id="paypal-xclick-form2">
			  		<form id="paypal-form2" style="display: inline" action="https://www.paypal.com/cgi-bin/webscr" method="post" name="_xclick" target="_blank">
						<input type="hidden" name="cmd" value="_xclick-subscriptions">
						<input type="hidden" name="business" value="donate@chromemote.com">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="no_shipping" value="1">
						<input type="hidden" name="item_name" value="Chromemote Tip Jar Recurring Contribution">
                  		<input type="hidden" name="item_number" id="tracking-input" >
						<input type="hidden" name="a3">
						<input type="hidden" name="p3" value="1"> 
						<input type="hidden" name="t3" value="M">
						<input type="hidden" name="src" value="1">
						<input type="hidden" name="sra" value="1">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
			  </span>
				<br><br>
				<div style="width:236px;display:inline-block;">&nbsp;</div>
              				
				<form style="display:inline" action="https://authorize.payments.amazon.com/pba/paypipeline" method="post" id="amazon-form" target="_blank">
                <input type="hidden" name="returnUrl" value="http://www.chromemote.com/tipjar/thank-you/" >
				<input type="hidden" name="processImmediate" value="1" >
				<input type="hidden" name="accessKey" value="11SEM03K88SD016FS1G2" >
				<input type="hidden" name="signatureMethod" value="HmacSHA256" >
				<input type="hidden" name="collectShippingAddress" value="0" >
				<input type="hidden" name="isDonationWidget" value="0" >
				<input type="hidden" name="amazonPaymentsAccountId" value="NCCKQXLFMFNN424PN3NA638ZMIM15A49RJK85N" >
				<input type="hidden" name="cobrandingStyle" value="logo" >
				<input type="hidden" name="immediateReturn" value="1" >
				<input type="hidden" name="amount">
				<input type="hidden" name="description" value="Chromemote Tip Jar Contribution" >
				<input type="hidden" name="abandonUrl" value="http://www.chromemote.com/tipjar/" >
				<input type="hidden" name="signatureVersion" value="2" >
				<input type="hidden" name="signature">
				<input type="hidden" name="referenceId">
                <input type="image" src="<?php bloginfo('template_directory');?>/images/amazon_paynow.gif" border="0">
                <input type="hidden" name="signatureVersion" value="2" >
              </form>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  
              <form style="display: inline" action="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/277382027984316?integration=supportgadget-blogger" 
                    method="post" id="google-form" name="BB_BuyButtonForm" target="_blank">
                <input name="item_name_1" type="hidden" value="Chromemote Tip Jar Contribution"/>
                <input name="item_description_1" type="hidden" value="Support to help further Chromemote development."/>
                <input name="shopping-cart.merchant-private-data" type="hidden" />
                <input name="item_quantity_1" type="hidden" value="1"/>
                <input name="item_price_1" type="hidden" />
                <input name="item_currency_1" type="hidden" value="USD"/>
                <input name="_charset_" type="hidden" value="utf-8"/>
                <input name="continue_shopping_url" type="hidden" value="http://www.chromemote.com/tipjar/thank-you/"> 
                <input type="image" align=top src="https://checkout.google.com/buttons/support.gif?merchant_id=277382027984316&w=130&h=50&style=trans&variant=text" />
              </form>

			

				
				
				
            </div> <!-- payment-types -->
          </div> <!-- pay-controls -->

        </div> <!-- main -->
  						
  						
  						
  						
  						
  						
  					</p>
 				</div>
				
				
				
			</div>

			<div class="blog_box" id="faq_box">
			<a name="our-story" id="our-story"></a>				
				
				
				<div class="blog_headline">					
					<h2 class="get_gtv_box_title" style="margin-top:10px; margin-bottom:8px;">Our Story</h2>
				</div>
				<div class="line"></div>
				<div class="white_line"></div>

				
				<div style="height:50px;display:block;overflow:hidden;">&nbsp;</div>
				
				<div class="blog_excerpt">
  					
  					
  					
  					
  					<div style="text-align:justify;">
   				<img src="<?php bloginfo('template_directory');?>/images/settings_about_dev2.png" style="padding-right:20px;" align="left"> &nbsp;&nbsp;Hello, My name is Robert (<a href="http://www.twitter.com/RobertDaleSmith" class="faq-link2" target="_blank">@RobertDaleSmith</a>), the creator of Chromemote. This all started in late January 2012 with a crazy dream I had where I was able to control everything through a smart TV. Immediately after waking from that dream I got to work to see what was possible. 

<br><br>
   				&nbsp;&nbsp;It wasn't long before I realized I could program IR commands from any remote control into my Google TV.  I then set it up to control my bedroom remote control dimmer light switch, an air conditioner unit, a TV, and even an Apple TV. With Google TV I can control everything from the single remote/keyboard that came with the Google TV.

<br><br>
   				&nbsp;&nbsp;I then ran into a problem. I am almost always on my desktop computer or laptop computer when I am watching TV, and it became a pain to have multiple keyboards. I thought that is was ridiculous that I could not use a computer to control a modern smart TV. I then set out with the mission to develop a port of the Google TV Remote App for Android to a Google Chrome extension.
<br><img src="<?php bloginfo('template_directory');?>/images/3-day-startup-3ds.png" style="padding-left:20px;" align="right">

<br>   				&nbsp;&nbsp;While developing the extension I received an email from the university about an event called <a href="http://www.3DayStartup.org/" target="_blank" class="faq-link2">3DayStartup</a> coming up at my school. I was really passionate about the idea I was developing so I took a chance and submitted an application. I was one of forty student selected to participate in the University of Houston's first ever <a href="http://www.3DayStartup.org/" target="_blank" class="faq-link2">3DayStartup</a> event in April. During the event I pitched Chromemote and was able to take it all the way to the final pitches. 

<br><br>
   				&nbsp;&nbsp;Following the event I continued to work on building a working prototype. I decided for the summer break between semesters, I was not going to stop working on Chromemote until I made the vision a reality. I quit my job and didn't sign up for any summer courses. I launched a startup around Chromemote and started finding out if this was something that anybody actually wanted. By mid-July I had a working beta version ready to launch to the world. 

<br><br>
   				&nbsp;&nbsp;The response so far has been great and I really appreciate everyone's support and donations through this journey to bridge the gap between the devices we use most often and smart TVs. There is so much more to come in the near future!

   				
   				
   				
   				<br><br>
   				
   				<p style="text-align:center;">
   					<button class="tip_button" id="tip_button" onclick="window.location.href='#tip-jar';" ><div style="display:inline-block; vertical-align:top; line-height:21px; margin-left:-9px;"><img src="<?php bloginfo('template_directory');?>/images/tip_jar_love_heart.png" align="left">&nbsp;&nbsp;&nbsp;TIP JAR!</div></button>
   				</p>
   				
   				
   			</div>

  					
  					
  					
  					
  					
  				</div>
			</div>	
					
					
					
					
					
					
					
								
			<?php endwhile; else: ?> 
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
			
		</div>
		<div class="span4">
		
			<div style="display:inline-block;">
				<?php $sideBlogCount = 5; include 'sidebar-tipjar.php'; ?>
				<?php //get_sidebar(); ?>	
			</div>		
		</div>
	</div>

</div>
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol ) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>

var paymentTracking = function() {

            	var timestampYear  = new Date().getUTCFullYear();
            	var timestampMonth = new Date().getUTCMonth();
            	var timestampDay   = new Date().getUTCDate();
            	var timestampHour  = new Date().getUTCHours();
            	var timestampMin   = new Date().getUTCMinutes();
            	var timestampSec   = new Date().getUTCSeconds();
            	var timestampMil   = new Date().getUTCMilliseconds();
            	
            	var timestamp = "" + timestampYear + timestampMonth + timestampDay + timestampHour + timestampMin + timestampSec + timestampMil;
            	
            	//alert(timestamp);
            	var val = $("#slider").val();
            	var dollars = Math.min(Math.pow(val/5, 2) + 5, 400);
            	
            	if (val == 0) dollars = 0;
    	        var roundTo = (dollars <= 10 ? 1 : dollars <= 150 ? 5 : 25);
	            dollars = Math.floor(dollars / roundTo) * roundTo;
	            
            	var amtString = dollars + ".00";
            	
            	//alert(amtString);
            	
            	var tracking = "CMTJ01";
            	var pageTracker = _gat._getTracker("UA-34201638-1");
            	try{
  					
  					pageTracker._trackPageview();
  					pageTracker._addTrans(
    				timestamp,            // transaction ID - required
   				   	"Chromemote",  // affiliation or store name
      				amtString,           // total - required
      				"0.00",            // tax
      				"0.00"//,           // shipping
      				//"San Jose",        // city
      				//"California",      // state or province
      				//"USA"              // country
    				);


   					// add item might be called for every item in the shopping cart
   					// where your ecommerce engine loops through each item in the cart and
   					// prints out _addItem for each 
   					pageTracker._addItem(
   				   	"1234",           // transaction ID - necessary to associate item with transaction
   				   	tracking,           // SKU/code - required
   				   	"Tip Jar",        // product name
   				   	amtString,   // category or variation
   				   	amtString,        // unit price - required
   				   	"1"               // quantity - required
   				);

   				pageTracker._trackTrans(); //submits transaction to the Analytics servers
				} catch(err) { }
            	pageTracker = _gat._getTracker("UA-30458910-1");
            	try{
  					
  					pageTracker._trackPageview();
  					pageTracker._addTrans(
    				timestamp,            // transaction ID - required
   				   	"Chromemote",  			// affiliation or store name
      				amtString,           // total - required
      				"0.00",            // tax
      				"0.00"//,           // shipping
      				//"San Jose",        // city
      				//"California",      // state or province
      				//"USA"              // country
    				);


   					// add item might be called for every item in the shopping cart
   					// where your ecommerce engine loops through each item in the cart and
   					// prints out _addItem for each 
   					pageTracker._addItem(
   				   	"1234",           // transaction ID - necessary to associate item with transaction
   				   	tracking,           // SKU/code - required
   				   	"Tip Jar",        // product name
   				   	amtString,   // category or variation
   				   	amtString,        // unit price - required
   				   	"1"               // quantity - required
   				);

   				pageTracker._trackTrans(); //submits transaction to the Analytics servers
				} catch(err) { }
            	
            	
            };


          $(function() {

            
            function recordTracking() {
              var tracking = "CMTJ01";
              $('#google-form [name="shopping-cart.merchant-private-data"]').val(tracking);
              $('#paypal-form [name="item_number"]').val(tracking);
              $('#amazon-form [name="referenceId"]').val(tracking);
              
                
              
            };
            recordTracking();
            
            
            // Update the slider UI and maybe plead with the user not to pay $0
            function onSliderChange() {
              var zero = ($("#slider").val() == 0);
              $("#not-paying").toggle(zero);
              $("#payment-types").toggle(!zero);
              $("#gift").toggle(!zero);

              updateAmountFromSlider();
            }
            // On slider change, adjust printed dollar value and position,
            // and update gift list
            function updateAmountFromSlider() {
              var here = $("#main");
              var val = $("#slider").val();
              var offset = val / 100 * ($("#slider").width() - 10);

              // Increasing speed from $2 to $400, but allowing $0
              var dollars = Math.min(Math.pow(val/5, 2) + 5, 400);
              if (val == 0) dollars = 0;

              var roundTo = (dollars <= 10 ? 1 : dollars <= 150 ? 5 : 25);
              dollars = Math.floor(dollars / roundTo) * roundTo;
              here.find('#amt-text').css({"padding-left": offset});
              here.find('#amt-text-num').text(dollars);

              here.find(".why").each(function(el) {
                $(this).toggle($(this).attr("min") <= dollars);
              });

              var amtString = dollars + ".00";
              $('#google-form [name="item_price_1"]').val(amtString);
              $('#paypal-form [name="amount"]').val(amtString);
              $('#paypal-form2 [name="a3"]').val(amtString);
              $('#amazon-form [name="amount"]').val("USD " + dollars);
              
              var amazonSig = "";
              if(dollars == 5)
              	amazonSig = "JkIUpyRzLvBgXo0ZoQudkYmmCkUR5+soJUIMhbz+h1Y=";
              else if(dollars == 6)
              	amazonSig = "wvBStHoAdNAHjH/hKDM7w6AjjBPguKpCYG4l18D5qR4=";
              else if(dollars == 7)
              	amazonSig = "7B6fNqHhdExqVczaq1BFwBZLmj5mNCdEjbxmkAbg+I4=";
              else if(dollars == 8)
              	amazonSig = "cwdQb7i7oV/6hLpt0DlsDUj5KcPWss3kryIAFYPq6Mw=";
              else if(dollars == 9)
              	amazonSig = "62lU13qdx1ER08qBZWUC4LEWR+YA/NkOoX7icXrUy0o=";
              else if(dollars == 10)
              	amazonSig = "L9kc2UgRBEBGzh9rg2og5KjYuWOBp52KtetYwkg5uNw=";
              else if(dollars == 15)
              	amazonSig = "xs7TWrMlSKEKuEU3nnt+LmUpKi2121mq1jP6daUlnh0=";
              else if(dollars == 20)
              	amazonSig = "/VU0ouW+xJHrMCwN5nPsU9oJU/SNeCuONdB9y/AkYOA=";
              else if(dollars == 25)
              	amazonSig = "t8y+ohtVxo/XkAond+21ZPOhanTUBkTxV+xp/TwSZo4=";
              else if(dollars == 30)
              	amazonSig = "TUDEBU55zstHUfYxYebpLY2KC8+2EVaqNiKDDpx4U7Q=";
              else if(dollars == 35)
               	amazonSig = "gzJqmOrYp5gGPFoMfne82I2RbW/NvVuq3+CTs+Xh8WI=";
              else if(dollars == 40)
              	amazonSig = "COAk4jhenHXUsfAKG8yzTvaryrfCnAmzjorXy/J5yzo=";
              else if(dollars == 45)
              	amazonSig = "zWT92r73y7Iawpv390xHRk6a2v1qaEqJ8O0QRk75wCQ=";
              else if(dollars == 50)
              	amazonSig = "/hV1luOHEktYIRX6PWX39yYOLxMldAJwHSGRdN4J89g=";
              else if(dollars == 55)
              	amazonSig = "d3fxT+t0BEkX7DkLk2bxhaW6lX+kkwl9ZyOUIXyNglk=";
              else if(dollars == 60)
              	amazonSig = "Z8/mjoxOsYcVQLSDWL03GZ1Xa4HGr7/cIckpPgsZtwM=";
              else if(dollars == 65)
              	amazonSig = "3C4Mk2RkjkPe6DYIJDctdq193MUoUkghKXb7AlKoN2c=";
              else if(dollars == 70)
              	amazonSig = "eRiCXdPgWmuhFq4UsH6s0O09dFsWq/WkaqN6YHs2cGs=";
              else if(dollars == 75)
              	amazonSig = "zBD1y59rX7xV3xwmy7jdvyW5PR8HAejtuki2EuRF270=";
              else if(dollars == 80)
              	amazonSig = "ly6M835334tSyehvLZniPDnbK/oS3Pa1sxt7v4iW6As=";
              else if(dollars == 85)
              	amazonSig = "uSMaJmxBQo9bTDM0VayZ8C/I+4iS3qH+kHUZ9AABIHI=";
              else if(dollars == 90)
              	amazonSig = "xq0/Uqld2bEtLrUoXR30atOJzyQS0E+o6L9rk+Ir4YU=";
              else if(dollars == 95)
              	amazonSig = "3n3Q4ijNZstRMY95x1WPgrgx6ApVZ8uuhMpNLEY6Mus=";
              else if(dollars == 100)
              	amazonSig = "s+XOJM8VUyzOw/BTlh8dOSAySuSsakB+GTYTdfUMn+4=";
              else if(dollars == 105)
              	amazonSig = "SWUgdRXB2R4Meano/1A4PbhStgjBf4xBJ7qZV18uZ/A=";
              else if(dollars == 110)
              	amazonSig = "GxFwhctTpyynzkRnFZZgAzIHqGTzoNe6jQC5o2MJQ8A=";
              else if(dollars == 115)
              	amazonSig = "c+HILtqIPRWipjskPTDIKPDs4ku+BBEuvvtkeSsNLzY=";
              else if(dollars == 120)
              	amazonSig = "SOOYCT+SGY3/wf4ioAZFy5cipbxaAmxrN+hP9ac3fwM=";
              else if(dollars == 125)
              	amazonSig = "osTdd9mmhac42tt6aTPgIVAnxBEGqvKw35SwVOSXNTI=";
              else if(dollars == 130)
              	amazonSig = "bzdATX0UEIfM4Iar7BUt0iqERyoXnO60+d9Lqf4gezo=";
              else if(dollars == 135)
              	amazonSig = "eEMu5gWWl6xMTm/OQ/BQHW7FcVA4qkkgNQ2kbSALdps=";
              else if(dollars == 140)
              	amazonSig = "06547lh33ZgvfOcko3rV/caTyC0CeezyJMh6fH8dm6c=";
              else if(dollars == 145)
              	amazonSig = "RRePkZN9qfMifswuNZslAYLCVlX4FaM/weLjjBAMXIo=";
              else if(dollars == 150)
              	amazonSig = "mXdmGIZVUUBkbFFMLHQPEEiMtCD69kMaUH6MICX0t3c=";
              else if(dollars == 175)
              	amazonSig = "dPd9vwlgt4LOlN5wTEwpzxBiiSkBNTGAAf1AAsjOmBQ=";
              else if(dollars == 200)
              	amazonSig = "QYm2LSijwnBeT9Iulfvptu2Ub9fffmLS6rLzboSQQlY=";
              else if(dollars == 225)
              	amazonSig = "o5OtJ40q6VkTgQnmBOKNHA1+PhDXaTXBXjqKl2gqk0o=";
              else if(dollars == 250)
              	amazonSig = "PF95kUJiAuSk/4W3k/JGxxcDm9nYxXbxImudSMxMzx4=";
              else if(dollars == 275)
              	amazonSig = "VgUV+inRQEU4rUBMg+3vDAWc4g0P8jD4cb5pwAKgp+U=";
              else if(dollars == 300)
              	amazonSig = "b+eo+fA4GX8w0oFCCNULAtesN50aKv1nO99QYqYw7aA=";
              else if(dollars == 325)
              	amazonSig = "sG1Plv43lg9nicDIixUlIRz7S7Z64wDlA/8VTjgxPK8=";
              else if(dollars == 350)
              	amazonSig = "lc5bG6TCTxauCRxtd0JsFxNcle4So/kYIzXbP1+KOqA=";
              else if(dollars == 375)
              	amazonSig = "lkdvsCywiF5GAJZZLfd4Mrz9jjLLw2rp1LvnUYQQa4Q=";
              else if(dollars == 400)
              	amazonSig = "ODIojKzrIUVWBT7aTYcQkhZjAe+7qNhIsJ5VUZzmBTw=";
              	
			  $('#amazon-form [name="signature"]').val(amazonSig);
			  
            }
            $("#main").find('input').change(onSliderChange);
            onSliderChange(); // set amount from default slider position

            var forcedAmount = parseFloat((document.location.search.match(/(?:[?&])amt=([0-9.]*)/) || {})[1]);
            if (forcedAmount > 400) {
              $("#slider").val(100);
              onSliderChange();
              var dollars = forcedAmount + ".00";
              $("#amt-text-num").text(forcedAmount);
              $('#google-form [name="item_price_1"]').val(dollars);
              $('#paypal-form [name="amount"]').val(dollars);
              $('#paypal-form2 [name="a3"]').val(dollars);
              $('#amazon-form [name="amount"]').val("USD " + forcedAmount);
            }
          });

          // Safari bug: click a button to submit a form, close the newly opened window
          // using your mouse (not keyboard), try to click the button again: nothing happens.
          // Any button submitting a form to the same URL won't work.  Workaround: modify the
          // URL harmlessly after onclick, so any later clicks are to a new URL.
          $('form input[type="image"]').click(function() {
            var that = this;
            window.setTimeout(function() {
              var theForm = $(that).closest("form")[0];
              if (!/\?/.test(theForm.action))
                theForm.action += "?";
              theForm.action += "&";
            }, 0);
          });

          // Confirm if they leave without paying
          GLOBAL_haveClickedPayButton = false;
          window.onbeforeunload = function() { 
            // TODO temporarily disable this while CatBlock question may be derailing users early in install process
            //return;
            // TODO only do this upon install.
            //var zeroSelected = $("#not-paying:visible").length > 0;
            //if (!GLOBAL_haveClickedPayButton && !zeroSelected)
            //  return "You haven't paid yet.  If you can't afford to, no problem.  But if you can, please stay on the page to pay!"; 
          };
          $('form input[type="image"]').click(function() {
            GLOBAL_haveClickedPayButton = true;
            paymentTracking();
          });
        </script>


<?php get_footer(); ?>