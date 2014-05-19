<div class="side_bar_install_box" id="side_bar_install_box">
	<div class="" id="">
		<p class="side_bar_install_box_title" style="color:#ffffff;">Supporter Stats</p>
	</div>
	<p style="size:15px;">&nbsp;</p>
	
	<?php 
		// Instantiate our class
		$wpMailChimpFramework = wpMailChimpFramework::getInstance();
 
		// Request the lists and var_dump so we can see them
		$lists = $wpMailChimpFramework->lists();
		
		//var_dump($lists);
		
		
		foreach ($lists[0] as $key => $val) {
	 		
	 		if($key == "member_count")
		 		$amount_count2 = "$val";
		}
		
		//$list_members = $wpMailChimpFramework->listMembers($list_id, 'subscribed', null, 0, 5000);
		
		//foreach ($list_members as $key => $val) {
	 		
	 	//	echo $val;
		//}
		//var_dump($lists[1]);
		
		$amount_goal 	= 100000;
		$amount_current = 3084;
		$amount_count 	= 189; 
		$amount_average = $amount_current/$amount_count;
		
		$amount_percent = ($amount_current*100)/$amount_goal;
		$amount_percent = number_format($amount_percent,    2, '.', '');
		
		
		$amount_current = '$' . number_format($amount_current, 2, '.', ',');
		$amount_average = '$' . number_format($amount_average, 2, '.', ',');
		$amount_goal	= '$' . number_format($amount_goal,    2, '.', ',');
	?>
	
	<p >
				
	  <div class="pay_stats">
        <span style="float:right;"><?php echo $amount_current; ?></span><span style="float:left;">Total payments:</span>
      </div><br>
      <div class="pay_stats">
        <span style="float:right;"><?php echo $amount_count; ?></span><span style="float:left;">Purchases #:</span>
      </div><br>
      <div class="pay_stats">
        <span style="float:right;"><?php echo $amount_average; ?></span><span style="float:left;">Average purchase:</span>
      </div>
          
      
    </p>
	
	<?php
	
		
	?>
	
		<div class="project-pledged-wrap">
			<div class="project-pledged" style="width: <?php echo $amount_percent; ?>%;">&nbsp;</div>
		</div>

	
	
	<div class="" id="">
		<p class="side_bar_install_box_title" style="color:#ffffff;">Top contributors</p>
	</div>

	<p >
				
	  <ol class="pay_stats" style="">
		<span style="float:left;" class="pay_stats_li"><li>Matthew Castleton</li></span><span style="float:right;">$205.00</span><br>
        <span style="float:left;" class="pay_stats_li"><li>Anonymous</li></span><span style="float:right;">$100.00</span><br>
        <span style="float:left;" class="pay_stats_li"><li>Katie Sunstrom</li></span><span style="float:right;">$100.00</span><br>
        <span style="float:left;" class="pay_stats_li"><li>Javid Jamae</li></span><span style="float:right;">$100.00</span><br>
        
        <span style="float:left;" class="pay_stats_li"><li>Erik Smith</li></span><span style="float:right;">$100.00</span><br>
        
        <span style="float:left;" class="pay_stats_li"><li>Molecule Software</li></span><span style="float:right;">$80.00</span><br>
        
        <span style="float:left;" class="pay_stats_li"><li>Cary Conover</li></span><span style="float:right;">$50.00</span><br>
        <span style="float:left;" class="pay_stats_li"><li>Wyatt H Manor</li></span><span style="float:right;">$50.00</span><br>
        
        <span style="float:left;" class="pay_stats_li"><li>Ivan Lee</li></span><span style="float:right;">$50.00</span><br>
        <span style="float:left;" class="pay_stats_li"><li>Robert Buecker</li></span><span style="float:right;">$50.00</span><br>
        <!--span style="float:left;" class="pay_stats_li"><li>Anonymous</li></span><span style="float:right;">$50.00</span><br>
        <span style="float:left;" class="pay_stats_li"><li>Anonymous</li></span><span style="float:right;">$40.00</span><br>
        
        <span style="float:left;" class="pay_stats_li"><li>Amit Varia</li></span><span style="float:right;">$30.00</span><br>
        <span style="float:left;" class="pay_stats_li"><li>Holt Beach</li></span><span style="float:right;">$30.00</span><br>
        <span style="float:left;" class="pay_stats_li"><li>Gratien Roy</li></span><span style="float:right;">$30.00</span><br -->
      </ol>          
      
    </p>
</div>
			
<div class="side_bar_box" style="min-height:1px;">
	<div class="" id="">
		<p class="side_bar_box_title">Get a Google TV</p>
	</div>
	<p class="grey_bold">Already have a GTV?</p>

	<p class="grey_italic">You can also Support us by purchasing your&nbsp;next&nbsp;Google&nbsp;TV&nbsp;below.</p>
	<br>
	<!--<a href="#" class="google_tv_button"></a>-->
	<button class="google_tv_button" onclick="location.href='<?php bloginfo('url');?>/get-gtv'"><b>Google TV List</b></button>
	<br><br>
</div>