$(function() {
        $( "#accordion" ).accordion({
            autoHeight: false,
            navigation: true
        });
        $(".ui-accordion-content ul").find("li").click(function  () 
        {
        	var item=$(this).text();
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
});
