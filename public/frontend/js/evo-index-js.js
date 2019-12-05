$(document).ready(function ($) {
	$('.home-slider').slick({
		lazyLoad: 'ondemand',
		autoplay: true,
		autoplaySpeed: 7000,
		fade: true,
		cssEase: 'linear',
		dots: true,
		arrows: false,
		infinite: true
	});
	// $('.evo-block-product').slick({
	// 	dots: true,
	// 	arrows: false,
	// 	infinite: false,
	// 	speed: 300,
	// 	slidesToShow: 5,
	// 	slidesToScroll: 5,
	// 	responsive: [
	// 		{
	// 			breakpoint: 1024,
	// 			settings: {
	// 				slidesToShow: 5,
	// 				slidesToScroll: 5
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 991,
	// 			settings: {
	// 				slidesToShow: 3,
	// 				slidesToScroll: 3
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 767,
	// 			settings: {
	// 				slidesToShow: 2,
	// 				slidesToScroll: 2
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 480,
	// 			settings: {
	// 				slidesToShow: 2,
	// 				slidesToScroll: 2
	// 			}
	// 		}
	// 	]
	// });
	$('.section_san_pham .evo-index-block-product .button_show_tab').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.parents('.section_san_pham .evo-index-block-product').find('.viewmore').stop().slideToggle();
		$(this).toggleClass('active')
		return false;
	});
	$('.slide-collection').slick({
		dots: false,
		lazyLoad: 'ondemand',
		infinite: true,
		autoplay: true,
		autoplaySpeed: 4000,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true
				}
			}
		]
	});
});
