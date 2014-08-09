<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/styleCompare.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jmin.js"></script>
		 <link rel="stylesheet" href="style/jqui.css" />
	<script>
		 function suggestCom()
		 {
		 var availableTags = ['nexus 4' ,'iphone 5','htc one','nokia lumia 800'];
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
					    var imgsrc = output.img;
						if($('#age').is(':empty'))
						{
						$("#img").attr("src", imgsrc);
						$('#name').html(output.name).show();
						$('#age').html(output.price).show();
						$('#brand').html(output.brand).show();
						$('#dimension').html(output.dimension).show();
						$('#os').html(output.os).show();
						$('#b_life').html(output.b_life).show();
						$('#storage').html(output.storage).show();
						$('#weight').html(output.weight).show();
						$('#processor').html(output.processor).show();
						$('#camera').html(output.camera).show();
						$('#vcamera').html(output.vcamera).show();
						$('#resolution').html(output.resolution).show();
						
						}
						else if( $('#age1').is(':empty') )
						{
							

							$("#img1").attr("src", imgsrc);
						$('#name1').html(output.name).show();
						$('#age1').html(output.price).show();
						$('#brand1').html(output.brand).show();
						$('#dimension1').html(output.dimension).show();
						$('#os1').html(output.os).show();
						$('#b_life1').html(output.b_life).show();
						$('#storage1').html(output.storage).show();
						$('#weight1').html(output.weight).show();
						$('#processor1').html(output.processor).show();
						$('#camera1').html(output.camera).show();
						$('#vcamera1').html(output.vcamera).show();
						$('#resolution1').html(output.resolution).show();
						}							
						else if( $('#age2').is(':empty') )

						{
							
							$("#img2").attr("src", imgsrc);
						$('#name2').html(output.name).show();
						$('#age2').html(output.price).show();
						$('#brand2').html(output.brand).show();
						$('#dimension2').html(output.dimension).show();
						$('#os2').html(output.os).show();
						$('#b_life2').html(output.b_life).show();
						$('#storage2').html(output.storage).show();
						$('#weight2').html(output.weight).show();
						$('#processor2').html(output.processor).show();
						$('#camera2').html(output.camera).show();
						$('#vcamera2').html(output.vcamera).show();
						$('#resolution2').html(output.resolution).show();
						}							
						else
						{
							alert("Empty a column to fill again.");
						}
					});
		}

		function removeAll()
		{
			$('.img').empty();
			$("table div").empty();
			$('#name').empty();
			$('#name1').empty();
			$('#name2').empty();
		}

		function removeSelect(arg)
		{
			switch(arg)
			{
			case 0:	
			$("#img").attr("src", "imgs/backph.png");
			$("#img").attr("src", imgsrc);
			$('#name').html(output.name).show();
			$('#age').html(output.price).show();
			$('#brand').html(output.brand).show();
			$('#dimension').html(output.dimension).show();
			$('#os').html(output.os).show();
			$('#b_life').html(output.b_life).show();
			$('#storage').html(output.storage).show();
			$('#weight').html(output.weight).show();
			$('#processor').html(output.processor).show();
			$('#camera').html(output.camera).show();
			$('#vcamera').html(output.vcamera).show();
			$('#resolution').html(output.resolution).show();
			break;
			case 1:
			$("#handsetImg1").attr("src", "imgs/backph.png");
			$('#name1').html(output.name).show();
			$('#age1').html(output.price).show();
			$('#brand1').html(output.brand).show();
			$('#dimension1').html(output.dimension).show();
			$('#os1').html(output.os).show();
			$('#b_life1').html(output.b_life).show();
			$('#storage1').html(output.storage).show();
			$('#weight1').html(output.weight).show();
			$('#processor1').html(output.processor).show();
			$('#camera1').html(output.camera).show();
			$('#vcamera1').html(output.vcamera).show();
			$('#resolution1').html(output.resolution).show();
			break;
			case 2:
			$("#handsetImg2").attr("src", "imgs/backph.png");
			$('#name2').html(output.name).show();
			$('#age2').html(output.price).show();
			$('#brand2').html(output.brand).show();
			$('#dimension2').html(output.dimension).show();
			$('#os2').html(output.os).show();
			$('#b_life2').html(output.b_life).show();
			$('#storage2').html(output.storage).show();
			$('#weight2').html(output.weight).show();
			$('#processor2').html(output.processor).show();
			$('#camera2').html(output.camera).show();
			$('#vcamera2').html(output.vcamera).show();
			$('#resolution2').html(output.resolution).show();
			break;
			}
		}
</script>
</head>
<body>
  <div id="wrapper">
  <header>
	<h1>PhoneWars</h1>
	<div id="navbar">
	<ul>
	<li>
	<a href="">Home</a>
	</li>
	<li><a href="">Reviews</a></li>
	<li><a href="" class="active">Battle</a></li>
	<li><a href="">News</a></li>
	<li><a href="" >Contact</a></li>
	<li><a href="">About</a></li>
	</ul>
	</div>
  </header>
 	<div class="selectOption">
 		<table>
 			<tr>
 		   <td><label for="selectPhone" for="tags">Add another phone</label></td>
 		   <td><form name="form">
 			<input type="text" name="name" class="selectPhone"  id="tags" onfocus="suggestCom();" />		
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
					<div class="handsetImg">						
							<img id="img" src="imgs/backph.png" style="border-style: none">									
					</div>
					<div class="handsetName">
						<div id="name"></div>
					</div>					
				</div>
			</li>
			<li>
				<div class="phoneItem">
					<div class="removePhone">
						<span ><img src="imgs/cross.png" height="13" width="13" onclick="removeSelect(1);"></span>
					</div>
					<div class="handsetImage">
						<img id="img1" src="imgs/backph.png" style="border-style: none">							
					</div>
					<div class="handsetName">
						<div id="name1"></div>
					</div>					
				</div>				
			</li>
			<li>
				<div class="phoneItem">
					<div class="removePhone">
						<span ><img src="imgs/cross.png" height="13" width="13" onclick="removeSelect(2);"></span>
					</div>
					<div class="handsetImage">
						<img id="img2" src="imgs/backph.png" style="border-style: none">						
					</div>
					<div class="handsetName">
						<div id="name2"></div>
					</div>					
				</div>
			</li>
		</ul>
		<table class="PhoneCompVal">
			<tbody>
				<tr>
					<th class="sectionHead">Specifications</th>
				</tr>
				<tr >
					<td class="head">Price</td>
					<td><div name="" id="age"></div></td>
					<td name=""><div id="age1"></div></td>
					<td name=" "><div id="age2"></div></td>
				</tr>
				<tr >
					<td class="head">Brand</td>
					<td name=""><div id="brand"></div></td>
					<td name=""><div id="brand1"></div></td>
					<td name=""><div id="brand2"></div></td>
				</tr>
				<tr >
					<td class="head">Dimensions</td>
					<td><div id="dimension"></div></td>
					<td><div id="dimension1"></div></td>
					<td><div id="dimension2"></div></td>
				</tr>
				<tr >
					<td class="head">Operating System</td>
					<td><div id="os"></div></td>
					<td><div id="os1"></div></td>
					<td><div id="os2"></div></td>
				</tr>
				<tr >
					<td class="head">Weight</td>
					<td><div id="weight"></div></td>
					<td><div id="weight1"></div></td>
					<td><div id="weight2"></div></td>
				</tr>
				<tr >
					<td class="head">Processor</td>
					<td><div id="processor"></div></td>
					<td><div id="processor1"></div></td>
					<td><div id="processor2"></div></td>
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
					<td><div id="camera"></div></td>
					<td><div id="camera1"></div></td>
					<td><div id="camera2"></div></td>
				</tr>
				<tr >
					<td class="head">Video Camera</td>
					<td><div id="vcamera"></div></td>
					<td><div id="vcamera1"></div></td>
					<td><div id="vcamera2"></div></td>
				</tr>
				
			</tbody>			
		</table>
		<table class="PhoneCompVal">
			<tbody>
				<tr>
					<th class="sectionHead" >Entertainment</th>
				</tr>
				<tr >
					<td class="head">Media Player</td>
					<td><div id="med"></div></td>
					<td><div id="med1"></div></td>
					<td><div id="med2"></div></td>
				</tr>
				<tr >
					<td class="head">FM Radio</td>
					<td><div id="fm"></div></td>
					<td><div id="fm1"></div></td>
					<td><div id="fm2"></div></td>
				</tr>
				<tr >
					<td class="head">Games</td>
					<td><div id="game"></div></td>
					<td><div id="game1"></div></td>
					<td><div id="game2"></div></td>
				</tr>
			</tbody>			
		</table>
		<table class="PhoneCompVal">
			<tbody>
				<tr>
					<th class="sectionHead" >Extra</th>
				</tr>
				<tr >
					<td class="head">Memory Card</td>
					<td><div id="mem"></div></td>
					<td><div id="mem1"></div></td>
					<td><div id="mem2"></div></td>
				</tr>
				<tr >
					<td class="head">Internal Memory</td>
					<td><div id="intm"></div></td>
					<td><div id="intm1"></div></td>
					<td><div id="intm2"></div></td>
				</tr>
				<tr >
					<td class="head">Browser</td>
					<td><div id="brow"></div></td>
					<td><div id="brow1"></div></td>
					<td><div id="brow2"></div></td>
				</tr>
			</tbody>			
		</table>
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
</body>
</html>