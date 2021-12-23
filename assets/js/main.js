$(function () {
	var navbar = $('#navbar');

	$(window).scroll(function () {
		if ($(window).scrollTop() <= 20) {
			navbar.removeClass('navbar-scroll');
		} else {
			navbar.addClass('navbar-scroll');
		}
	});
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
});

$(window).on('load', function () {
    var portfolioIsotope = $('.portfolio-container').isotope({
    	itemSelector: '.portfolio-item'
    });
    $('#portfolio-flters li').on( 'click', function() {
    	$("#portfolio-flters li").removeClass('filter-active');
    	$(this).addClass('filter-active');

    	portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });
});



// var a = 0;
// $(window).scroll(function () {
// 	var oTop = $('#data').offset().top - window.innerHeight;
// 	if (a == 0 && $(window).scrollTop() > oTop) {
// 		$('.counter').each(function () {
// 			var $this = $(this),
// 				countTo = $this.attr('data-count');
// 			$({
// 				countNum: $this.text()
// 			}).animate({
// 				countNum: countTo
// 			}, {
// 				duration: 1500,
// 				easing: 'swing',
// 				step: function () {
// 					$this.text(Math.floor(this.countNum));
// 				},
// 				complete: function () {
// 					$this.text(this.countNum);
// 				}
// 			});
// 		});
// 		a = 1;
// 	}
// });
