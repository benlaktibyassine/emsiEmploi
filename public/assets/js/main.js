jQuery(function ($) {
    'use strict';

	// Mean Menu
	$('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	}); 

	// Others Option For Responsive JS
	$(".others-option-for-responsive .dot-menu").on("click", function(){
		$(".others-option-for-responsive .container .container").toggleClass("active");
	});

	// Header Sticky
	$(window).on('scroll',function() {
		if ($(this).scrollTop() > 100){  
			$('.navbar-area').addClass("is-sticky");
		}
		else{
			$('.navbar-area').removeClass("is-sticky");
		}
	});

    //Open Search Box
    $('.searchbtn').on('click', function() {
        $('.search-area').toggleClass('active');
    });
    $('.close-searchbox').on('click', function() {
        $('.search-area').removeClass('active');
    });

	// Odometer JS 
	$('.odometer').appear(function(e) {
		var odo = $(".odometer");
		odo.each(function() {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	}); 

	// Popup Video
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({ 
		disableOn: 100,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});

	// scrollCue Animate
	scrollCue.init();

	// Partner Logo  Slider
	$('.panther-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>" ,
            "<i class='bx bx-chevron-right'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:2
			},
			570:{
				items:2
			},
			768:{
				items:4
			},
			992:{
				items:3
			},
			1200:{
				items:4
			}
		}
	});

	// Partner Logo Two Slider
	$('.panther-slider-two').owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>" ,
            "<i class='bx bx-chevron-right'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:2
			},
			570:{
				items:3
			},
			768:{
				items:3
			},
			992:{
				items:4
			},
			1200:{
				items:5
			}
		}
	});

	// Experts Slider
	$('.experts-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>" ,
            "<i class='bx bx-chevron-right'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:1
			},
			570:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:3
			}
		}
	});

	// Portfolio Slider
	$('.portfolio-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>" ,
            "<i class='bx bx-chevron-right'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:1
			},
			570:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:4
			}
		}
	});

	// Team Slider
	$('.team-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>" ,
            "<i class='bx bx-chevron-right'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:1
			},
			570:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:3
			}
		}
	});

	// Services Three Slider
	$('.services-three-slider').owlCarousel({
		loop: true,
		margin: 25,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>" ,
            "<i class='bx bx-chevron-right'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:1
			},
			570:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:3
			}
		}
	});

	// Testimonials Slider
	$('.testimonials-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
            "<i class='bx bx-chevron-right'></i>" ,
			"<i class='bx bx-chevron-left'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:1
			},
			570:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});

	// Testimonials Three Slider
	$('.testimonials-three-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>" ,
            "<i class='bx bx-chevron-right'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:1
			},
			570:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:2
			},
			1200:{
				items:2
			}
		}
	});

	// blog-slider
	$('.blog-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>" ,
            "<i class='bx bx-chevron-right'></i>" ,
        ],  
		responsivee:{
			0:{ 
				items:1
			},
			570:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:2
			},
			1200:{
				items:2
			}
		}
	});
	
	// Range JS
	const settings={
		fill: '#F76031',
		background: 'transparent'
	}
	const sliders = document.querySelectorAll('.range-slider');
	Array.prototype.forEach.call(sliders,(slider)=>{
		slider.querySelector('input').addEventListener('input', (event)=>{
		slider.querySelector('span').innerHTML = event.target.value;
		applyFill(event.target);
		});
		applyFill(slider.querySelector('input'));
	});
	
	function applyFill(slider) {
		const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
		const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;
		slider.style.background = bg;
	}

	// Go to Top
	$(function(){
		// Scroll Event
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 100) $('.go-top').addClass('active');
			if (scrolled < 100) $('.go-top').removeClass('active'); 
		});  
		// Click Event
		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  100);
		});
	});

	// Count Time JS
	function makeTimer() {
		var endTime = new Date("november  30, 2025 17:00:00 PDT");			
		var endTime = (Date.parse(endTime)) / 1000;
		var now = new Date();
		var now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }
		$("#days").html(days + "<span>Days</span>");
		$("#hours").html(hours + "<span>Hours</span>");
		$("#minutes").html(minutes + "<span>Minutes</span>");
		$("#seconds").html(seconds + "<span>Seconds</span>");
	} 
	setInterval(function() { makeTimer(); }, 300); 


	// Preloader
	jQuery(window).on('load', function() {
		$('.preloader').addClass('preloader-deactivate');
	}) 

	$('body').append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");
  
}(jQuery));

// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('inon_theme', themeName);
    document.documentElement.className = themeName;
}
// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('inon_theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}
// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('inon_theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
      document.getElementById('slider').checked = true;
    }
})();