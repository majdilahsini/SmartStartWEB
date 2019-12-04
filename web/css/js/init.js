(function($) {
  
    "use strict";
    
    function animationEndEventName() {
  		var i,
  			el = document.createElement('div'),
  			animations = {
  				'animation': 'animationend',
  				'oAnimation': 'oAnimationEnd',
  				'MSAnimation': 'MSAnimationEnd',
  				'mozAnimation': 'mozAnimationEnd',
  				'WebkitAnimation': 'webkitAnimationEnd'
  			};
  		for (i in animations) {
  			if (animations.hasOwnProperty(i) && el.style[i] !== undefined) {
  				return animations[i];
  			}
  		}
  	}
  	
    /*
    |===================
    | SLIDER Preloader
    |===================
    */
    
    $(window).on('load', function() {
        var slider_preloader_status = $(".slider_preloader_statusr");
        var slider_preloader =  $(".slider_preloader");
        var header_slider =  $(".header-slider");
        
        slider_preloader_status.fadeOut();
        slider_preloader.delay(350).fadeOut('slow');
        header_slider.removeClass("header-slider-preloader");
    })
    
    
    
/*
|===================
| SLIDER JS
|===================
*/
    
  $(window).on('load', function(){
    // Home 1slide
      $('#header-slider #animation-slide').owlCarousel({
            autoHeight: true,
            items: 1,
            loop: true,
            autoplay: true,
            dots: true,
            nav: true,
            autoplayTimeout: 7000,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            animateIn: "zoomIn",
            animateOut: "fadeOutDown",
            autoplayHoverPause: false,
            touchDrag: true,
            mouseDrag: true
      });
      $("#animation-slide").on("translate.owl.carousel", function () {
          $(this).find(".owl-item .slide-text > *").removeClass("fadeInUp animated").css("opacity","0");
          $(this).find(".owl-item .slide-img").removeClass("fadeInRight animated").css("opacity","0");
      });          
      $("#animation-slide").on("translated.owl.carousel", function () {
          $(this).find(".owl-item.active .slide-text > *").addClass("fadeInUp animated").css("opacity","1");
          $(this).find(".owl-item.active .slide-img").addClass("fadeInRight animated").css("opacity","1");
      });
      
  });
    
    
    
    
  $(".uv-accordinaton-list").on( "click", function() {
    $(this).next().slideToggle(200);
    $(this).find(">:first-child");
    if($(this).find(">:first-child").text() == "+") {
      $(this).find(">:first-child").text("-");
      $(this).find("h2").addClass("hilighted");
    } else {
      $(this).find(">:first-child").text("+");
      $(this).find("h2").removeClass("hilighted");
    }
  });
    
    
    
  /*
  |=====================
  | NAV FIXED ON SCROLL
  |=====================
  */
      
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 55) {
            $(".nav-scroll").addClass("strict");
        } else {
            $(".nav-scroll").removeClass("strict");
        }
    });
    
    /*
    |====================
    | Mobile NAv trigger
    |====================
    */
  
        var trigger = $('.navbar-toggle'),
        overlay     = $('.overlay'),
        active      = false;
      
        $('.navbar-toggle, #navbar-nav li a, .overlay').on('click', function () {
            $('.navbar-toggle').toggleClass('active')
            $('#js-navbar-menu').toggleClass('active');
            overlay.toggleClass('active');
        });  
      
        $('#mobile-menu-active').meanmenu();
          var win = $(window);
          var headerArea = $('.menu-spacing ');
          var header3 = $('.menu-spacing ');
          var stick = 'stick';
          var stick2 = 'stick2';
      
            win.on('scroll',function() {    
             var scroll = win.scrollTop();
             if (scroll < 245) {
              headerArea.removeClass(stick);
             }else{
              headerArea.addClass(stick);
             }
            });
            win.on('scroll',function() {    
             var scroll = win.scrollTop();
             if (scroll < 100) {
              header3.removeClass(stick2);
             }else{
              header3.addClass(stick2);
             }
        });
        
    $( document ).ready(function() {
      $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      })
    /*=============================================>>>>>
    PROGRESS BARS 
    ===============================================>>>>>*/
		var progressElems = document.querySelectorAll('.progress');
		Array.prototype.forEach.call(progressElems, function (el, i) {
			var progressVal = el.getAttribute('data-progress'),
				progress;
			if ($(el).hasClass('progress-line')) {
				progress = new ProgressBar.Line(progressElems[i], {
					strokeWidth: 5,
					easing: 'easeInOut',
					trailWidth: 5,
					text: {
						value: '0',
						style: {
						}
					},
					svgStyle: {width: '100%', height: '100%'},
					step: function(state, bar) {
						bar.setText((bar.value() * 100).toFixed(0) + '%');
					}
				});
			} else {
				progress = new ProgressBar.Circle(progressElems[i], {
					strokeWidth: 5,
					easing: 'easeInOut',
					trailWidth: 5,
					text: {
						value: '0'
					},
					step: function(state, bar) {
						bar.setText((bar.value() * 100).toFixed(0) + '%');
					}
				});
			}
			$(el).bind('inview', function(event, isInView) {
				if (isInView) {
					if (!$(el).hasClass('active')) {
						progress.animate(progressVal / 100);
						$(el).addClass('active');
					}
				}
			});
		});
    /*
    |===========
    | FANCYBOX
    |===========
    */
    
    $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

    
    
    $("[data-fancybox]").fancybox({});
        
        
      
    $('.select-beast').selectize({
      create: false,
      sortField: [{field: 'Descripcion', direction: 'desc'}, {field: '$score'}],
      dropdownParent: 'body'
    });
    
    
    
    
/*
|=========================
| searchbar
|=========================
*/ 
    
    $('#besocial-header-right').on('click',function(){
      $('#besocial-search-bar').toggleClass("show-search-bar");
      $('#besocial-header-right').toggleClass("scroll-search-icon");
    });
    
/*
|=========================
| VIDEO
|=========================
*/
    $('.video-player').fitVids();
    
    /*
    |================
    | choosen
    |================
    */
    
    
    if($(".find_course_search").length){
        $(".find_course_search").chosen()
    }
    if($(".gt_d_privacy_dd").length){
        $(".gt_d_privacy_dd").chosen()
    }
/*
|================
| ANIMATION
|================
*/

    var wow = new WOW({
        mobile: false  // trigger animations on mobile devices (default is true)
    });
    wow.init();
      
/*
|===================
| EVENT SLIDE 
|===================
*/
      
    $('#uv-carousel').owlCarousel({
        loop: false,
        responsiveClass: true,
        nav: true,
        autoplay: true,
        stopOnHover : true,
        autoplayHoverPause:true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive:{
          0:{
              items: 1,
              nav: true,
              loop:true
          },
          768:{
              items: 2,
              nav:true,
              loop:true
          },
          992:{
              items: 3,
              nav:true,
              loop:true
          }
        }
    });
    
    $('#uv-blog-carousel').owlCarousel({
        loop: false,
        responsiveClass: true,
        nav: true,
        autoplay: true,
        stopOnHover : true,
        autoplayHoverPause:true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive:{
          0:{
              items: 1,
              nav: true,
              loop:true
          },
          768:{
              items: 2,
              nav:true,
              loop:true
          },
          992:{
              items: 3,
              nav:true,
              loop:true
          }
        }
    });
    
    $('#uv-course-slide').owlCarousel({
        loop: true,
        responsiveClass: true,
        nav: true,
        autoplay: true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        smartSpeed: 450,
        stopOnHover : true,
        animateIn: 'slideInRight',
        animateOut: 'slideOutLeft',
        autoplayHoverPause:true,
        responsive: {
          0: {
            items: 1,
            nav: true,
            loop:true
          },
          768: {
            items: 1,
            nav: true,
            loop:true
          },
          1170: {
            items: 1,
            nav: true,
            loop:true
          }
        }
    });
    $('#uv-logo-slide').owlCarousel({
        loop: false,
        responsiveClass: true,
        nav: false,
        autoplay: true,
        autoplayHoverPause:true,
        // navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        smartSpeed: 450,
        stopOnHover : true,
        margin: 0,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 4,
          },
          992: {
            items: 6,
            nav: false,
          }
        }
    });
    $('.mission-slide').owlCarousel({
        loop: true,
        responsiveClass: true,
        nav: false,
        autoplay: true,
        autoplayHoverPause:true,
        // navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        smartSpeed: 450,
        stopOnHover : true,
        margin: 0,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 1,
          },
          992: {
            items: 1,
          }
        }
    });


    if ( $.isFunction($.fn.matchHeight) ) {
      $('.uv-same-height').matchHeight({
          byRow: true,
          property: 'height',
          target: null,
          remove: false
      });
    }

    /*
    |=====================
    | SMOTHSCROLL
    |=====================
    */
      
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });

/*
|================
| CONTACT FORM
|================
*/
        
      $("#contactForm").validator().on("submit", function (event) {
          if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
          } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
          }
       });
  
      function submitForm(){
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();
        $.ajax({
            type: "POST",
            url: "process.php",
            data: "name=" + name + "&email=" + email + "&message=" + message,
            success : function(text){
                if (text == "success"){
                    formSuccess();
                  } else {
                    formError();
                    submitMSG(false,text);
                  }
              }
          });
      }
      function formSuccess(){
          $("#contactForm")[0].reset();
          submitMSG(true, "Message Sent!")
      }
  	  function formError(){   
  	    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
  	        $(this).removeClass();
  	    });
  	  }
      function submitMSG(valid, msg){
        if(valid){
          var msgClasses = "h3 text-center fadeInUp animated text-success";
        } else {
          var msgClasses = "h3 text-center shake animated text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
      }
  });
  
    /*
    |===========
    | ISOTOPE
    |===========
    */
  
      $(window).load(function(){
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                queue: true
            }
        });
     
        $('.portfolio-nav li').click(function(){
            $('.portfolio-nav .current').removeClass('current');
            $(this).addClass('current');
     
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    queue: true
                }
            });
            return false;
        }); 
      }); 
      
      
      if( $('#map').length ) {

      google.maps.event.addDomListener(window, 'load', init);
      function init() {
        var mapOptions = {
          zoom: 13,
          scrollwheel: false, 
          navigationControl: false,
          center: new google.maps.LatLng(40.6700, -73.9400),
          styles: [{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},
          {"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},
          {"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},
          {"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#333333"}]},
          {"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#333333"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: '24 Golden Tower (2nd floor), Amborkhana, Sylhet.!'
        });
      }
    }
      
      
      


}(jQuery));