(function( $ ) {

$.hisrc.speedTest({ speedTestUri: '50K.jpg' });

$(document).ready(function(){

  //Enable hisrc
  $(".hisrc img").hisrc({
	useTransparentGif: false,
    speedTestUri: '50K.jpg'
	//transparentGifSrc: 'TEST/spacer.gif' // use for IE
  });

  //Add class animation-hidden via jquery above
  $('.home .site-inner article').viewportChecker({
  	classToAdd: 'animation-visible animated fadeIn',
  	offset: 200
  });

  //Add sticky id
  $("#sticky_item").stick_in_parent();
  
});

	

})(jQuery);