$(document).ready(function($){
	$('.slide-collection').slick({
		dots: false,
		lazyLoad: 'ondemand',
		infinite: false,
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
	$('.slick_ajax_tab').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
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
					slidesToShow: 2,
					slidesToScroll: 2,
					dots: true
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					dots: true
				}
			}
		]
	});

	$('.group-filter-title').click(function(){
		$(".main_container.collection .group-filter-title").toggleClass('active');
		$(".main_container.collection .aside-filter").toggleClass('active');
		$(".main_container.collection .group-category").removeClass('active');
		$(".main_container.collection .group-category-title").removeClass('active');
	});
	$('.group-category-title').click(function(){
		$(".main_container.collection .group-category-title").toggleClass('active');
		$(".main_container.collection .aside-filter").removeClass('active');
		$(".main_container.collection .group-category").toggleClass('active');
		$(".main_container.collection .group-filter-title").removeClass('active');
	});
});