   <script src="js/vendor/jquery.js"></script> 
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>
	

	
 
<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
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