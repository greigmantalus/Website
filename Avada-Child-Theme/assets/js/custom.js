jQuery(document).ready(function(){
	/*jQuery(function(){
		if(jQuery(window).width() > 800){
		  	jQuery("#content .post-content .fusion-fullwidth").SnapScroll({
			  	//options: https://www.jqueryscript.net/animation/Snap-To-Section-SnapScroll.html

		  		// Add classes to elements
			  	classes:false,

				// Delay between scroll events needed to trigger scroll action
				scrollDelay:300,                 

				// Interval used for wheel to trigger scroll action
				wheelInterval:1000,                

				// The amount of time it takes to animate to a snap point
				animateDuration:1000,     

				// The amount of time to wait after an animation is complete before scrolling can be triggered        
				animateTimeBuffer:500,               

				// Snap to the top of page regardless of there being an element
				snapTop:true,          

				// Snap to the bottom of page regardless of there being an element       
		  		snapBottom:true,   

		  		// Deviation in milliseconds from the average needed to separate wheel events
		  		maxWheelDeviation:100   
		  	});
		}
	});*/  

	jQuery('.fusion-tb-header .fusion-fullwidth').append('<div class="border"></div>');

  	create_clip_path();

	jQuery(window).resize(function(){
	    create_clip_path();
	});

	function create_clip_path(){
		//Ref: https://yqnn.github.io/svg-path-editor/
	    //Path: M 940 -25 C 592 102 443 -99 2 51 L 0 363 H 938

		w = jQuery('.fusion-tb-header .fusion-fullwidth .border').outerWidth();
	    h = jQuery('.fusion-tb-header .fusion-fullwidth .border').outerHeight();
	    radius = 30;

	    jQuery('.fusion-tb-header .fusion-fullwidth .border').css('clip-path', 'path("M 0 0 H ' + w + ' V ' + h + ' C  ' + w + ' ' + (h - 10) + ' ' + w + ' ' + (h - radius) + ' ' + (w - radius) + ' ' + (h - radius) + ' H 40 C  ' + radius + ' ' + (h - radius) + '  0  ' + (h - radius) + '  0 ' + h + ' Z")');
	}

	checkifScrolled();

	function checkifScrolled(){
		if(jQuery(document).scrollTop() >= 1)
			jQuery('body').addClass('scrolled');
		else
			jQuery('body').removeClass('scrolled');
	}

	jQuery(document).scroll(function(){
		checkifScrolled();
	});

	jQuery('.team a.bio').click(function(){
		jQuery(this).closest('.team').toggleClass('opened');
		return false;
	});
	jQuery('.team .person-image-container a').click(function(){
		jQuery(this).closest('.team').toggleClass('opened');
		return false;
	});
}); 