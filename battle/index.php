<?php
session_start();
	if(!isset($_SESSION['username']))
		header("LOCATION:../login/index.php?status=1");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/styleCompare.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jmin.js"></script>
	<link rel="stylesheet" type="text/css" href="../stylesheet.css">
	<link rel="stylesheet" href="style/jqui.css" />
	<style type="text/css">
	.cwrapper
{
	background-image: url(./images/bg.jpg);
	box-shadow: 2px 2px 4px #555 inset;
	font-family: "Myriad Pro";
	text-align: center;
}
	</style>
	<script>
		 function suggestCom()
		 {
		 	var availableTags = ['XOLO Play' ,'XOLO X1000','Apple iphone 5','Apple iphone 4','Google Nexus 4','Samsung Galaxy S II','Samsung Galaxy S III','Xolo Play','Xolo X1000',
		 	'LG Optimus G Sprint','Nokia Lumia 925','Nokia E71','BlackBerry Curve 9315','BlackBerry Z10','HTC One X','HTC Butterfly'];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
		 }			
		function get()
		{
			$.post('data.php',{name : form.name.value },
					function(output)
					{

						output = jQuery.parseJSON(output);
					    var imgsrc = output.imgsrc;
						if( $('#age').is(':empty'))
						{
						$("#handsetImg").attr("src", imgsrc);
						$('#pname').html(output.pname).show();
						$('#age').html(output.price).show();
						$('#name').html(output.brand).show();
						$('#dimen').html(output.dimen).show();
						$('#os').html(output.os).show();
						$('#res').html(output.res).show();
						$('#weight').html(output.weight).show();
						$('#proc').html(output.proc).show();
						$('#cam').html(output.camera).show();
						$('#vid').html(output.vidc).show();
						$('#intm').html(output.intm).show();
						
						
						}
						else if( $('#age1').is(':empty') )
						{
							

							$("#handsetImg1").attr("src", imgsrc);
							$('#pname1').html(output.pname).show();
							$('#age1').html(output.price).show();
							$('#name1').html(output.brand).show();
							$('#dimen1').html(output.dimen).show();
							$('#os1').html(output.os).show();
							$('#res1').html(output.res).show();
							$('#weight1').html(output.weight).show();
							$('#proc1').html(output.proc).show();
							$('#cam1').html(output.camera).show();
							$('#vid1').html(output.vidc).show();
							$('#intm1').html(output.intm).show();
							
						}							
						else if( $('#age2').is(':empty') )

						{
							
							$("#handsetImg2").attr("src", imgsrc);
							$('#pname2').html(output.pname).show();
							$('#age2').html(output.price).show();
							$('#name2').html(output.brand).show();
							$('#dimen2').html(output.dimen).show();
							$('#os2').html(output.os).show();
							$('#res2').html(output.res).show();
							$('#weight2').html(output.weight).show();
							$('#proc2').html(output.proc).show();
							$('#cam2').html(output.camera).show();
							$('#vid2').html(output.vidc).show();
							$('#intm2').html(output.intm).show();
							
						}							
						else
						{
							
							

							alert("Empty a column to fill again.");
							
						}
					});
		}

		function removeAll()
		{
			$("#handsetImg").attr("src", "imgs/backph.png");
			$("#handsetImg1").attr("src", "imgs/backph.png");
			$("#handsetImg2").attr("src", "imgs/backph.png");
			$("table div").empty();
			$('#pname').empty();
			$('#pname1').empty();
			$('#pname2').empty();
		}

		function removeSelect(arg)
		{
			switch(arg)
			{
			case 0:	
			$("#handsetImg").attr("src", "imgs/backph.png");
			$('#pname').empty();
			$('#age').empty();
			$('#name').empty();
			$('#dimen').empty();
			$('#os').empty();
			$('#res').empty();
			$('#weight').empty();
			$('#proc').empty();
			$('#cam').empty();
			$('#vid').empty();			
			$('#intm').empty();		
			break;
			case 1:
			$("#handsetImg1").attr("src", "imgs/backph.png");
			$('#pname1').empty();
			$('#age1').empty();
			$('#name1').empty();
			$('#dimen1').empty();
			$('#os1').empty();
			$('#res1').empty();
			$('#weight1').empty();
			$('#proc1').empty();
			$('#cam1').empty();
			$('#vid1').empty();
			$('#intm1').empty();
			
			break;
			case 2:
			$("#handsetImg2").attr("src", "imgs/backph.png");
			$('#pname2').empty();
			$('#age2').empty();
			$('#name2').empty();
			$('#dimen2').empty();
			$('#os2').empty();
			$('#res2').empty();
			$('#weight2').empty();
			$('#proc2').empty();
			$('#cam2').empty();
			$('#vid2').empty();		
			$('#intm2').empty();			
			break;
			}
			
		}
</script>
</head>
<body>
  <header>
				<a href="#" class="logo"><h1>PhoneWars</h1></a>
				<div id="navbar">
				<ul>
					<li>
						<a href="../start">Home</a>
					</li>
					<li><a href="../review">Specifications</a></li>
					<li><a href="#" class="active">Battle</a></li>
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
 		<div class="selectOption">
 			<table style="border-collapse:collapse">
 				<tr>
 			   <td><label for="selectPhone" for="tags">Add another phone</label></td>
 			   <td><form name="form">
 				<input type="text" name="name"  class="selectPhone"  id="tags" onfocus="suggestCom();" />		
				<div id="la"></div></form>
			</td>
			<td><input type="button" value="Add a phone" onclick="get();" id="addPh"></td>
			<td>
 			<form class="selectPhone">
 				<input type="button" value="Remove all phones" onclick="removeAll();" id="remPh"/>
 			</form>
 			</td>
 			</tr>
 			</table>
 		</div>
	<div class="phoneComparisonTable">
		<ul id="displayList">
			<li>
				<div id="addedInfoText" class="phoneItem">
					<p>You can add upto three phones !</p>
				</div>
			</li>
			<li>
				<div class="phoneItem">
					<div class="removePhone">
					<span ><img src="imgs/cross.png" height="13" width="13" onclick="removeSelect(0);"></span>
					</div>
					<div class="handsetImage">						
							<img id="handsetImg" src="imgs/backph.png" style="border-style: none">									
					</div>
					<div class="handsetName">
						<div id="pname"></div>
					</div>					
				</div>
			</li>
			<li>
				<div class="phoneItem">
					<div class="removePhone">
						<span ><img src="imgs/cross.png" height="13" width="13" onclick="removeSelect(1);"></span>
					</div>
					<div class="handsetImage">
						<img id="handsetImg1" src="imgs/backph.png" style="border-style: none">							
					</div>
					<div class="handsetName">
						<div id="pname1"></div>
					</div>					
				</div>				
			</li>
			<li>
				<div class="phoneItem">
					<div class="removePhone">
						<span ><img src="imgs/cross.png" height="13" width="13" onclick="removeSelect(2);"></span>
					</div>
					<div class="handsetImage">
						<img id="handsetImg2" src="imgs/backph.png" style="border-style: none">						
					</div>
					<div class="handsetName">
						<div id="pname2"></div>
					</div>					
				</div>
			</li>
		</ul>
		<table class="PhoneCompVal">
			<tbody>
				<tr>
					<th class="sectionHead" >Specifications</th>
				</tr>
				<tr >
					<td class="head">Price</td>
					<td><div name="" id="age"></div></td>
					<td name=""><div id="age1"></div></td>
					<td name=" "><div id="age2"></div></td>
				</tr>
				<tr >
					<td class="head">Brand</td>
					<td name=""><div id="name"></div></td>
					<td name=""><div id="name1"></div></td>
					<td name=" "><div id="name2"></div></td>
				</tr>
				<tr >
					<td class="head">Dimensions</td>
					<td><div id="dimen"></div></td>
					<td><div id="dimen1"></div></td>
					<td><div id="dimen2"></div></td>
				</tr>
				<tr >
					<td class="head">Operating System</td>
					<td><div id="os"></div></td>
					<td><div id="os1"></div></td>
					<td><div id="os2"></div></td>
				</tr>
				<tr >
					<td class="head">Resolution</td>
					<td><div id="res"></div></td>
					<td><div id="res1"></div></td>
					<td><div id="res2"></div></td>
				</tr>
				<tr >
					<td class="head">Weight</td>
					<td><div id="weight"></div></td>
					<td><div id="weight1"></div></td>
					<td><div id="weight2"></div></td>
				</tr>
				<tr >
					<td class="head">Processor</td>
					<td><div id="proc"></div></td>
					<td><div id="proc1"></div></td>
					<td><div id="proc2"></div></td>
				</tr>

			</tbody>			
		</table>
		<table class="PhoneCompVal">
			<tbody>
				<tr>
					<th class="sectionHead" >Imaging</th>
				</tr>
				<tr >
					<td class="head">Camera</td>
					<td><div id="cam"></div></td>
					<td><div id="cam1"></div></td>
					<td><div id="cam2"></div></td>
				</tr>
				<tr >
					<td class="head">Video Camera</td>
					<td><div id="vid"></div></td>
					<td><div id="vid1"></div></td>
					<td><div id="vid2"></div></td>
				</tr>
				
			</tbody>			
		</table>
		
		<table class="PhoneCompVal">
			<tbody>
				<tr>
					<th class="sectionHead" >Extra</th>
				</tr>
				<tr >
					<td class="head">Internal Memory</td>
					<td><div id="intm"></div></td>
					<td><div id="intm1"></div></td>
					<td><div id="intm2"></div></td>
				</tr>				
			</tbody>			
		</table>
	</div>
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
	         			<a href="#">Battle</a>
	         		</li>
	         		
	         		<li>
	         			<a href="">About</a>
	         		</li>
				</ul>
			<p id="copyright"> All rights Reserved. PhoneWars &copy;</p>
		</div>
		</footer>
</body>
</html>