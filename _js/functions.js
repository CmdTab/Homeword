function navDropdown() {
	jQuery('.with-sub > a').click(function() {
		if(jQuery(this).parent().hasClass('expand')) {
			jQuery('.with-sub').removeClass('expand');
			jQuery(this).children('span').attr("data-icon", 'u');
		} else {
			jQuery('.with-sub').removeClass('expand');
			jQuery('.with-sub > a').children('span').attr("data-icon", 'u');
			jQuery(this).parent().toggleClass('expand');
			jQuery(this).children('span').attr("data-icon", 'd');
		}
		return false;
	});
}
function sidebarHeight() {
	var mainHeight = jQuery('.content-section').outerHeight() + 7;
	var sideHeight = jQuery('.sidebar-section').outerHeight();
	if(mainHeight > sideHeight) {
		jQuery('.sidebar-section').css('height',mainHeight);
	}

}
function toggleNav() {
	jQuery('.toggle-nav').click(function() {
		jQuery('body').toggleClass('show-nav');
		return false;
	});
}
function showTabs() {
	jQuery('.tabs-toggle').click(function() {
		jQuery(this).siblings('li:not(.active)').slideToggle();
		jQuery(this).parent().toggleClass('shown');
		return false;
	});
}
function hideLabel() {
	jQuery( '.search-field' ).focus(function() {
		jQuery(this).parents('.search-form').addClass('focus');
	});
	jQuery( '.search-field' ).blur(function() {
		if( !jQuery(this).val() ) {
			jQuery('.search-form').removeClass('focus');
		}
	});
	jQuery( '.field input' ).focus(function() {
		jQuery(this).parent().addClass('focus');
	});
	jQuery( '.field input' ).blur(function() {
		if( !jQuery(this).val() ) {
			jQuery(this).parent().removeClass('focus');
		}
	});
}
function showModal() {
	jQuery('.toggle-overlay').click(function() {
		jQuery(this).next('.modal').toggleClass('modal-show');
		return false;
	});
	jQuery('.modal-overlay').click(function() {
		jQuery('.modal').removeClass('modal-show');
		return false;
	});
	jQuery('.close-overlay').click(function() {
		jQuery(this).parent('.modal').removeClass('modal-show');
		return false;
	});
}
function activeNav() {
	var getCat = location.search.replace('?', '').split('=');
	if(getCat[1] === 'families') {
		jQuery('.current-menu-item').parents('.family-nav').addClass('current');
	} else if(getCat[1] === 'church') {
		jQuery('.current-menu-item').parents('.church-nav').addClass('current');
	} else {
		jQuery('.current-menu-item').parents('.about-nav').addClass('current');
	}
}
function removeBorder() {
	jQuery('.archive .entry-excerpt').last().css('border-bottom', '0');
}
/*function cartHeights() {
	var nameHeight = jQuery('.cart-name').outerHeight();
	jQuery('.shop_table.cart li > div').css('height', nameHeight);
}*/
function cartCookie() {
	var cartCount = jQuery.cookie("woocommerce_cart_total");
	if (typeof(cartCount) !== "undefined" && parseInt(cartCount, 10) > 0) {
		jQuery('.cart-contents').show();
	} else {
		jQuery('.cart-contents').hide();
	}
}
function tabLabels() {
	jQuery('.tab-signup input[type=email]').keydown(function() {
		jQuery(this).siblings('label').hide();
	});
	jQuery('.tab-signup input[type=email]').blur(function() {
		if(!jQuery(this).val()) {
			jQuery(this).siblings('label').show();
		}
	});
	/*jQuery('.tab-signup label').click(function() {
		jQuery(this).siblings('input[type=email]').focus();
	});*/
}
/*function stockGift() {
	jQuery('.donate-frequency input[value=stock] + label').click(function() {
		jQuery('.stock-link a')[0].click();
		return false;
	});
}*/
function otherAmount() {
	jQuery('.other-amount input').focus(function() {
		jQuery('.donate-amounts input').prop('checked', false);
	});
	jQuery('.donate-amounts input').change(function() {
		jQuery('.other-amount input').val(0);
	});
}

jQuery(document).ready(function() {
	//var vw = jQuery(window).width();
	navDropdown();
	toggleNav();
	showTabs();
	hideLabel();
	showModal();
	activeNav();
	removeBorder();
	cartCookie();
	tabLabels();
	//stockGift();
	otherAmount();

});
jQuery(window).load(function() {
	var vw = jQuery(window).width();
	if (vw > 800) {
		sidebarHeight();
		//cartHeights();
	}
});

jQuery(window).resize(function() {
	jQuery('body').removeClass('show-nav');
});