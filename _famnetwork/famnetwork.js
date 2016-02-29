function navToggle() {
	jQuery('#toggle-nav').click(function() {
		jQuery('#famnetwork-nav').slideToggle();
		return false;
	});
}

function stickyNav() {
	jQuery('.site').waypoint(function(direction) {
	   if (direction == 'down') {
	   	jQuery('.site-header').addClass('sticky-nav');
	   } else {
	   	jQuery('.site-header').removeClass('sticky-nav');
	   }
	}, { offset: -100 });
}

jQuery(document).ready(function() {
	var vw = jQuery(window).width();
	if (vw > 800) {
		stickyNav();
	}
	if (vw < 800) {
		
	}
	navToggle();
});