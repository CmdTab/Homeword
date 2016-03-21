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

function resourceTabs() {
	jQuery('.nav-tabs a').click(function (e) {
		e.preventDefault()
		jQuery(this).tab('show')
	});
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

jQuery(document).ready(function() {
	var vw = jQuery(window).width();
	if (vw > 800) {
		stickyNav();
	}
	if (vw < 800) {
		
	}
	turnCard();
	navToggle();
});