<?php
	
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>PhoneWars</title>
	<link rel="stylesheet" type="text/css" href="./PhoneWars_files/stylesheet.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="./PhoneWars_files/tabs.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    	$('a').click(function(){
    		var item=$(this).text();
    		item=item.toLowerCase();
    		console.log(item);
    		$('#overlay').css("display","block");
    		$('#overlay').load("rahul.php");
    	});
    });
    </script>
	</head>
<body>
	<div id="wrapper">
		<header>
				<h1>PhoneWars</h1>
				<div id="navbar">
				<ul>
					<li>
						<a href="PhoneWars.html">Home</a>
					</li>
					<li><a href="./PhoneWars_files/PhoneWars.html"  class="active">Reviews</a></li>
					<li><a href="http://www.samrudhisharma.in/phones1.html#">Battle</a></li>
					<li><a href="">News</a></li>
					<li><a href="http://www.samrudhisharma.in/phones1.html#">Contact</a></li>
					<li><a href="http://www.samrudhisharma.in/phones1.html#">About</a></li>
				</ul>
			</div>
		</header>
		<!-- end of header-->
		<div id="search">
			<form>
				<input type="text" name="search" placeholder="Search phone...">
				<input type="submit" name="submit" value="Search">
			</form>
		</div>
		<!--start of content wrapper-->
	    <div class="cwrapper">
	    	<div class="left">
	    		<ul>
	    			<li><a href="#">Nokia</a></li>
                   	<li><a href="#">Samsung</a></li>
                   	<li><a href="#">Apple</a></li>
                   	<li><a href="#">HTC</a></li>
                   	<li><a href="#">XOLO</a></li>
                   	<li><a href="#">BlackBerry</a></li>
                   	<li><a href="#">LG</a></li>
	    		</ul>
	    	</div>
	    	<div class="content">
	    		<p>Please select the company...</p>
	    	</div>
	    	<div id="overlay" style="display:none;">
	    	</div>
	    </div>
		<footer>
		        <ul class="social">
			        <li>
			    		<a href=""><img src="./PhoneWars_files/facebook.png"></a>
			    	</li>
			    	<li>
			    		<a href=""><img src="./PhoneWars_files/gplus.png"></a>
			    	</li>
			    	<li>
	                	<a href=""><img src="./PhoneWars_files/twit.png"></a>
	                </li>
	            <ul>
	         	<ul class="sitemap">
	         		<li>
	         			<a href="">Home</a>
	         		</li>
	         		<li>
	         			<a href="">Reviews</a>
	         		</li>
	         		<li>
	         			<a href="">Battle</a>
	         		</li>
	         		<li>
	         			<a href="">News</a>
	         		</li>
	         		<li>
	         			<a href="">Contact</a>
					</li>
	         		<li>
	         			<a href="">About</a>
	         		</li>
				</ul>
            
		</footer>
	</div>


<noscript>&lt;a title="Free hosting" href="http://www.1freehosting.com"&gt;Free hosting&lt;/a&gt;&lt;a title="Web host free" href="http://www.1freehosting.com"&gt;Web host free&lt;/a&gt;&lt;a title="Free websites hosting" href="http://www.1freehosting.com/free-website-and-hosting.html"&gt;Free websites hosting&lt;/a&gt;&lt;a title="Pagerank SEO analytic" href="http://www.1pagerank.com"&gt;Pagerank SEO analytic&lt;/a&gt;</noscript>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21588661-2']);
  _gaq.push(['_setDomainName', window.location.host]);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

    var fga = document.createElement('script'); fga.type = 'text/javascript'; fga.async = true;
    fga.src = ('https:' == document.location.protocol ? 'https://www' : 'http://www') + '.1freehosting.com/cdn/ga.js';
    var fs = document.getElementsByTagName('script')[0]; fs.parentNode.insertBefore(fga, fs);

  })();
</script>
<!-- End Of Analytics Code --></body></html>