<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
<head>
	<title>Smart Futures</title>
	<!-- DO NOT IMPORT "objects.less" here!! -->
	<link rel="stylesheet" type="text/css" href="style/layout.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/toggle.js"></script>
	<script type="text/javascript" src="js/show_hide_activity_input_box.js"></script>
</head>
<body>
	<div id="container">
		<div id="navbar">
			<div class="navbar_backButton"><a href="index.html">Back</a></div>
			<div class="navbar_textButton"><a href="#">Activity 10</a></div>
			<div class="navbar_moreButton"><a id="menuButtonJS" href="#" onclick="toggle('more_menu_wrap')">More<img src="media/moreButton.png" id="menuButtonImg"/></a></div>
		</div> <!-- End navbar -->
		<div id="more_menu_wrap">
			<div class="more_menu_item"><a href="index.html">Home</a></div>
			<div class="more_menu_item"><a href="profile.html">My Profile</a></div>
			<div class="more_menu_item"><a href="resources.html">Resources</a></div>
			<div class="more_menu_item"><a href="#">Leave Mobile Site</a></div>
			<div class="more_menu_item"><a href="#">Log Out</a></div>
		</div>
		<div style="clear:both"></div>
		<div id="main">
			<div class="section_wrap">
				<div class="section_title">Activity Result</div>
				<div class="section_box">
					<div class="section_box_text">
							<div class="safe_text" onclick="show_activity_input_box(0);"><?php $key = "txt"."0"; if (isset($_POST[$key])){ echo $_POST[$key];}else { ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque adipiscing tincidunt odio non gravida. Morbi imperdiet elementum nisl, id lobortis velit tempus sit amet. Etiam ante urna, ultrices in laoreet nec, commodo at nibh. Vivamus id diam et nibh placerat porttitor id id quam. Maecenas pharetra euismod est sit amet iaculis. Mauris sed purus sit amet nulla aliquam vulputate. Quisque et diam pellentesque est aliquet convallis in ac dolor. Etiam et elit faucibus ante imperdiet elementum.<?php }?></div
	      	</div>	      	
	      </div> <!-- End of section_box -->
			</div> <!-- End section_wrap -->
			
			<div class="section_wrap">
				<div class="section_title">Gathering Your thoughts</div>
				<div class="section_box">
					<div class="section_box_text">
							<div class="safe_text" onclick="show_activity_input_box(1);"><?php $key = "txt"."1"; if (isset($_POST[$key])){ echo $_POST[$key];}else { ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque adipiscing tincidunt odio non gravida. Morbi imperdiet elementum nisl, id lobortis velit tempus sit amet. Etiam ante urna, ultrices in laoreet nec, commodo at nibh. Vivamus id diam et nibh placerat porttitor id id quam. Maecenas pharetra euismod est sit amet iaculis. Mauris sed purus sit amet nulla aliquam vulputate. Quisque et diam pellentesque est aliquet convallis in ac dolor. Etiam et elit faucibus ante imperdiet elementum.<?php }?></div
	      	</div>	      	
	      </div> <!-- End of section_box -->
			</div> <!-- End section_wrap -->
			
			
						
			<div class="section_wrap">
				<div class="section_title">Comments</div>
				<div class="section_box">
					<div class="section_box_item">
	        	<div class="li_item_pair_left"><a href="#">You made a good point here.</a></div>
	      		<div class="li_item_pair_right"><a href="#">Sarah D.</a></div>
	      	</div>
	      	<div class="section_box_item">
	        	<div class="li_item_pair_left"><a href="#">I like how you related training to an investment. It made a lot of sense.</a></div>
	      		<div class="li_item_pair_right"><a href="#">Mike S.</a></div>
	      	</div>
	      	<div class="section_box_item">
	        	<div class="li_item_pair_left"><a href="#">I commented.</a></div>
	        	<div class="li_item_pair_right"><a href="#">Joseph M.</a></div>
	      	</div>
	      	<a href="#">View More...</a>
				</div> <!-- End section_box -->
			</div> <!-- End section_wrap -->
		</div> <!-- End main -->
	</div> <!-- End containter -->
</body>
</html>