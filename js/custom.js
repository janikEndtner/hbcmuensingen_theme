jQuery(document).ready( function(){
	var ww = jQuery(window).width();	
	jQuery("area[rel^='prettyPhoto']").prettyPhoto();
	jQuery(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
	jQuery(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
	jQuery("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
		custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
		changepicturecallback: function(){ initialize(); }
	});
	jQuery("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
		custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
		changepicturecallback: function(){ _bsap.exec(); }
	});

	// accordion
    jQuery('.accordion-box .acc-content').hide();
    jQuery('.accordion-box h2:first').addClass('active').next().show();
    jQuery('.accordion-box h2').click(function(){
        if( jQuery(this).next().is(':hidden') ) {
            jQuery('.accordion-box h2').removeClass('active').next().slideUp();
            jQuery(this).toggleClass('active').next().slideDown();
        }
        return false; // Prevent the browser jump to the link anchor
    });
	
	// Tabs
	jQuery('ul.tabs > br').remove();
	jQuery('.tabs-wrapper').append(jQuery('.tabs li div'));
	jQuery('.tabs li:first a').addClass('defaulttab selected');
	jQuery('.tabs a').click(function(){
		switch_tabs(jQuery(this));
	});
	switch_tabs(jQuery('.defaulttab'));
	function switch_tabs(obj) {
		jQuery('.tab-content').hide();
		jQuery('.tabs a').removeClass("selected");
		var id = obj.attr("rel");
		jQuery('#'+id).show();
		obj.addClass("selected");
	}

	// Content Toggle
    jQuery(".slide_toggle_content").hide();
    jQuery("h3.slide_toggle").toggle(function(){
	    jQuery(this).addClass("clicked");
	}, function () {
	    jQuery(this).removeClass("clicked");
    });
    jQuery("h3.slide_toggle").click(function(){
		jQuery(this).next(".slide_toggle_content").slideToggle();
    });

});

jQuery(window).load(function() { 
   jQuery('#testimonials .quotes').quovolver({
      children    : 'div',
      transitionSpeed : 600,
      autoPlay    : true,
	  autoPlaySpeed:6000,
      equalHeight   : false,
      navPosition   : 'below',
      navPrev     : true,
      navNext     : true,
      navNum      : true,
      navText     : false,
      navTextContent  : 'Quote @a of @b'
    });    
  });

// NAVIGATION CALLBACK
var ww = jQuery(window).width();
jQuery(document).ready(function() { 
	jQuery(".sitenav li a").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})
	jQuery(".toggleMenu").click(function(e) { 
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery(".sitenav").slideToggle('fast');
	});
	adjustMenu();
})

// navigation orientation resize callbak
jQuery(window).bind('resize orientationchange', function() {
	ww = jQuery(window).width();
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 981) {
		jQuery(".toggleMenu").css("display", "block");
		if (!jQuery(".toggleMenu").hasClass("active")) {
			jQuery(".sitenav").hide();
		} else {
			jQuery(".sitenav").show();
		}
		jQuery(".sitenav li").unbind('mouseenter mouseleave');
	} else {
		jQuery(".toggleMenu").css("display", "none");
		jQuery(".sitenav").show();
		jQuery(".sitenav li").removeClass("hover");
		jQuery(".sitenav li a").unbind('click');
		jQuery(".sitenav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
			jQuery(this).toggleClass('hover');
		});
	}
}


jQuery(document).ready(function() {
  	jQuery('.srchicon').click(function() {
			jQuery('.searchtop').toggle();
			jQuery('.topsocial').toggle();
		});	
});

// skill bar script
jQuery(document).ready(function() {
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});

jQuery(document).ready(function(){
	// hide #back-top first
	jQuery("#back-top").hide();	
	// fade in #back-top
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 0) {
				jQuery('#back-top').fadeIn();
			} else {
				jQuery('#back-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		jQuery('#back-top').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});
	});

});

//Client Logo jquery   
jQuery(window).load(function() { 
    jQuery("#flexiselDemo3").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });    
});

//Client Logo jquery   
jQuery(window).load(function() { 
    jQuery("#SidebarRoator").flexisel({
        visibleItems: 1,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 1
            },
            tablet: { 
                changePoint:768,
                visibleItems: 1
            }
        }
    });    
});

jQuery(document).ready(function() {    
  jQuery('.recentproject_list').owlCarousel({
    loop:true,
	autoplay:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
    
  });


jQuery(document).ready(function() {
        jQuery('.footertest h5, .counter, .offdesc h6').each(function(index, element) {
            var heading = jQuery(element);
            var word_array, last_word, first_part;

            word_array = heading.html().split(/\s+/); // split on spaces
            last_word = word_array.pop();             // pop the last word
            first_part = word_array.join(' ');        // rejoin the first words together

            heading.html([first_part, ' <span>', last_word, '</span>'].join(''));
        });
});