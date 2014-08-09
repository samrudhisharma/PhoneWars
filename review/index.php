<?php 
session_start();
include "connect.php";
	if(isset($_POST['c_submit']))
	{

	}
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>PhoneWars-Review Page</title>
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./scripts/tabs.js"></script>
    <script type="text/javascript" src="./scripts/menu.js"></script>
    
    <script type="text/javascript" src="./scripts/jquery.sticky.js"></script>
    <script type="text/javascript">
    </script>
    <link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">
    <link rel="stylesheet" type="text/css" href="./styles/accordion.css">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jmin.js"></script>
	</head>
	<script type="text/javascript">
	$(document).ready(function(){
		$(this).scrollTop(0);
		$("span").click(function(){
			$(this).parent().slideUp(500);
		});
		$("#login").click(function(){
    	$("#popout").slideDown(100);
    });
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
	<?php
		if(isset($_GET['search'])):
	?>		
			<script type="text/javascript">
				$(document).ready(function(){
					var item=<?php echo json_encode($_GET['search'])?>;
					item=item.replace(/ /g,"+");
					$(".content").load("mobile.php?name="+item,function()
            		{
        			$("#accordion").sticky({topSpacing:0,bottomSpacing:0});
					$("#accordion-sticky-wrapper").css('float','left');
					$("#image").sticky({topSpacing:70});
					$("#image-sticky-wrapper").css('float','left');
					$(window).scrollTop(0);
           	        $("#disqus_thread").css("display","inline-block");
           	   	    $("#disqus_thread").find('a').css("display","inline-block");
        			});
				});
			</script>
	<?php
		endif;
	?>
		<?php 
				include "connect.php";
				$query="SELECT DISTINCT brand from mobile";
				$result=mysql_query($query);
		?>
						
<body>
	
		<header>
				<a href="#" class="logo"><h1>PhoneWars</h1></a>
				<div id="navbar">
				<ul>
					<li>
						<a href="../start">Home</a>
					</li>
					<li><a href="#" class="active">Specifications</a></li>
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
		<div class="cwrapper">
			<div id="search">
				<form>
					<input type="text" name="search" placeholder="Search phone..." onfocus="suggestCom()">
					<input type="submit" name="submit" value="Search">
				</form>
			</div>
			<div id="accordion" class="sticky">
			<?php
			while($row=mysql_fetch_assoc($result))
			{
					foreach ($row as $key => $value) {
					echo "<h3><a href='#'>".$value."</a></h3>";
					echo "<div><ul>";
					$query1="SELECT name from mobile WHERE brand='$value'";
					$result1=mysql_query($query1);
					while($row1=mysql_fetch_row($result1))
					{
						echo "<li>".$row1[0]."</li>";
					}
					echo "</ul></div>";
					}	
			}
			?>
			</div>
	    	<div class="content">
	    		<h4>Please select a phone.<span>&#215;</span></h4>
	   		</div>
	   		
	    	<div id="disqus_thread" style="display:none;"></div>
 		   	<script type="text/javascript">
      	  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        	var disqus_shortname = 'phonewar'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        	(function() {
            	var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            	dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        	})();
    		</script>
    		<a href="http://disqus.com" style="display:none" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	    </div>
		<footer>
		        <a href="#" class="logo"><h2>PhoneWars</h2></a>
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
	         			<a href="../start">Home</a>
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
			<p id="copyright"> All rights Reserved. PhoneWars &copy;</p>
		</div>
		</footer>



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