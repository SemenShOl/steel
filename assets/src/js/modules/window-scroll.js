//---------------------------------
//	Window Scroll
//---------------------------------

export function WindowScroll($) {

	var lastScrollTop = 0;

	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();

		// Header
		if ($('.header').length > 0) {
			if (scrollTop > 0) {
				$('.header').addClass('is-scrolled');
			} else {
				$('.header').removeClass('is-scrolled');
			}

			if (scrollTop > ($('.header').outerHeight() + 150)) {
				$('.header').addClass('is-hide');
			} else {
				$('.header').removeClass('is-hide');
			}

			if (scrollTop > lastScrollTop) {
				$('.header').removeClass('is-show');
			} else {
				if (scrollTop > $('.header').outerHeight() + 150) {
					$('.header').addClass('is-show');
				} else {
					$('.header').removeClass('is-show');
				}
			}
        }


		// Паралакс в секции гарантии
		if ($('.section-warranty .image-wrap .image').length > 0) {
			const offsetStart = $('.section-warranty .image-wrap .image').offset().top - (window.innerHeight / 2),
				offsetEnd = $('.section-warranty .image-wrap .image').offset().top + (window.innerHeight / 2);

			if (scrollTop >= offsetStart && scrollTop <= offsetEnd) {
				const current = (scrollTop - offsetStart),
					differ = (offsetEnd - offsetStart),
					percent = (current / differ) * 100;

				$('.section-warranty .image-wrap .image img').css('transform', 'translateY(' + (percent * 2) + 'px)');
			}
		}

		// Кнопка наверх
		if (scrollTop > (window.innerHeight * 1.5)) {
			$('.btn-scroll-top').addClass('is-show');
		} else {
			$('.btn-scroll-top').removeClass('is-show');
		}


		// is-show

		lastScrollTop = scrollTop;
	});

}
