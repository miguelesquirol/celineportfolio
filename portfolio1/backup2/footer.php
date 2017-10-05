   <script src="js/vendor/jquery.js"></script> 
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>
	

<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>

	<script>
	
	
	function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
        // Alternatively you could use:
        // (new Image()).src = this;
    });
}

// Usage:

preload([
    'images/slide1.jpg',
    'images/slide2.jpg'
 
]);
</script> 

 
<script>



			$(document).ready(function(){
		
		   
	$('.slide1').delay(13000).fadeToggle(5000);
$('.slide2').delay(13000).fadeToggle(5000); 
	
	
				$(".inline").colorbox({inline:true, width:"50%"});
			
			});
		</script>

		

	
<script>

var $group6 = $('.contact').colorbox({className:"contactpop",inline:true,arrowKey:false, innerWidth:"100%", innerheigth:"100%",rel:'contact',  href: function(){


return $(this).children();

}});

$('#contact').on('click', function(e){

e.preventDefault();

$group6.eq(0).click();

});

</script>
 

<script>

var $group1 = $('.lapresse').colorbox({inline:true, rel:'lapresse', href: function(){

return $(this).children();

}});

$('#lapresse').on('click', function(e){

e.preventDefault();

$group1.eq(0).click();

});

</script>


<script>

var $group2 = $('.devmcgill').colorbox({inline:true, rel:'devmcgill', href: function(){

return $(this).children();

}});

$('#devmcgill').on('click', function(e){

e.preventDefault();

$group2.eq(0).click();

});

</script>




<script>

var $group3 = $('.exacto').colorbox({inline:true, rel:'exacto', href: function(){

return $(this).children();

}});

$('#exacto').on('click', function(e){

e.preventDefault();

$group3.eq(0).click();

});

</script>


<script>

var $group4 = $('.mill').colorbox({inline:true, rel:'mill', href: function(){

return $(this).children();

}});

$('#mill').on('click', function(e){

e.preventDefault();

$group4.eq(0).click();

});

</script>



<script>

var $group5 = $('.doublem').colorbox({inline:true, rel:'doublem', href: function(){

return $(this).children();

}});

$('#doublem').on('click', function(e){

e.preventDefault();

$group5.eq(0).click();

});

</script>




<script>






setTimeout(function() {

  
setInterval(function hidethen(){
    var $sample = $("#masterNavHover");
    if($sample.is(":hover")) {
       $("#masterNav").css("margin-top", "0px");
    }
    else {
       $("#masterNav").css("margin-top", "-100px");
    }
}, 200);

$(document).ready(function() {

hidefirst(function () {
    hidethen();
});
  
 });

}, 1000);
  

</script>

<script type="text/javascript">



    $('.button-left').hover(
       function(){ $(".popup").toggleClass('hidden') }
)

   $('.button-left').hover(
       function(){ $(".boite").toggleClass('hidden') }
)


</script>



<script type="text/javascript">
	// Make ColorBox responsive
	jQuery.colorbox.settings.maxWidth  = '95%';
	jQuery.colorbox.settings.maxHeight = '95%';

	// ColorBox resize function
	var resizeTimer;
	function resizeColorBox()
	{
		if (resizeTimer) clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function() {
				if (jQuery('#cboxOverlay').is(':visible')) {
						jQuery.colorbox.load(true);
				}
		}, 300);
	}

	// Resize ColorBox when resizing window or changing mobile device orientation
	jQuery(window).resize(resizeColorBox);
	window.addEventListener("orientationchange", resizeColorBox, false);
</script>

  </body>
</html>