//---------------------------------
//	Common
//---------------------------------

import { helpers } from './helpers.js';
import ImageCompare from "image-compare-viewer";

export function Common($) {

    // Lazy load image
    const lazyLoadAll = new LazyLoad({
        elements_selector: '.lazy'
    });

    // Селект в хэдере
    // $(document).ready(function() {
    //     $('.js-example-basic-single').select2({
    //         minimumResultsForSearch: Infinity
    //     });
    // });
    
    Array.prototype.remove = function() {
        var what, a = arguments, L = a.length, ax;
        while (L && this.length) {
            what = a[--L];
            while ((ax = this.indexOf(what)) !== -1) {
                this.splice(ax, 1);
            }
        }
        return this;
    };

    // WOW js
    new WOW({
        mobile: false
    }).init();
    

    // Куки
    // console.log($.cookie('_ga'))

    // Переход по якорям
    $('.scroll-to').click(function(e){
        const el = $(this).attr('href');

        // if (window.location.href === globalParams.site_url + '/') {
            e.preventDefault();

            if (document.querySelector(el) !== null) {
                $('html, body').animate({
                    scrollTop: $(el).offset().top
                }, 500);
            }
        // } else {
        //     window.location.href = globalParams.site_url + '/' + el;
        // }
        
        return false;
    });

    // Открытие/закрытие мобильного меню
    $('.header .header-mobile .toggle-menu').click(function(){
        if (!$(this).hasClass('is-open')) {
            $(this).addClass('is-open');
            $('.header').addClass('is-mobile-menu-open');
            $('body').addClass('is-overflow');
        } else {
            $(this).removeClass('is-open');
            $('.header').removeClass('is-mobile-menu-open');
            $('body').removeClass('is-overflow');
        }
    });


    // Скрытие не помещающихся ссылок в верхнем меню
    (function(){
        if (window.innerWidth >= 991) {
            let menuUlWidth = $('.header .top-menu > ul').width(),
            menuLiWidth = 0;

            $('.header .top-menu > ul > li:not(.more-links)').each(function(){
                const self = $(this);

                menuLiWidth += self.width() + 30;

                if (menuLiWidth > menuUlWidth) {
                    if ($('.header .top-menu > ul li.more-links').length === 0) {
                        // $('.header .top-menu > ul').append('<li class="more-links menu-item menu-item-has-children"><a href="">Ещё</a><ul class="sub-menu"></ul></li>');
                        $('.header .top-menu > ul').append('<li class="more-links menu-item menu-item-has-children"><a>Ещё</a><ul class="sub-menu"></ul></li>');

                    }

                    $('.header .top-menu > ul li.more-links ul').append(self);

                    self.addClass('is-hidden');
                }
            });
        }

        $('.header .top-menu').removeClass('is-hidden');
    })();

    // Baron scrollbar
    // $('.baron__clipper').baron({
    //     scroller: '.baron__clipper > .scroller',
    //     track: '.baron__clipper > .scroller__track',
    //     bar: '.baron__clipper > .scroller__track .scroller__bar',
    // });


    // Header открытие/закрытие меню 
    $('.header nav.top-menu .main-menu > .menu-item').on('mouseenter', function(){
        const self = $(this);

        function openSubmenu(item) {
            if (item.hasClass('menu-item-has-children')) {
                item.find('a').addClass('is-hover');
    
                $('.header .top-menu-wrap .top-menu').addClass('is-sub-open');
    
                $('.header .top-menu-wrap .top-menu').append('<div class="sub-menu-wrap"><ul>' + item.find('.sub-menu').html() + '</ul></div>').promise().done(function(res){
                    $('.header .top-menu-wrap .top-menu .sub-menu-wrap').slideDown(200, function(){
                        $('.header .top-menu-wrap .sub-menu-wrap').addClass('is-open');
                    });
                })
    
                $('.header .top-menu-wrap .sub-menu-wrap').on('mouseover', function(){
                    $('.header .top-menu-wrap .sub-menu-wrap').addClass('is-scroll')
                });
    
                $('.header .top-menu-wrap .sub-menu-wrap').on('mouseleave', function(){
                    $('.header .top-menu-wrap .top-menu .sub-menu-wrap').slideUp(200);
                    $('.header nav.top-menu .main-menu > .menu-item > a').removeClass('is-hover');
                    setTimeout(() => {
                        $('.header .top-menu-wrap .top-menu').removeClass('is-sub-open');
                        $('.header .top-menu-wrap .top-menu .sub-menu-wrap').remove();
                    }, 220);
                });
            }
        }



        if ($('.header .top-menu-wrap .sub-menu-wrap').length === 0) {
            openSubmenu(self);
        } else {
            // Скрытие подменю
            if ($('.header .top-menu-wrap .sub-menu-wrap.is-open').length > 0) {
                $('.header .top-menu-wrap .top-menu .sub-menu-wrap').slideUp(200);
                $('.header nav.top-menu .main-menu > .menu-item > a').removeClass('is-hover');
                setTimeout(() => {
                    $('.header .top-menu-wrap .top-menu').removeClass('is-sub-open');
                    $('.header .top-menu-wrap .top-menu .sub-menu-wrap').remove();
                }, 220);
            }

            // Открытие подменю если наведение на новый пункт с подменю
            if (self.hasClass('menu-item-has-children')) {
                setTimeout(() => {
                    openSubmenu(self);
                }, 300);
            }
        }
        
    });


    // Header открытие/закрытие списков в мобильном меню
    $('.header .mobile-menu-wrap .menu-items .item-toggle').click(function(e){
        e.preventDefault();

        if (!$(this).parent().hasClass('is-open')) {
            $(this).parent().addClass('is-open');
            $(this).parent().find('.item-list').slideDown(200);
        } else {
            $(this).parent().removeClass('is-open');
            $(this).parent().find('.item-list').slideUp(200);
        }
    });


    // Выбор города
    $('.header .city-select .list ul li').click(function(){
        const oldCity = $(this).closest('.city-select').find('.selected p').text(),
            newCity = $(this).text(),
            phone = $(this).data('phone');

        $(this).closest('.city-select').find('.selected p').text(newCity)

        $('.change-phone').each(function(){
            $(this).find('span').text(phone);
            $(this).attr('href', 'tel:+' + phone.replace(/[^0-9]+/g, ''))
        });
        $('.change-city').each(function(){
            $(this).text(newCity);
        });
    })



    if (document.querySelector('.section-individual-project .block-image .change-image') !== null) {

        var mySlider = new AnyImageComparisonSlider(document.getElementById('individual-project-change-image'),{
            orientation: 'horizontal',
            width: '100%',
            backgroundColor: '#fff',
        });

    }

    // if (document.querySelector('.section-individual-project .block-image .change-image') !== null) {
    //     const element = document.querySelector('.section-individual-project .block-image .change-image');
    //     const viewer = new ImageCompare(element).mount();
    // }



    // Воспроизведение видео в блоках
    (function(){
        function videoAction(videoId) {
            console.log(videoId);
            if (videoId !== undefined) {
                const blockVideo = document.getElementById(videoId);

                if (blockVideo !== null) {
                    const videoFull = blockVideo.querySelector('video.full');
                    let playBtn = null;

                    // Если есть кнопка вкл/выкл
                    if ($('.btn-play.play-video-block[data-video-id=' + videoId + ']').length > 0) {
                        playBtn = $('.btn-play.play-video-block[data-video-id=' + videoId + ']');
                    }
                    

                    // Локальное видео 
                    if (blockVideo.classList.contains('type-local')) {
                        

                        var isPlaying = videoFull.currentTime > 0 && 
                            !videoFull.paused && 
                            !videoFull.ended && 
                            videoFull.readyState > videoFull.HAVE_CURRENT_DATA;



                        // Видео запушено в первый раз
                        if (!blockVideo.classList.contains('is-start')) {
                            blockVideo.classList.add('is-start');
                        }
             
                        if (!blockVideo.classList.contains('is-play')) {
                            blockVideo.classList.add('is-play');

                            if (!isPlaying) {
                                setTimeout(() => {
                                    videoFull.play()
                                        .then(() => {

                                        })
                                        .catch((err) => {
                                            console.log(err);
                                        })
                                }, 200);
                            }

                            if (playBtn) {
                                playBtn.addClass('is-play');
                                playBtn.find('span').text('На паузу');
                            }
                        } else {
                            videoFull.pause()

                            blockVideo.classList.remove('is-play');

                            if (playBtn) {
                                playBtn.removeClass('is-play');
                                playBtn.find('span').text('Cмотреть');
                            }
                        }
                    }

                    // Youtube видео 
                    if (blockVideo.classList.contains('type-youtube')) {
                        let args = {
                            'event': 'command',
                            'func': '',
                            'args': []
                        };

                        if (blockVideo.querySelector('video')) {
                            blockVideo.querySelector('video').remove();
                        }

                        
                        if (!blockVideo.classList.contains('is-play')) {
                            blockVideo.classList.add('is-play')
                            blockVideo.classList.add('is-start')

                            args.func = 'playVideo';

                            if (playBtn) {
                                playBtn.addClass('is-play');
                                playBtn.find('span').text('На паузу');
                            }

                        } else {
                            blockVideo.classList.remove('is-play')
                            args.func = 'pauseVideo';

                            if (playBtn) {
                                playBtn.removeClass('is-play');
                                playBtn.find('span').text('Cмотреть');
                            }
                        }

                        blockVideo.querySelector('iframe').contentWindow.postMessage(JSON.stringify(args), "*");
                    }
                }
            }
        }

        // Клик на само видео
        $('.video-container video').click(function(){
            videoAction($(this).parent().attr('id'))
        });

        // Клик на кнопки
        $('.play-video-block').click(function(){
            videoAction($(this).data('video-id'));

            if ($(this).hasClass('play-once')) {
                $(this).remove();
            }
        })

        // Наведение на кнопку
        $('.video-container video').on('mouseenter', function(){
            if ($('.btn-play.play-video-block[data-video-id=' + $(this).parent().attr('id') + ']').length > 0) {
                $('.btn-play.play-video-block[data-video-id=' + $(this).parent().attr('id') + ']').addClass('is-hover');
            }
        });
        $('.video-container video').on('mouseleave', function(){
            $('.btn-play.play-video-block').removeClass('is-hover');
        });

        // Воспроизведение видео на мобилке
        if (window.innerWidth <= 767) {
            $('.video-container:not(.play-youtube)').each(function(){
                const self = $(this),
                    src = self.find('video.full source').attr('data-src');

                if (src !== undefined && src !== '') {
                    self.append('<a class="mobile-play" href="' + src + '" data-lity></a>');
                }
            });
        }
    })();

    // Подгрузка списка проектов домов
    $('.section-house-projects .project-list .show-more .link').click(function(){
        const self = $(this),
            formData = {
            action: 'load_projects_posts',
            query: homes_true_posts,
            page : homes_current_page
        };

        $.ajax({
            type: "POST",
            url: globalParams.ajax_url,
            data: formData,
            beforeSend: function() {
                self.addClass('is-loading');
                self.find('span').text('Загрузка...');
            },
            success: function(res) {
                if(res) { 
                    self.removeClass('is-loading');
                    self.find('span').text('Показать ещё');
                    homes_current_page++;

                    $('.section-house-projects .project-list > .list').append(res);

                    if (homes_current_page == homes_max_pages) {
                        self.parent().remove();
                    }


                    helpers.innerHoverChange();

                    // Слайдер изображений
                    $('.project-list-item').each(function () {
                        const self = $(this).find('.images-wrap .slider');

                        if (!self.hasClass('slick-initialized')) {
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
                } else {
                    self.parent().remove();
                }
            },
            error: function(err) {
                throw err;
            }
        });
    });

    // Один проект - Комплектации - Показать все
    $('.page-single-home .what-include .show-more .link').click(function(){
        $('.page-single-home .what-include .table tr').removeClass('is-hide-line');

        $(this).parent().remove();
    });

    // Список шагов - Показать все
    $('.section-steps-list .show-more .link').click(function(){
        $(this).closest('.section-steps-list').find('.steps-list .item').removeClass('is-hidden');

        $(this).parent().remove();
    });

    // Карта - Расположение
    const mapEl1 = $('.section-map .map');
    if (mapEl1.length > 0) {
        helpers.googleMapInit(mapEl1[0], mapEl1.data('map-marker'), mapEl1.data('map-center'), mapEl1.data('map-zoom'));
        // helpers.yandexMapInit(mapEl[0], mapEl.data('map-marker'), mapEl.data('map-center'), mapEl.data('map-zoom'));

        $('.section-map').css('max-width', (window.innerWidth - 6) + 'px');
    }

    // Карта - Страница контактов
    const mapEl2 = $('.page-contacts .content-map .map');
    if (mapEl2.length > 0) {
        helpers.googleMapInit(mapEl2[0], mapEl2.data('map-marker'), mapEl2.data('map-center'), mapEl2.data('map-zoom'));
    }

    // Карта - География объектов
    const mapEl3 = $('.page-archive-portfolio .section-portfolio-geography .map');
    if (mapEl3.length > 0) {
        helpers.googleMapInit(mapEl3[0], mapEl3.data('map-marker'), mapEl3.data('map-center'), mapEl3.data('map-zoom'));
    }


    // Карта - Страница одного объекта
    const mapEl4 = $('.page-single-portfolio .location .map');
    if (mapEl4.length > 0) {
        helpers.googleMapInit(mapEl4[0], mapEl4.data('map-marker'), mapEl4.data('map-center'), mapEl4.data('map-zoom'));
    }
    

    // Онлайн трансляции максимальная ширина 
    if ($('.section-online-broadcast').length > 0) {
        $('.section-online-broadcast').css('max-width', (window.innerWidth - 6) + 'px');
    }

    // Переключение изображений при наведении в портфолио
    $('.images-hover-change').each(function(){
        const self = $(this);

        self.find('.list .line').on('mouseover', function(){
            self.find('.dots .dot').removeClass('is-active');
            self.find('.dots .dot[data-id="' + $(this).data('id') + '"]').addClass('is-active');
            self.find('.bg').css('background-image', 'url(' + $(this).data('src') + ')')
        });

        self.on('mouseleave', function(){
            self.find('.bg').css('background-image', 'url(' + self.find('.list .line:first-child').data('src') + ')')
            self.find('.dots .dot').removeClass('is-active');
            self.find('.dots .dot[data-id="0"]').addClass('is-active');
        });
    });



    // Портфолио
    (function(){

        // Подгрузка списка домов портфолио
        $('.section-portfolio-objects-list .portfolio-list .show-more .link').click(function(){
            const self = $(this),
                formData = {
                action: 'load_portfolio_posts',
                query: portfolio_true_posts,
                page : portfolio_current_page,
                load_type: 'more'
            };

            $.ajax({
                type: "POST",
                url: globalParams.ajax_url,
                data: formData,
                beforeSend: function() {
                    self.addClass('is-loading');
                    self.find('span').text('Загрузка...');
                },
                success: function(res) {
                    if(res) { 
                        self.removeClass('is-loading');
                        self.find('span').text('Показать ещё');
                        portfolio_current_page++;

                        $('.section-portfolio-objects-list .portfolio-list > .list').append(res);

                        if (portfolio_current_page == portfolio_max_pages) {
                            self.parent().remove();
                        }

                        // helpers.innerHoverChange();

                        $('.section-portfolio-objects-list .portfolio-list > .list .images-hover-change').each(function(){
                            const self = $(this);
                    
                            self.find('.list .line').on('mouseover', function(){
                                self.find('.dots .dot').removeClass('is-active');
                                self.find('.dots .dot[data-id="' + $(this).data('id') + '"]').addClass('is-active');
                                self.find('.bg').css('background-image', 'url(' + $(this).data('src') + ')')
                            });
                        });
                    } else {
                        self.parent().remove();
                    }
                },
                error: function(err) {
                    throw err;
                }
            });
        });

        // Фильтрация в портфолио
        $('.page-archive-portfolio .portfolio-filter .list .item').click(function(){
            const typeItem = $(this).data('type');

            const currentTypes = JSON.parse($('.page-archive-portfolio .portfolio-filter').attr('data-type-active'))

            if (currentTypes.length === 0) {
                currentTypes.push(typeItem);
                $(this).addClass('is-active');
            } else {
                if (!currentTypes.includes(typeItem)) {
                    $(this).addClass('is-active');
                    currentTypes.push(typeItem)
                } else {
                    currentTypes.remove(typeItem)
                    $('.page-archive-portfolio .portfolio-filter .item[data-type=' + typeItem + ']').removeClass('is-active');
                }
            }


            $('.page-archive-portfolio .portfolio-filter').attr('data-type-active', JSON.stringify(currentTypes))

        



            const self = $(this),
                formData = {
                action: 'load_portfolio_posts',
                query: portfolio_true_posts,
                page : portfolio_current_page,
                load_type: currentTypes
            };

            $.ajax({
                type: "POST",
                url: globalParams.ajax_url,
                data: formData,
                beforeSend: function() {
                },
                success: function(res) {
                    if(res) { 
                        $('.section-portfolio-objects-list .portfolio-list .show-more').remove();
                        $('.section-portfolio-objects-list .portfolio-list > .list').html('');
                        $('.section-portfolio-objects-list .portfolio-list > .list').append(res);
                    } else {
                        // self.parent().remove();
                    }
                },
                error: function(err) {
                    throw err;
                }
            });

        })
    })();

    // Проекты
    (function(){

        // Подгрузка списка проектов домов
        $('.page-archive-homes .project-list .show-more .link').click(function(){
            const self = $(this),
                formData = {
                    action: 'load_projects_posts',
                    query: homes_true_posts,
                    page : homes_current_page,
                    load_type: 'more'
                };

            $.ajax({
                type: "POST",
                url: globalParams.ajax_url,
                data: formData,
                beforeSend: function() {
                    self.addClass('is-loading');
                    self.find('span').text('Загрузка...');
                },
                success: function(res) {
                    if(res) { 
                        self.removeClass('is-loading');
                        self.find('span').text('Показать ещё');
                        homes_current_page++;

                        $('.page-archive-homes .project-list > .list').append(res);

                        if (homes_current_page == homes_max_pages) {
                            self.parent().remove();
                        }

                        // helpers.innerHoverChange();

                        $('.page-archive-homes .project-list > .list .images-hover-change').each(function(){
                            const self = $(this);
                    
                            self.find('.list .line').on('mouseover', function(){
                                self.find('.dots .dot').removeClass('is-active');
                                self.find('.dots .dot[data-id="' + $(this).data('id') + '"]').addClass('is-active');
                                self.find('.bg').css('background-image', 'url(' + $(this).data('src') + ')')
                            });
                        });
                    } else {
                        self.parent().remove();
                    }
                },
                error: function(err) {
                    throw err;
                }
            });
        });
    })();
    

    // FAQ открытие/закрытие вопросов
    $('.page-faq .faq-list .list .item .toggle').click(function(){
        if (!$(this).parent().hasClass('is-open')) {
            $(this).parent().addClass('is-open');
            $(this).parent().find('.text').slideDown(200);
        } else {
            $(this).parent().removeClass('is-open');
            $(this).parent().find('.text').slideUp(200);
        }
    });


    // Рейтинг в звёздах
    if ($('.rating-stars').length > 0) {
        $('.rating-stars').each(function(){
            const self = $(this),
                score = $(this).data('val');

            if (self.find('i').length === 0) {
                self.append('<i class="star-1" data-i="1"></i><i class="star-2" data-i="2"></i><i class="star-3" data-i="3"></i><i class="star-4" data-i="4"></i><i class="star-5" data-i="5"></i>');
            }


            // Вывод звезд
            if (self.hasClass('get')) {
                let iWholeStars = Math.floor(score),
                    blnHalfStar = (iWholeStars < score);

                // Show the stars
                for (var iStar = 1; iStar <= iWholeStars; iStar++) {
                    $('i.star-' + iStar, self).addClass('full');
                }
                // And the half star
                if (blnHalfStar) {
                    $('i.star-' + iStar, self).addClass('half');
                }
            }

            // Ввод значения звезд
            if (self.hasClass('set')) {
                self.append('<input type="text" name="rating" class="form-control" value="" required>')

                self.find('i').on('mouseover', function(){
                    const selectNumber = Number($(this).data('i'));

                    self.find('i').each(function(i){
                        if ((i+1) <= selectNumber) {
                            $(this).addClass('fill')
                        }
                    });
                });

                self.find('i').on('mouseleave', function(){
                    self.find('i').removeClass('fill');
                }); 

                self.find('i').on('click', function(){
                    const selectNumber = Number($(this).data('i'));

                    self.addClass('select');
                    self.find('i').removeClass('active');
                    self.find('input[name=rating]').val(selectNumber);

                    self.find('i').each(function(i){
                        if ((i+1) <= selectNumber) {
                            $(this).addClass('active')
                        }
                    })
                });
            }
        });
    }

    // Отображение всех видео отзывов
    $('.page-archive-testimonials .section-testimonials-video .show-more').click(function(){
        $('.page-archive-testimonials .section-testimonials-video .list-block .item').removeClass('is-hidden');
        $(this).remove();
    });

    // Отображение все галлереи
    $('.page-template-page-gallery .section-gallery .show-more').click(function(){
        $('.page-template-page-gallery .section-gallery .portfolio-list-item').removeClass('is-hidden');
        $(this).remove();
    });
    
    
    // Отображение всех текстовых отзывов
    $('.page-archive-testimonials .section-testimonials-text .show-more').click(function(){
        $('.page-archive-testimonials .section-testimonials-text .list-block .item').removeClass('is-hidden');
        $(this).remove();
    });

    $('.home .special-list .show-more').click(function(){
        $('.home .special-list .catalog-special-item').removeClass('is-hidden');
        $(this).remove();
    });


    // Подгрузка списка проектов домов
    $('.section-blog-list .show-more .link').click(function(){
        const self = $(this),
            formData = {
            action: 'load_blog_posts',
            query: blog_true_posts,
            page : blog_current_page
        };

        $.ajax({
            type: "POST",
            url: globalParams.ajax_url,
            data: formData,
            beforeSend: function() {
                self.addClass('is-loading');
                self.find('span').text('Загрузка...');
            },
            success: function(res) {
                if(res) { 

                    console.log(res);

                    self.removeClass('is-loading');
                    self.find('span').text('Показать ещё');
                    blog_current_page++;

                    $('.section-blog-list .project-list .list').append(res);

                    if (blog_current_page == blog_max_pages) {
                        self.parent().remove();
                    }
                    
                } else {
                    self.parent().remove();
                }
            },
            error: function(err) {
                throw err;
            }
        });
    });

    // Шеринг записи блога
    if ($('.btn-post-share').length > 0) {
        $('.btn-post-share').click(function(){
            const self = $(this),
                link = window.location.href,
                postTitle = $('.blog-content h1').text();

            if (navigator.canShare && navigator.canShare({ url: link })) {
                navigator.share({
                    url: link,
                    title: postTitle, 
                })
                .then(() => console.log('Share was successful.'))
                .catch((error) => console.log('Sharing failed: ' + error));
            } else {


                if (navigator.clipboard) {
                    navigator.clipboard.writeText(link)
                    .then(function() {
                        self.addClass('is-copy-link');
                        setTimeout(() => {
                            self.removeClass('is-copy-link');
                        }, 2000);
                    }, function(err) {
                        console.error('Async: Could not copy text: ', err);
                    });
                    
                }
            }
        });
    }

    // Технологии производства наведение на картинки
    $('.page-archive-technologies .technologies-list .technologies-list-item .content .image .item').on('mouseenter', function(){
        if ($(this).hasClass('item-1')) {
           $(this).closest('.list').addClass('is-item-1-wide'); 
        }
        if ($(this).hasClass('item-2')) {
           $(this).closest('.list').addClass('is-item-2-wide'); 
        }
    })
    $('.page-archive-technologies .technologies-list .technologies-list-item .content .image .item').on('mouseleave', function(){
        console.log('leave');
        $(this).closest('.list').removeClass('is-item-1-wide is-item-2-wide')
    })


    // Кнопка наверх сайта
    $('.btn-scroll-top').click(function(){
        
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });


    // Смена технологии в карточке 
    if(window.location.search !== '') {
        if (helpers.getUrlParameter('tech') !== undefined) {

            if ($('.page-single-home-intro .content-info .props .tech-list').length > 0) {
                const tech = helpers.getUrlParameter('tech'),
                    // url = window.location.origin + '/plff.ru' + '/wp-json/wp/v2/technologies?slug=' + tech;
                    url = window.location.origin + '/wp-json/wp/v2/technologies?slug=' + tech;

                $('.page-single-home-intro .content-info .props .tech-list').html('');

                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(res) {
                        if (res !== undefined && res.length > 0) {
                            $('.page-single-home-intro .content-info .props .tech-list').append('<a href="' + res[0].guid.rendered + '">' + res[0].title.rendered + '</a>');
                            // window.location.search = '';
                        }
                    }
                });
            } 

        }
    }



    // Табличка с товарами
    (function(){
        let itemHeightArr = []
    
        $('.page-catalog .products-table-wrap .products-table .tlist .item').each(function(){
            itemHeightArr.push($(this).height());
        });

        if (itemHeightArr.length > 0) {
            itemHeightArr.forEach((item, key) => {
                $('.page-catalog .products-table-wrap .buttons .item').eq(key).css('height', (item + 'px'));
            })

            $('.page-catalog .products-table-wrap').removeClass('is-hidden');
        }
    })();


   
        
   


}

