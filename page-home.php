<?php
/* Template Name: Главная страница */

get_header(); ?>

<section class="l-page ">

	<section class="section-intro">
		<div class="nwrapper">
			<div class="ncol-2"></div>
			<div class="ncol-10">
				<div class="intro-title">
					<h1 class="section-title">Поставки <br>
						металлопроката <br>
						по России и СНГ</h1>
					<div class="bg-p">
						<p>Компания «СТАЛЬ-Н» является ведущим предприятием в Сибирском регионе в сфере продаж
							металлопроката. Мы работаем напрямую с обширной сетью поставщиков, поэтому на наших складах
							всегда в наличии широкий ассортимент, налажены партнерские отношения с большинством ведущих
							отечественных производителей труб, листа, швеллера и других видов металлопродукции.</p>
					</div>
				</div>
				<div class="intro-form">
					<div class="info">
						<h3>Оставьте заявку на расчёт стоимости</h3>
						<p>
							Сделаем расчет стоимости в течении 15 минут
						</p>
					</div>

					<div class="form-group-set dark">
						<div class="form-group" style="grid-area: search;">
							<label>Что ищем?</label>
							<input type="text" class="form-control" name="search" minlength="2" required
								placeholder="Введите ваше имя">
						</div>
						<div class="form-group" style="grid-area: city;">
							<label>Город доставки</label>
							<input type="text" class="form-control" name="city" minlength="2" required
								placeholder="Введите ваше имя">
						</div>

						<div class="form-group" style="grid-area: number;">
							<label>Количество тон</label>
							<input type="text" class="form-control" name="number" minlength="2" required
								placeholder="Введите ваше имя">
						</div>

						<!-- <div class="btn"> -->
						<button class="btn-icon submit ask-price" style="grid-area: submit;">
							<span>Запросить стоимость</span>
						</button>
						<!-- </div> -->

					</div>
				</div>
			</div>
		</div>

		<img class="bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/intro-bg.jpg">

	</section>

	<section class="main-modal">
		<div class="main-modal__bg">
			<div class="main-modal__content">
				<button class="main-close-btn">
					<img
						src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/metall/modal-close.svg">
				</button>
				<h3 class="modal-title">Оставьте заявку, мы перезвоним Вам в ближайшее время</h3>

				<div class="form-group-set dark">
					<div class="form-group">
						<label>Имя</label>
						<input type="text" class="form-control" name="name" minlength="2" required
							placeholder="Например, Иван">
					</div>
					<div class="form-group">
						<label>Номер телефона</label>
						<input type="text" class="form-control" name="phone" minlength="2" required placeholder="+7">
					</div>
					<button class="btn-icon submit send-btn">
						<span>Перезвони мне</span>
					</button>
					<div class="privacy">
						<p>Нажимая на кнопку, я соглашаюсь с&nbsp;<a href="<?php echo home_url('/privacy') ?>"
								target="_blank">условиями обработки персональных данных</a></p>
					</div>

				</div>
			</div>

		</div>

	</section>

	<section class="sended-modal">
		<div class="sended-modal__bg">
			<div class="sended-modal__content">
				<button class="sended-close-btn">
					<img
						src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/metall/modal-close.svg">
				</button>
				<h3 class="modal-title">Ваша заявка принята!</h3>
				<p>Менеджер свяжется в ближайшее время</p>
			</div>
		</div>
	</section>


	<script>
		const btnAskPrice = document.querySelector('.ask-price');

		const sendedModal = document.querySelector('.sended-modal');
		const sendedModalBg = document.querySelector('.sended-modal__bg');
		const sendedModalClose = document.querySelector('.sended-close-btn');
		const sendedModalContent = document.querySelector('.sended-modal__content');


		const mainModal = document.querySelector('.main-modal');
		const mainModalBg = document.querySelector('.main-modal__bg');
		const mainModalClose = document.querySelector('.main-close-btn');
		const mainModalContent = document.querySelector('.main-modal__content');
		const btnModalSend = document.querySelector('.send-btn'); // btnModalSend

		const onCloseModalMain = () => {
			mainModal.classList.remove('open');
			mainModalBg.removeEventListener('click', onCloseModalMain)
			mainModalClose.removeEventListener('click', onCloseModalMain)
		}

		const onCloseModalSended = () => {
			sendedModal.classList.remove('open');
			sendedModalBg.removeEventListener('click', onCloseModalSended)
			sendedModalClose.removeEventListener('click', onCloseModalSended)
		}

		const onOpenModalSended = () => {
			// console.log(sendedModal)
			onCloseModalMain();
			sendedModal.classList.add('open');
			sendedModalBg.addEventListener('click', onCloseModalSended);
			sendedModalClose.addEventListener('click', onCloseModalSended);

		}

		const onOpenModalMain = () => {
			mainModal.classList.add('open');
			mainModalBg.addEventListener('click', onCloseModalMain)
			mainModalClose.addEventListener('click', onCloseModalMain)
			mainModalContent.addEventListener('click', e => e.stopPropagation())
			btnModalSend.addEventListener('click', onOpenModalSended)
		}


		btnAskPrice.addEventListener('click', () => {
			onOpenModalMain();
		})
	</script>

	<script>
		const moreInfo = document.querySelector('.header-more-info');
		const lPage = document.querySelector('.l-page');
		const mobilePart = document.querySelector('.mobile-part');
		const nheader = document.querySelector('.nheader');


		moreInfo.addEventListener('click', () => {
			lPage.classList.toggle('hidden');
			mobilePart.classList.toggle('active');
		})


	</script>

	<?php
	// Section - Technologies construction
	get_template_part(
		'template-parts/section-technologies',
		null,
		array(
			'section-number' => '01',
		)
	);
	?>

	<?php

	$queryHomes = new WP_Query(
		array(
			'post_type' => 'special',
			// 'posts_per_page' => 1,
			'order' => 'ASC',
			// 'orderby' => 'title',
			// 'post__not_in' => $exludePostIdArr,
		)
	);
	if ($queryHomes->posts):
		?>


		<?php
	endif;
	?>


	<?php
	// Section - Online broadcast
	get_template_part(
		'template-parts/section-online-broadcast',
		null,
		array(
			'section-number' => '04',
		)
	);
	?>

	<section class="need-help">
		<div class="nwrapper">
			<div class="ncol-2">
				<div class="wow fadeIn" data-wow-delay=".2s" style="margin-bottom: 178px">
					<p class="section-number">02</p>
				</div>
			</div>
			<div class="ncol-10">
				<div class="help-header">
					<h2 class="wow fadeInUp section-title" data-wow-delay=".2s">Нужна помощь?</h2>
					<p>Наши специалисты готовы обсудить любой вопрос! А также проконсультировать Вас по ассортименту
						нашей продукции</p>
				</div>
				<form class="common-form wow fadeIn" data-wow-delay=".6s" data-toggle="validator" role="form"
					data-focus="false" novalidate="true">
					<div class="form-group-set light">
						<div class="form-group ">
							<label>Имя</label>
							<input type="text" class="form-control" name="name" minlength="2" required
								placeholder="Введите ваше имя">
						</div>
						<!-- <i class="icon icon-user"></i> -->
						<div class="form-group phone">
							<label>Номер телефона</label>
							<input type="text" class="form-control" name="phone" placeholder="+7" required>
						</div>
						<!-- <i class="icon icon-phone"></i> -->
						<div class="form-group comment">
							<label>Комментарий</label>
							<input type="text" class="form-control" name="comment" placeholder="Введите ваш вопрос"
								required>
						</div>

						<div class="button-and-privacy">
							<button class=".nbtn" style="grid-area: submit;">
								<span>Отправить заявку</span>
							</button>
							<div class="privacy" style="grid-area: privacy;">
								<p>Нажимая на кнопку, я соглашаюсь с&nbsp;<a href="<?php echo home_url('/privacy') ?>"
										target="_blank">условиями
										обработки персональных данных</a></p>
							</div>

						</div>
				</form>
			</div>

		</div>
		</div>
	</section>


	<?php
	// Section - Services
	get_template_part(
		'template-parts/section-service',
		null,
		array(
			'section-number' => '03',
		)
	);
	?>

	<section class="l-page section-about-company">

		<div class="nwrapper">

			<div class="about-part info" style="grid-area: info">
				<div class="ncol-2">
					<p class="section-number">04</p>
					<p>Компания <br> Сталь-Н</p>
				</div>
				<div class="ncol-10">
					<h1 class="section-title">О компании</h1>

					<div class="content">
						<div class="item">
							<p>
								Компания «СТАЛЬ-Н» является ведущим предприятием в Сибирском регионе в сфере
								продаж металлопроката. Мы работаем напрямую с обширной сетью поставщиков,
								поэтому на наших складах всегда в наличии широкий ассортимент, налажены
								партнерские отношения с большинством ведущих отечественных производителей труб,
								листа, швеллера и других видов металлопродукции.
							</p>

						</div>
					</div>
				</div>

			</div>

			<div class="about-part more-info" style="grid-area: more-info">
				<div class="ncol-2"></div>
				<div class="ncol-10">
					<div class="content">
						<p>Мы работаем напрямую с обширной сетью поставщиков по всей России, на наших складах
							всегда в наличии широкий ассортимент металлопроката (более 8000 наименований) Вся
							продукция изготовлена по ГОСТам и ТУ и имеет все необходимые сертификаты качества,
							потому что мы стремимся к долгосрочному сотрудничеству с нашими клиентами.</p>
						<p>Реализуем услуги по первичной обработке металлопродукции: перфорация, гибка,
							покраска, резка плит, резка круга, рубка, токарная обработка, сверление, литье
							втулок, заготовки металла</p>
						<p>Самые выгодные цены на металлопродукцию, работаем напрямую с производителями, а также
							предоставляем целую систему скидок для крупных заказов и постоянных клиентов.</p>
						<p>Менеджеры-консультанты, которые окажут профессиональную помощь в выборе продукции и
							оформят доставку. Специалисты помогут сократить ваши расходы, подобрав оптимальный
							вариант.</p>
					</div>
				</div>
			</div>

			<div class="about-part partners" style="grid-area: partners">
				<div class="ncol-2">
					<p>Наши <br> партнеры</p>
				</div>
				<div class="ncol-10">
					<div class="content">
						<div class="item wow fadeIn" data-wow-delay=".2s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p1.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".3s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p2.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".4s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p3.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".5s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p4.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".6s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p5.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".7s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p6.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".8s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p7.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".9s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p8.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".10s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p9.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".11s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p10.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".12s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p11.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".13s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p12.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".14s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p13.svg">
								</div>
							</a>
						</div>
						<div class="item wow fadeIn" data-wow-delay=".15s">
							<a target="_blank">
								<div class="img">
									<img class=""
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/p14.svg">
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<section class="section-contact-map">
		<div class="nwrapper">
			<div class="contacts">
				<div class="ncol-2"></div>
				<div class="ncol-10">
					<?php
					// Section - Contacts
					get_template_part(
						'template-parts/section-contacts',
						null,
						array(
							'section-number' => '08',
						)
					);
					?>
				</div>
			</div>

			<div class="map">
				<?php
				//Section - Map
				get_template_part('template-parts/section-map');

				?>

			</div>

		</div>

	</section>

</section>

<?php get_footer(); ?>