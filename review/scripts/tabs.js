$(document).ready(function (){
$('#slider1').show();
$('#slider2,#slider3,#slider4').hide();

$('#b1').on('click',function(){
$('#slider1').show();
$('#slider2,#slider3,#slider4').hide();
});


$('#b2').on('click',function(){
$('#slider2').show();
$('#slider1,#slider3,#slider4').hide();
});


$('#b3').on('click',function(){
$('#slider3').show();
$('#slider1,#slider2,#slider4').hide();
});

$('#b4').on('click',function(){
$('#slider4').show();
$('#slider2,#slider1,#slider3').hide();
});

});