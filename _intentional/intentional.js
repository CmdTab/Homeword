function modalVideo() {
	var beginEmbed = '<div class="fitvids"><iframe src="https://player.vimeo.com/video/';
	var endEmbed = '?&amp;autoplay=1" width="1000" height="562" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
	jQuery('a[data-video]').click(function () {
		var videoID = jQuery(this).data('video');
		var videoEmbed = beginEmbed + videoID + endEmbed;
		jQuery('.modalContent').html(videoEmbed);
		jQuery(".fitvids").fitVids();
		jQuery('.modalVideo').addClass('showModal');
		return false;
	});
}
function closeModal() {
	//Click outside content
	jQuery('.modalVideo').click(function () {
		jQuery(this).removeClass('showModal');
		jQuery('.modalContent').html('');
		return false;
	});
	//Esc Key
	jQuery(document).keyup(function (e) {
		if (e.keyCode === 27) {
			jQuery('.modalVideo').removeClass('showModal');
			jQuery('.modalContent').html('');
		}
	});
	jQuery('.hideModal').click(function () {
		jQuery('.modalVideo').removeClass('showModal');
		jQuery('.modalContent').html('');
		return false;
	});
}
function navToggle() {
	jQuery('#toggle-nav').click(function() {
		jQuery('#intentional-nav').slideToggle();
		return false;
	});
}
function storeDropdown() {
	jQuery('.dd-trigger').click(function() {
		jQuery(this).siblings('.option-dropdown').slideToggle();
		return false;
	});
}
function sameHeight() {
	// Get an array of all element heights
  	var elementHeights = jQuery('.option-height').map(function() {
   	return jQuery(this).height();
  	}).get();

  	// Math.max takes a variable number of arguments
  	// `apply` is equivalent to passing each height as an argument
  	var maxHeight = Math.max.apply(null, elementHeights);

  	// Set each height to the max height
  	jQuery('.option-height').height(maxHeight);
}

function optionDetail() {
	// Get an array of all element heights
  	var elementHeights = jQuery('.option-details').map(function() {
   	return jQuery(this).height();
  	}).get();

  	// Math.max takes a variable number of arguments
  	// `apply` is equivalent to passing each height as an argument
  	var maxHeight = Math.max.apply(null, elementHeights);

  	// Set each height to the max height
  	jQuery('.option-details').height(maxHeight);
}

function cardHeight() {
	// Get an array of all element heights
  	var elementHeights = jQuery('.card-height').map(function() {
   	return jQuery(this).height();
  	}).get();

  	// Math.max takes a variable number of arguments
  	// `apply` is equivalent to passing each height as an argument
  	var maxHeight = Math.max.apply(null, elementHeights);

  	// Set each height to the max height
  	jQuery('.card-height').height(maxHeight);
}

function turnCard() {
	jQuery('.turn-btn').click(function() {
		if(jQuery( this ).hasClass( 'expanded' )) {
			jQuery( this ).removeClass( 'expanded' );
			jQuery( this ).siblings( '.front' ).css( 'display' , 'block');
			jQuery( this ).siblings( '.back' ).css( 'display' , 'none');
		} else {
			jQuery( this ).addClass( 'expanded' );
			jQuery( this ).siblings( '.back' ).css( 'display' , 'block');
			jQuery( this ).siblings( '.front' ).css( 'display' , 'none');
		}
		return false;
	});
}
function wayPoint() {
	jQuery('.intent-store').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path.png", "path-dot.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot.png", "path.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: 0 });

	jQuery('.intent-store').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot.png", "path-dot-1.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-1.png", "path-dot.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -100 });

	jQuery('.intent-store').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-1.png", "path-dot-2.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-2.png", "path-dot-1.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -300 });

	jQuery('.intent-store').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-2.png", "path-dot-3.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-3.png", "path-dot-2.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -600 });

	jQuery('.quiz').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-3.png", "path-dot-4.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-4.png", "path-dot-3.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: 0 });

	jQuery('.quiz').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-4.png", "path-dot-5.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-5.png", "path-dot-4.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -50 });

	jQuery('.quiz').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-5.png", "path-dot-6.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-6.png", "path-dot-5.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -100 });

	jQuery('.quiz').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-6.png", "path-dot-7.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-7.png", "path-dot-6.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -150 });

	jQuery('.quiz').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-7.png", "path-dot-8.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-8.png", "path-dot-7.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -200 });

	jQuery('.map-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-8.png", "path-dot-9.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-9.png", "path-dot-8.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: 40 });

	jQuery('.map-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-9.png", "path-dot-10.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-10.png", "path-dot-9.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -150 });

	jQuery('.map-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-10.png", "path-dot-11.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-11.png", "path-dot-10.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -250 });

	jQuery('.map-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-11.png", "path-dot-12.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-12.png", "path-dot-11.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -350 });

	jQuery('.who-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-12.png", "path-dot-13.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-13.png", "path-dot-12.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: 0 });

	jQuery('.who-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-13.png", "path-dot-14.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-14.png", "path-dot-13.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -50 });

	jQuery('.who-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-14.png", "path-dot-15.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-15.png", "path-dot-14.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -80 });

	jQuery('.who-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-15.png", "path-dot-16.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-16.png", "path-dot-15.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -120 });

	/*jQuery('.intent-store').waypoint(function(direction) {

	    if (direction == 'down') {
	    		jQuery('.path-content').addClass('path-store');
	    } else {
	        jQuery('.path-content').removeClass('path-store');
	    }
	}, { offset: 0 });

	jQuery('.quiz').waypoint(function(direction) {

	    if (direction == 'down') { jQuery('.path-content').addClass('path-quiz');
	    } else {
	        jQuery('.path-content').removeClass('path-quiz');
	    }
	}, { offset: 200 });

	jQuery('.videos').waypoint(function(direction) {

	    if (direction == 'down') { jQuery('.path-content').addClass('path-video');
	    } else {
	        jQuery('.path-content').removeClass('path-video');
	    }
	}, { offset: 200 });

	jQuery('.map-section').waypoint(function(direction) {

	    if (direction == 'down') { jQuery('.path-content').addClass('path-why');
	    } else {
	        jQuery('.path-content').removeClass('path-why');
	    }
	}, { offset: 0 });

	jQuery('.who-section').waypoint(function(direction) {

	    if (direction == 'down') { jQuery('.path-content').addClass('path-who');
	    } else {
	        jQuery('.path-content').removeClass('path-who');
	    }
	}, { offset: 200 });*/

}

jQuery(document).ready(function() {
	var vw = jQuery(window).width();
	if (vw > 800) {
		jQuery('.video-slider').bxSlider({
			ticker: false,
			minSlides: 3,
			maxSlides: 3,
			slideWidth: 300,
			slideMargin: 16,
			tickerHover: true,
			pager: false,
			moveSlides: 1,
			auto: true
		});
	}
	if (vw < 800) {
		optionDetail();
		sameHeight();
		turnCard();
		jQuery('.video-slider').bxSlider({
			ticker: false,
			minSlides: 2,
			maxSlides: 2,
			slideWidth: 300,
			slideMargin: 16,
			tickerHover: true,
			pager: false,
			moveSlides: 1,
			auto: true
		});
	}
	cardHeight();
	wayPoint();
	modalVideo();
	closeModal();
	navToggle();
	storeDropdown();
	jQuery('.quote-slider').bxSlider({
		ticker: false,
		minSlides: 1,
		maxSlides: 1,
		slideWidth: 800,
		slideMargin: 0,
		pager: false,
		auto: true,
		startSlide: 1,
		autoDirection: 'prev'
	});
});