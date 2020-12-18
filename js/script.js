/*$(window).scroll(function() {
	if ($(window).width() <=1200) {	
	  if ($(window).scrollTop() > 70) {
			$(".navbar").css("position","fixed")  
			$(".navbar").css("width","100%")  
			$(".navbar").css("top", "0"); 
		} else {
			$(".navbar").css("position","relative")  
	  }
	}
});*/

$('#searchBtnMobile').click(function() {
  $('#mobil-search-bar').slideToggle('slow');
});


$('#mobil-filter-enabled').click(function() {
	  $('#product-filters').slideToggle('slow');
});



$(function () {
	  'use strict'

	$("[data-trigger]").on("click", function(){
        var trigger_id =  $(this).attr('data-trigger');
        $(trigger_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
    });

    // close if press ESC button 
    $(document).on('keydown', function(event) {
        if(event.keyCode === 27) {
           $(".navbar-collapse-usermenu").removeClass("show");
           $("body").removeClass("overlay-active");
        }
    });

    // close button 
    $(".btn-close").click(function(e){
        $(".navbar-collapse-usermenu").removeClass("show");
        $("body").removeClass("offcanvas-active");
    }); 
	
	
	// close if press ESC button 
    $(document).on('keydown', function(event) {
        if(event.keyCode === 27) {
           $(".navbar-collapse-categories").removeClass("show");
           $("body").removeClass("overlay-active");
        }
    });

    // close button 
    $(".btn-close").click(function(e){
        $(".navbar-collapse-categories").removeClass("show");
        $("body").removeClass("offcanvas-active");
    }); 


})

