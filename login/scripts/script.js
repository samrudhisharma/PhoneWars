$(document).ready(function(){
		$('button').hover(function(){
			$(this).css('opacity','0.6');
		},
		function(){
			$(this).css('opacity','1');
		});
		$('#forgot').click(function call()
		{
			$('#fwrapper').slideDown(500,function(){
				$(this).css("position","relative");
				$(this).css("top","-150px");
			});
			$("#f1").css("display","none");
			$('#fwrapper').load("forgot_first.php");
		});
	});