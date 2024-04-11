//---------------------------------
//	Window Resize
//---------------------------------

export function WindowResize($) {

	$(window).resize(function(){

		// Слайдер - Онлайн трансляции
		if ($('.section-online-broadcast .broadcast-list-slider').length > 0) {
			if (window.innerWidth <= 1920) {
				$('.section-online-broadcast .broadcast-list-slider').css('max-width', (window.innerWidth - 20) + 'px');
			}
		}

		// Слайдер - Похожие проекты
		if ($('.similar-projects .project-list .list').length > 0) {
			if (window.innerWidth > 767 && window.innerWidth <= 1920) {
				$('.similar-projects .project-list .list').css('max-width', (window.innerWidth - 20) + 'px');
				// $('.similar-projects .project-list .list').css('max-width', (window.innerWidth - 100) + 'px');
			}
			if (window.innerWidth <= 767) {
				$('.similar-projects .project-list .list').css('max-width', (window.innerWidth - 40) + 'px');
			}

			// Слайдер статей
			if ($('.similar-projects .section-blog-list .project-list .list').length > 0) {
				if (window.innerWidth > 991 && window.innerWidth <= 1200) {
					$('.similar-projects .section-blog-list .project-list .list').css('max-width', (window.innerWidth - 20) + 'px');
				}
				if (window.innerWidth <= 991) {
					$('.similar-projects .section-blog-list .project-list .list').css('max-width', (window.innerWidth - 20) + 'px');
				}
			}
		}

		// Слайдер - Отзывы
		if ($('.section-testimonials-images .slider').length > 0) {
			if (window.innerWidth > 1400 && window.innerWidth <= 1920) {
				$('.section-testimonials-images .slider').css('max-width', (window.innerWidth - 780) + 'px');
			} else if (window.innerWidth > 992 && window.innerWidth <= 1400) {
				$('.section-testimonials-images .slider').css('max-width', (window.innerWidth - 580) + 'px');
			} else if (window.innerWidth > 767 && window.innerWidth <= 991) {
				$('.section-testimonials-images .slider').css('max-width', (window.innerWidth - 220) + 'px');
			} else {
				$('.section-testimonials-images .slider').css('max-width', (window.innerWidth - 60) + 'px');
			}
		}

		// Онлайн трансляции
		if ($('.section-online-broadcast').length > 0) {
			$('.section-online-broadcast').css('max-width', (window.innerWidth - 6) + 'px');
		}

		// Карта
		if ($('.section-map').length > 0) {
			$('.section-map').css('max-width', (window.innerWidth - 6) + 'px');
		}
	});

}
