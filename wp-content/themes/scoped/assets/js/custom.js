(function($) {
  'use strict';

  // Testimonials
  // var testimonials = $('#testimonials');
  // if (testimonials.length > 0) {
  //   testimonials.owlCarousel({
  //     loop: true,
  //     margin: 0,
  //     items: 1,
  //     nav: false,
  //     dots: true
  //   })
  // } 


  //Avoid pinch zoom on iOS 
  document.addEventListener('touchmove', function(event) {
    if (event.scale !== 1) {
      event.preventDefault();
    }
  }, false);
    
  jQuery(window).on("load", function (e) {  
    //mobileElements(); 
  
    setTimeout(function(){ 
      jQuery('.mainloader').hide();
    }, 1000);
   
    }); 

  

  

})(jQuery)


jQuery(document).ready(function(){
jQuery('#search_btn').click(function(){
  jQuery('.search-main').fadeIn();
});
jQuery('#close_btn').click(function(){
  jQuery('.search-main').fadeOut();
});
// theme change

jQuery('#change_theme_btn').click(function(){
  jQuery(this).toggleClass('rotation') 
  jQuery('svg.theme-svg').toggleClass('dark-theme-svg');   
  jQuery('body').toggleClass('dark-theme'); 
}); 
 

jQuery('.cookies-close-btn').click(function(){
     jQuery('.cookies-sec').slideUp('slow');
}); 


 

  var btn = jQuery('#top_arrow');

  jQuery(window).scroll(function() { 
    if (jQuery(window).scrollTop() > 500) {
      btn.addClass('show'); 
    } else {
      btn.removeClass('show'); 
    }
  }); 
   
  btn.on('click', function(e) {
    e.preventDefault();
    jQuery('html, body').animate({scrollTop:0}, '300');
  });


// modal js


jQuery('#login-btn').click(function(){
  jQuery('#register').modal('hide');
})
jQuery('#register-btn').click(function(){
  jQuery('#login').modal('hide');
})
jQuery('#forgot-btn').click(function(){
  jQuery('#login').modal('hide');
})





});



  // blog_page


jQuery(window).on('scroll' , function(){
     
// var headerHeight = jQuery(".banner").outerHeight(); 
    
    if(jQuery(window).scrollTop() >= 300)
        {
            jQuery('.navbar').addClass('animated fadeInDown sticky');

        } 
    else{   
      jQuery('.navbar').removeClass('animated fadeInDown sticky');
}
    });
    
    


 new WOW().init(); 

  AOS.init(); 




 
  // textarea first letter capitalize 
  
jQuery('.firstCap').on('keypress', function(event) {
var $this = jQuery(this),
thisVal = $this.val(),
FLC = thisVal.slice(0, 1).toUpperCase();
con = thisVal.slice(1, thisVal.length);
jQuery(this).val(FLC + con);
});
 

 






