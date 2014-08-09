<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PhoneWars -- Home Page</title>
	<link rel="stylesheet" type="text/css" href="nivo-slider/nivo-slider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="nivo-slider/demo/style.css" media="screen">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen"/>
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="/resources/demos/style.css">
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="../stylesheet.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jmin.js"></script>
    <script type="text/javascript">
  		$(window).load(function() {
       		$('#slider').nivoSlider();
  		 });
  		function suggestCom()
		 {
		 	var availableTags = ['XOLO Play' ,'XOLO X1000','Apple iphone 5','Apple iphone 4','Google Nexus 4','Samsung Galaxy S II','Samsung Galaxy S III','Xolo Play','Xolo X1000',
		 	'LG Optimus G Sprint','Nokia Lumia 925','Nokia E71','BlackBerry Curve 9315','BlackBerry Z10','HTC One X','HTC Butterfly'];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
		 }
   	</script>
	</head>
</head>
<body>
	
		<header>
				<a href="#" class="logo"><h1>PhoneWars</h1></a>
				<div id="navbar">
				<ul>
					<li>
						<a href="#" class="active">Home</a>
					</li>
					<li><a href="../review">Specifications</a></li>
					<li><a href="../battle">Battle</a></li>
					<li><a href="#">About</a></li>
					<?php if(!isset($_SESSION['username'])):?>
						
						<li>
							<a href="../login">Login</a>
						</li>
					<?php 
						else:
							echo "<li>
									<ul class='lwrapper'>
										<li><a href='#' id='login'>Welcome, ".$_SESSION['username']."</a></li>";
						endif;
					?>
										<li><div id="popout" style="display:none;"><a href="../login/logout.php">Logout</a></div></li>
									</ul>
								</li>
				</ul>
			</div>
		</header>
		<!-- end of header-->
					<!--end of search-->
		<div id="cwrapper" style="text-align:center">
		<?php if(isset($_GET['priv'])=="1") 
			echo "<p style='color:red'>Not enough privileges.</p>";
		?>
			<div id="search">
				<form action="../review/index.php" method="get">
					<input id= "tags" type="text" name="search" placeholder="Search phone..."  onfocus="suggestCom();">
					<input type="submit" name="submit" value="Search">
				</form>
			</div>
			<div class="slider-wrapper theme-default" style="margin:0px auto">
    			<div id="slider" class="nivoSlider">
                	<img src="images/web.jpeg" data-thumb="images/web.jpeg" alt="" />
                	<img src="images/social.jpeg" data-thumb="images/social.jpeg" alt="" data-transition="slideInLeft"/>
                	<img src="images/smartphone.jpg" data-thumb="images/TEMP.jpg" alt=""/>
                	<img src="images/epaper.jpeg" data-thumb="images/epaper.jpeg" alt=""/>
           		</div>
       		</div>
		</div>
		<footer>
		        <a href="#" class="logo"><h2>PhoneWars <span>&copy;</span></h2></a>
		        <div class="social">
		        <ul>
			        <li>
			    		<a href=""><img src="../images/PNG/facebook.png" /></a>
			    	</li>
			    	<li>
			    		<a href=""><img src="../images/PNG/youtube.png" /></a>
			    	</li>
			    	<li>
	                	<a href=""><img src="../images/PNG/twitter.png"></a>
	                </li>
	            </ul>
	            </div>
	         	<ul class="sitemap">
	         		<li>
	         			Site Map
	         		</li>
	         		<li>
	         			<a href="#">Home</a>
	         		</li>

	         		<li>
	         			<a href="../review">Specifications</a>
	         		</li>
	         		<li>
	         			<a href="../battle">Battle</a>
	         		</li>
	         		<li>
	         			<a href="">About</a>
	         		</li>
				</ul>
			<p id="copyright"> All rights Reserved.</p>
		</footer>
	

</body>
</html>