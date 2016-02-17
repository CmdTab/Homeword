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

function freeDownload() {
	// Get an array of all element heights
  	var elementHeights = jQuery('.download-content h1').map(function() {
   	return jQuery(this).height();
  	}).get();

  	// Math.max takes a variable number of arguments
  	// `apply` is equivalent to passing each height as an argument
  	var maxHeight = Math.max.apply(null, elementHeights);

  	// Set each height to the max height
  	jQuery('.download-content h1').height(maxHeight);
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
		if(jQuery( this ).parent( '.front , .back' ).parent( '.flipper' ).parent( '.flip-container' ).hasClass( 'hover' )) {
			jQuery( this ).parent( '.front , .back' ).parent( '.flipper' ).parent( '.flip-container' ).removeClass( 'hover');
		} else {
			jQuery( this ).parent( '.front , .back' ).parent( '.flipper' ).parent( '.flip-container' ).addClass( 'hover');
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
	}, { offset: 20 });

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
	}, { offset: -500 });

	jQuery('.quiz').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-3.png", "path-dot-4.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-4.png", "path-dot-3.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: 100 });

	jQuery('.quiz').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-4.png", "path-dot-5.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-5.png", "path-dot-4.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: 0 });

	jQuery('.quiz').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-5.png", "path-dot-6.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-6.png", "path-dot-5.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -50 });

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
	}, { offset: 100 });

	jQuery('.map-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-9.png", "path-dot-10.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-10.png", "path-dot-9.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: 0 });

	jQuery('.map-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-10.png", "path-dot-11.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-11.png", "path-dot-10.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -200 });

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
	}, { offset: 100 });

	jQuery('.who-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-13.png", "path-dot-14.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-14.png", "path-dot-13.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: 0 });

	jQuery('.who-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-14.png", "path-dot-15.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-15.png", "path-dot-14.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -50 });

	jQuery('.who-section').waypoint(function(direction) {

	   if (direction == 'down') {
	    	var src = jQuery( '.path' ).attr("src").replace("path-dot-15.png", "path-dot-16.png");
         jQuery( '.path' ).attr("src", src);
	   } else {
	      var src = jQuery( '.path' ).attr("src").replace("path-dot-16.png", "path-dot-15.png");
         jQuery( '.path' ).attr("src", src);
	   }
	}, { offset: -100 });

}

function inputOverlay() {
	jQuery('.option-free .gform_fields .gfield .medium').keydown(function() {
		jQuery('.option-free .gfield label').css('display', 'none');
	});
	jQuery('.option-free .gform_fields .gfield .medium').blur(function() {
		if(!jQuery( this ).val()) {
			jQuery('.option-free .gfield label').css('display', 'inline');
		}
	});
	jQuery('.option-free .gform_fields .gfield .medium').each(function() {
		if(jQuery( this ).val() !='') {
			jQuery('.option-free .gfield label').css('display', 'none');
		}
	});
}

function churchForm() {
	jQuery( '.bulk-details, .bulk-details-close' ).click(function() {
		if(jQuery( '.bulk-details-form' ).hasClass( 'visible' )) {
			jQuery( '.bulk-details-form' ).removeClass( 'visible');
		} else {
			jQuery( '.bulk-details-form' ).addClass( 'visible');
		}
		return false;
	});
}

function confirmDownload() {
	jQuery(document).bind('gform_confirmation_loaded', function(){
   	jQuery( '.free-download' ).addClass( 'free-unlocked' );
   	jQuery( '.download-content' ).addClass( 'download-unlocked' );
   	jQuery( '.download-content a' ).attr('onclick', '');
   	jQuery( '.free-download-success' ).css( 'display' , 'block' );
	});
}

function submitForm() {
	jQuery(document).ready(function(){
		if(jQuery( '.thank-you' ).is( ':visible' )) {
			jQuery( '.gform_footer input[type=submit]' ).css( 'display' , 'none' );
			jQuery( '.free-download' ).addClass( 'free-unlocked' );
	   	jQuery( '.download-content' ).addClass( 'download-unlocked' );
	   	jQuery( '.download-content a' ).attr('onclick', '');
		} else {
			return false;
		}
	});
}

jQuery(document).ready(function() {
	var vw = jQuery(window).width();
	if (vw > 800) {
		cardHeight();
		freeDownload();
		jQuery('.video-slider').bxSlider({
			ticker: false,
			minSlides: 3,
			maxSlides: 3,
			slideWidth: 300,
			slideMargin: 16,
			tickerHover: true,
			pager: false,
			moveSlides: 1,
			auto: true,
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
			auto: true,
		});
	}
	submitForm();
	churchForm();
	confirmDownload();
	inputOverlay();
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
		autoDirection: 'prev',
		pause: 10000
	});
});