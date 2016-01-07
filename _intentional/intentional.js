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

jQuery(document).ready(function() {
	modalVideo();
	closeModal();
	navToggle();
	storeDropdown();
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