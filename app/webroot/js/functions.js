$(document).ready(function(){
	nextSlider();
	var interval_slide = setInterval(nextSlider, 5000);

	$('.control_ul a').click(function(){
		id_sd = $(this).attr('id');
		nextSlider(id_sd);
		clearInterval(interval_slide);
	});

});

var i = 1;

function nextSlider(id_sd) {		
	var count = (id_sd != undefined) ? id_sd : i; 	
 	var all_slides = $("article");
 	all_slides.css('left', 0); 
	var slider = $("article[data-id='" + count + "']");
	var prev_slide = $("article[data-id='" + (count - 1) + "']");
	var next_slide = $("article[data-id='" + (count + 1) + "']");
	var text_slide = $("div[id='" + count + "']");
	var img_control_all = text_slide.children().siblings(".content_control").children().children().children().children()
	img_control_all.attr('src', 'img/control-slide.png');
	var img_control = text_slide.children().siblings(".content_control").children().children().eq((count - 1)).children().children();
	img_control.attr('src', 'img/control-slideA.png');	
	$('.text_slide').css('display', 'none');
 
	if(slider.html() == undefined || slider.html() == null) {
		i = 1;				 
		nextSlider();
	}else{
		i++;		
		if(count == 1){
			$('article[data-id]').hide();
			prev_slide.show();
			slider.css('left', 980);
			slider.show();
			slider.animate({
				left: parseInt(slider.css('left'), 10) != 980 ? -slider.outerWidth() : 0 
			});
			text_slide.show();
		}else{			
			prev_slide.animate({
				left: parseInt(slider.css('left'), 10) == 0 ? -slider.outerWidth() : 0 
			});

			$('article[data-id]').hide();
			prev_slide.show();

			slider.css('left', 980);			
			slider.show();
			slider.animate({
				left: parseInt(slider.css('left'), 10) != 980 ? -slider.outerWidth() : 0 
			});
			text_slide.show();						
		}
	}
}

