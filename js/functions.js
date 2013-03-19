$(document).ready(function(){
	nextSlider("");
	var interval_slide = setInterval(nextSlider, 5000);

	$('.nav a').click(function(){
		id_sd = $(this).attr('id');
		nextSlider(id_sd);
		clearInterval(interval_slide);
	});

	var i = 1;
 
	function nextSlider(id_sd) {		
		var count = (id_sd != undefined) ? id_sd : i;			
	 	
	 	var all_slides = $("article");
	 	all_slides.css('left', 0); 
		var slider = $("article[data-id='" + count + "']");
		var prev_slide = $("article[data-id='" + (count - 1) + "']");
		var next_slide = $("article[data-id='" + (count + 1) + "']"); 
	 
		if(slider.html() == undefined || slider.html() == null) {
			i = 1;		 
			nextSlider("");
		}else{
			i++;
			if(count == 1){
				$('article[data-id]').hide();
				prev_slide.show();
				slider.css('left', 600);
				slider.show();
				slider.animate({
					left: parseInt(slider.css('left'), 10) != 600 ? -slider.outerWidth() : 0 
				});
			}else{			
				prev_slide.animate({
					left: parseInt(slider.css('left'), 10) == 0 ? -slider.outerWidth() : 0 
				});

				$('article[data-id]').hide();
				prev_slide.show();

				slider.css('left', 600);			
				slider.show();
				slider.animate({
					left: parseInt(slider.css('left'), 10) != 600 ? -slider.outerWidth() : 0 
				});						
			}
		}
	}
});
