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
	
	/* FAQ dropdowns */
	$('.question').click(function() {
	    $(this).next('.answer').slideToggle(500);
	    $(this).toggleClass('close');
	    $(this).find('.plus-minus-toggle').toggleClass('collapsed');
	    $(this).parent().toggleClass('active');
	});

	/*== Flexslider ==*/
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	

	/*== Colorbox ==*/
	$('a.gallery, a.popup').colorbox({
		rel:'gal',
		maxWidth: '95%',
		maxHeight: '90%'
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

	$(document).on("click","li.tabName",function(e){
		e.preventDefault();
		var tabname = $(this).attr('data-panel');
		if( $(tabname).length ) {
			$(".tabswrapper *").removeClass('active');
			$("[data-panel="+tabname+"]").addClass('active');
			$(tabname).addClass('active');
		}
	});

	$(document).on("click","h2.tabName",function(e){
		var tabname = $(this).attr('data-panel');
		if( $(tabname).length ) {
			var is_active = ( $('div'+tabname).hasClass('active') ) ? true : false; 
			if( is_active ) {
				$(tabname).removeClass('active');
				$("[data-panel="+tabname+"]").removeClass('active');
			} else {
				$('.tab-content').removeClass("active");
				$("[data-panel="+tabname+"]").addClass('active');
				$(tabname).addClass('active');
			}
		}
	});


	$('.swipe-projects').slick({
		dots: true,
		infinite: true,
		autoplay: true,
  		autoplaySpeed: 2000,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		centerMode: false,
  		variableWidth: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
				}
			},
				{
				breakpoint: 600,
				settings: {
				slidesToShow: 2,
				slidesToScroll: 2
				}
			},
				{
				breakpoint: 480,
				settings: {
				slidesToShow: 1,
				slidesToScroll: 1
				}
			}
		]
	});


	$(".js-select,select.gfield_select").select2({
		placeholder: "Select...",
	    allowClear: true
	}).on("select2:unselecting", function(e) {
	    $(this).data('state', 'unselected');
	    $('input.allow-reset').val("");
	}).on("select2:open", function(e) {
	    if ($(this).data('state') === 'unselected') {
	        $(this).removeData('state'); 
	        var self = $(this);
	        setTimeout(function() {
	            self.select2('close');
	        }, 1);
	    }    
	});

	$(document).on("change","select#location_options",function(){
		var selected = $(this).val();
		if(selected) {
			window.location.href = selected;
		}
	});

	/* Sticky Sidebar */
	var a = new StickySidebar('.sticky_sidebar', {
		topSpacing: 60,
		bottomSpacing: 60,
		containerSelector: '#main',
		innerWrapperSelector: '.sidebar__inner'
	});

});// END #####################################    END