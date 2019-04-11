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

});// END #####################################    END