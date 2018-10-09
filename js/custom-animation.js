jQuery(window).scroll(function() {	
	jQuery('#pagearea .container').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});
	
	jQuery('.themefeatures .best-featurs').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInDown");
			}
		});	
		 
	jQuery('.themefeatures .one_half.last_column').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInRight");
			}
		});	
		
	jQuery('.projectwrap').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});		
		
	 jQuery('.promo-box').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("bounceIn");
			}
		});		 
	
	 
	 jQuery('.feature-wrap .frdbox').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});		 
	
	 
	 jQuery('.processbox').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInRight");
			}
		});	
	 
	 jQuery('.shopwrap').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});	
	 
	 jQuery('.teamwrapsection').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInRight");
			}
		});	
	 
	jQuery('.tmnlwraparea').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});	
	
	jQuery('.clientwrap').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInRight");
			}
		});	
	
	jQuery('.blogpostwrap').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});
	
	jQuery('.gallerywrap').each(function(){
		var imagePos = jQuery(this).offset().top;
		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInDown");
			}
		});	
		
	});