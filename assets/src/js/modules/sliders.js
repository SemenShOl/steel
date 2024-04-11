//---------------------------------
//	Sliders
//---------------------------------

export function Sliders($) {

	// Онлайн трансляции
	(function(){
		const slider = $('.section-online-broadcast .broadcast-list-slider');

		if (slider.length > 0) {
			slider.on('init', function(event, slick) {
				if (window.innerWidth <= 1920) {
					slider.css('max-width', (window.innerWidth - 100) + 'px');
				}
			});

			slider.slick({
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: false,
				infinite: true,
				lazyLoad: 'progressive',
				appendArrows: '.section-online-broadcast .section-title .custom-slick-arrows',
				responsive: [
					{
						breakpoint: 991,
					  	settings: {
							slidesToShow: 1
						}
					},
				]
			});
		}
	})();

	// Похожие проекты 
	(function(){
		const slider = $('.similar-projects .project-list > .list');
		
		if (slider.length > 0) {
			slider.on('init', function(event, slick) {

				slider.css('max-width', (window.innerWidth - 20) + 'px');


				if (slick.slideCount <= 3) {
					$('.similar-projects').addClass('is-arrows-hide');
				}
			});

			slider.slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				arrows: true,
				dots: false,
				infinite: true,
				lazyLoad: 'progressive',
				appendArrows: '.similar-projects .section-title .custom-slick-arrows',
				responsive: [
					{
						breakpoint: 1550,
					  	settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 991,
					  	settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 576,
					  	settings: {
							slidesToShow: 1,
							adaptiveHeight: true
						}
					},
				]
			});
		}
	})();

	// Страница проекта - Слайдер интро
	(function(){
		const slider = $('.page-single-home-intro .content-images .content-images-slider');

		if (slider.length > 0) {
			slider.on('init', function(event, slick) {
				$('.page-single-home-intro .content-images .numbers .max').text(slick.slideCount);

				if (slick.slideCount === 1) {
					self.addClass('is-slide-1')
				}
			});

			slider.slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				infinite: true,
				lazyLoad: 'progressive',
				appendArrows: '.page-single-home-intro .content-images .custom-slick-arrows'
			});

			slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
				$('.page-single-home-intro .content-images .numbers .current').text(nextSlide + 1)
			});
		}
	})();

	// Отзывы
	(function(){
		const slider = $('.section-testimonials-images .slider');

		function setContent(el) {
			const item = $(el);

			if (item.data('title') !== undefined && item.data('title') !== '') {
				$('.section-testimonials .section-testimonials-info .title').html(item.data('title'))
			}
			if (item.data('name') !== undefined && item.data('name') !== '') {
				$('.section-testimonials .section-testimonials-info .name').html(item.data('name'))
			}

			if (item.data('video-url') !== undefined && item.data('video-url') !== '') {
				$('.section-testimonials .btn-play').removeClass('is-hidden');
				$('.section-testimonials .btn-play').attr('href', item.data('video-url'))

			} else {
				$('.section-testimonials .btn-play').addClass('is-hidden');
			}
		}

		if (slider.length > 0) {
			slider.on('init', function(event, slick) {
				setContent(slick.$slides[0])

				if (window.innerWidth > 1400 && window.innerWidth <= 1920) {
					slider.css('max-width', (window.innerWidth - 780) + 'px');
				} else if (window.innerWidth > 992 && window.innerWidth <= 1400) {
					slider.css('max-width', (window.innerWidth - 580) + 'px');
				} else if (window.innerWidth > 767 && window.innerWidth <= 991) {
					slider.css('max-width', (window.innerWidth - 220) + 'px');
				} else {
					slider.css('max-width', (window.innerWidth - 60) + 'px');
				}
			});

			slider.slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				infinite: true,
				lazyLoad: 'progressive',
				appendArrows: '.section-testimonials-images .actions .custom-slick-arrows',
				appendDots: '.section-testimonials-images .actions .custom-slick-dots'
			});

			
			slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
				setContent(slick.$slides[nextSlide])
			});
		}
	})();

	// Сертификаты
	(function(){
		const slider = $('.page-about-company .certificates .slider');

		if (slider.length > 0) {
			slider.on('init', function(event, slick) {
				if (window.innerWidth <= 1920 && window.innerWidth >= 992) {
					slider.css('max-width', (window.innerWidth - 100) + 'px');
				}

				if (window.innerWidth >= 1750) {
					if (slick.slideCount <= 5) {
						$('.page-about-company .certificates .custom-slick-arrows').addClass('is-hide');
					}
				}
			});

			slider.slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				dots: false,
				infinite: false,
				lazyLoad: 'progressive',
				appendArrows: '.page-about-company .certificates .custom-slick-arrows',
				responsive: [
					{
						breakpoint: 1750,
					  	settings: {
							slidesToShow: 4
						},
					},
					{
						breakpoint: 991,
					  	settings: {
							slidesToShow: 3
						},
					},
					{
						breakpoint: 768,
					  	settings: {
							slidesToShow: 2,
							appendArrows: '.page-about-company .certificates .custom-slick-arrows-mobile'
						},
					},
					{
						breakpoint: 576,
					  	settings: {
								slidesToShow: 1.5,
								appendArrows: '.page-about-company .certificates .custom-slick-arrows-mobile'
						},
					},
				]
			});
		}
	})();

	// Слайдер в каждом обекте портфолио из списка
	(function () {
		if ($('.portfolio-list-item').length > 0 || $('.project-list-item').length > 0) {
			$('.portfolio-list-item, .project-list-item').each(function () {
				const self = $(this).find('.images-wrap .slider');

				if (self.closest('.similar-projects').length === 0) {
					self.on('init', function (event, slick) {
						if (slick.slideCount === 1) {
							self.addClass('is-slide-1')
						}
					})

					self.slick({
						slidesToShow: 1,
						slidesToScroll: 1,
						dots: true,
						arrows: false,
						fade: true,
						lazyLoad: 'progressive',
					})
				}
			});
		}
	})();

	// Слайдер в списке технологий производства 
	(function(){
		$('.technologies-list .technologies-list-item .slider-mobile').each(function(){
			const slider = $(this);

			if (slider.length > 0) {
				slider.on('init', function(event, slick) {
	
					// slider.css('max-width', (window.innerWidth - 20) + 'px');
	
	
					// if (slick.slideCount <= 3) {
					// 	$('.similar-projects').addClass('is-arrows-hide');
					// }
				});
	
				slider.slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
					infinite: true,
					lazyLoad: 'progressive',
				});
			}
		})

		
	})();



}
