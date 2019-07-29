/**
 * Back To Top function
 **/
 jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.btt-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
    }, scroll_top_duration
    );
	});

});

/**
 * Smooth Scrolling
 **/

 jQuery(document).ready(function ($) {
   // Select all links with hashes
   $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .not('.panel a')
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
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
});

/**
 * Global smart resize function
 **/

 (function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
    var timeout;

    return function debounced () {
      var obj = this, args = arguments;
      function delayed () {
        if (!execAsap)
          func.apply(obj, args);
        timeout = null; 
      };

      if (timeout)
        clearTimeout(timeout);
      else if (execAsap)
        func.apply(obj, args);

      timeout = setTimeout(delayed, threshold || 100); 
    };
  }
    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

  })(jQuery,'smartresize');

/**
 * Controls the mobile navigation
 **/
 jQuery(document).ready(function(){
  $('.navbar-toggle').on('click', function(){
    $(this).toggleClass('collapsed');
    $('.mobile-navbar').slideToggle();
    $(this).toggleClass('fixed');
  });
})

/**
 * Allows same height columns
 **/

 jQuery(document).ready(function($){
  $(function() {
    $('.box').matchHeight();
  });
});

/**
 * Controls Video Modal
 **/

jQuery(document).ready(function($){
  $('.video-wrapper .play-btn').on('click', function(){
    $(this).siblings('.takeover').css('display', 'block');
    $(this).siblings('iframe').addClass('popout');
    $('.sec-5 .row .col-xs-12').css({'transform': 'none', 'top': '0'});

    //Controls video
    $(this).siblings('iframe').get(0).currentTime = 0;
    $(this).siblings('iframe').prop('controls', true);
    $(this).siblings('iframe').get(0).play();
    $(this).siblings('iframe').prop('muted', false);
  });
  $('.video-wrapper .takeover').on('click', function(){
    $(this).hide();
    $(this).siblings('iframe').removeClass('popout');
    $('.sec-5 .row .col-xs-12').css({'transform': 'translateY(-50%)', 'top': '50%'});

    //Controls video
    $(this).siblings('iframe').prop('controls', false);
    $(this).siblings('iframe').prop('muted', true);
    $(this).siblings('iframe').get(0).load();
  });
});

 jQuery(document).ready(function($){
  $('.page-template-page-blog #menu-item-76').addClass('active');
  $('.post-type-archive-recent-news #menu-item-76').addClass('active');
  $('.page-id-422 #menu-item-76').addClass('active');
});

 jQuery(document).ready(function($){
  $('.post-type-archive-recent-news .page-title').text('Recent News');
  $('.post-type-archive-recent-news .menu-item-75').addClass('active');
});

 jQuery(document).ready(function($){
  $('.panel .panel-heading').on('click', function () {
    $(this).parents('.panel-group').find('svg').removeClass('fa-minus');
    $(this).parents('.panel-group').find('svg').addClass('fa-plus');
    var a = $(this).closest('a');
    if ($(a).hasClass('collapsed')) {
      $(this).find('svg').removeClass('fa-plus');
      $(this).find('svg').addClass('fa-minus');
    } else {
      $(this).find('svg').removeClass('fa-minus');
      $(this).find('svg').addClass('fa-plus');
    };
  });
});

jQuery(document).ready(function($){
  $('.nav-links .nav-next a').text('Next Post');
  $('.nav-links .nav-previous a').text('Previous Post');
});