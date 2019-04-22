/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*== Responsive iFrames ==*/
	var $all_oembed_videos = $("iframe[src*='youtube']");
	$all_oembed_videos.each(function() {
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
 	});
	

	/*== Flexslider ==*/
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	

	/*== Colorbox ==*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});

	/*== Equal Heights Divs ==*/
	$('.js-blocks').matchHeight();


	/*== Wow Animation ==*/
	new WOW().init();


	/*== Toggle Menu For Small Screen ==*/
	$(document).on("click","#toggleMenu",function(e){
		e.preventDefault();
		$(this).toggleClass('open');
		$('.main-navigation').toggleClass('open-menu');
		$('body').toggleClass('open-mobile-menu');
	});

	// $(document).on("click",".boxinfo.has-inner-content",function(e){
	// 	e.preventDefault();
	// 	$(this).addClass('open');
	// 	// var parent = $(this).parents(".flexcol");
	// 	// parent.find('.box-inner-content').addClass('show');
	// });

	$(".boxinfo.has-inner-content").hover(
		function(){
			$(this).addClass('open');
		}, function () {
			$(this).removeClass('open');
		}
	);

	$(document).on("click",".news-overlay",function(){
		$(this).fadeOut();
	});

	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      	// Figure out element to scroll to
	      	var target = $(this.hash);
	      	target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      	// Does a scroll target exist?
			if (target.length) {
				// Only prevent default if animation is actually gonna happen
				event.preventDefault();
				$('html, body').animate({
				  scrollTop: target.offset().top
				}, 1000, function() {
				  // Callback after animation
				  // Must change focus!
				  var $target = $(target);
				  //$target.focus();
				  if ($target.is(":focus")) { // Checking if the target was focused
				    return false;
				  } else {
				    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
				    //$target.focus(); // Set focus again
				  };
				});
			}
	    }
	});


	$(document).on("change","select#location_selections",function(){
		var location = $(this).val();
		var selector = $("#"+location);
		if( location ) {
			var target = $('.link_'+location);
			target.trigger('click');
		}
	});


});// END #####################################    END