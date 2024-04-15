<?php
/* Template Name: Главная страница */

get_header(); ?>

<section class="l-page">

	<!-- <section class="section-intro">
		<div class="background"></div>
		<div class="wrapper">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-10">
					<div class="main-img">
						<div class="section-title">
							<h1>
								<span class="wow fadeInUp" data-wow-delay=".2s">Поставки <br>металлопроката <br>
									по России и СНГ</span>
							</h1>
							<div class="bg-p">
								<p class="wow fadeIn" data-wow-delay=".3s">Компания «СТАЛЬ-Н» является ведущим
									предприятием
									в Сибирском регионе в сфере продаж металлопроката. Мы работаем напрямую с обширной
									сетью
									поставщиков, поэтому на наших складах всегда в наличии широкий ассортимент, налажены
									партнерские отношения с большинством ведущих отечественных производителей труб,
									листа,
									швеллера и других видов металлопродукции.
								</p>
							</div>

						</div>
						<div class="intro-form">

							<div class="form-info">
								<h3>
									Оставьте заявку на расчёт стоимости
								</h3>
								<p>Сделаем расчет стоимости в течении 15 минут</p>
							</div>
							<form class="common-form wow fadeIn" data-wow-delay=".6s" data-toggle="validator"
								role="form" data-focus="false" novalidate="true">
								<div class="form-group-set dark">
									<div class="form-group ">
										<label>Имя</label>
										<input type="text" class="form-control" name="name" minlength="2" required
											placeholder="Введите ваше имя">
									</div>
									<div class="form-group phone">
										<label>Номер телефона</label>
										<input type="text" class="form-control" name="phone" placeholder="+7" required>
									</div>
									<div class="form-group comment">
										<label>Комментарий</label>
										<input type="text" class="form-control" name="comment"
											placeholder="Введите ваш вопрос" required>
									</div>

									<div class="button-and-privacy">
										<button class="btn-icon submit" style="grid-area: submit;">
											<span>Отправить заявку</span>
										</button>
										<div class="privacy" style="grid-area: privacy;">
											<p>Нажимая на кнопку, я соглашаюсь с&nbsp;<a
													href="<?php echo home_url('/privacy') ?>" target="_blank">условиями
													обработки персональных данных</a></p>
										</div>
									</div>

								</div>
							</form>
						</div>
						<div class="video-wrap wow fadeIn --animation-image" data-wow-delay=".2s">
							<?php
							// Локальное видео 
							$poster = esc_url(get_template_directory_uri()) . '/assets/images/home-video-1-preview.webp';
							$videoPreview = esc_url(get_template_directory_uri()) . '/assets/videos/home-video-1-preview.webm';

							echo '<div id="play-video-intro" class="inner video-container type-local">';
							echo '<video class="preview lazy" autoplay="true" muted="true" loop="true" data-poster="' . $poster . '">';
							echo '<source data-src="' . $videoPreview . '">';
							echo '</video>';
							echo '</div>';
							?>
						</div>

					</div>



					<div class="props-grid props-grid-mobile wow fadeIn" data-wow-delay=".2s">
						<div class="item">
							<a href="<?php echo home_url('/catalog'); ?>">
								<div class="icon">
									<img
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-one.svg">
								</div>
								<div class="text">
									<p>Большой выбор металлопродукции </p>
									<div class="link">
										<span>Смотреть</span>
										<i></i>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="<?php echo home_url('/oplata-i-dostavka'); ?>">
								<div class="icon">
									<img
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-two.svg">
								</div>
								<div class="text">
									<p>Быстрая доставка до&nbsp;вашего склада или объекта</p>
									<div class="link">
										<span>Подробнее</span>
										<i></i>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<div data-bs-toggle="modal" data-bs-target="#modalCallback"
								data-modal-title="Узнать о наличии товара на складе" data-modal-textarea="message"
								data-modal-textarea-label="Опишите заказ"
								data-modal-form-name="Главная - Узнать наличие">
								<div class="icon">
									<img
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-three.svg">
								</div>
								<div class="text">
									<p>На&shy;ли&shy;чие на&nbsp;скла&shy;дах по&nbsp;всей Рос&shy;сии</p>
									<div class="link">
										<span>Оставить заявку</span>
										<i></i>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div data-bs-toggle="modal" data-bs-target="#modalCallback"
								data-modal-title="Получить расчет стоимости заказа" data-modal-textarea="message"
								data-modal-textarea-label="Опишите заказ"
								data-modal-form-name="Главная - Узнать стоимость"
								data-modal-button="Скачать прайс-лист">
								<div class="icon">
									<img
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-four.svg">
								</div>
								<div class="text">
									<p>Луч&shy;шая це&shy;на за&nbsp;тон&shy;ну
										и&nbsp;до&shy;пол&shy;ни&shy;тель&shy;ные скид&shy;ки от&nbsp;объ&shy;ёма</p>
									<div class="link">
										<span>Подробнее</span>
										<i></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->


	<section class="section-intro">
		<div class="nwrapper">
			<div class="ncol-2"></div>
			<div class="ncol-10">
				<div class="intro-title">
					<h1>Поставки <br>
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
							<button class="btn-icon submit" style="grid-area: submit;">
								<span>Запросить стоимость</span>
							</button>
						<!-- </div> -->

					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	// Section - Technologies construction
	get_template_part(
		'template-parts/section-technologies-construction',
		null,
		array(
			'section-number' => '01',
		)
	);
	?>

	<?php
	// $exludePostIdArr = array();
	
	// // array_push($exludePostIdArr, $post->ID);
	
	// if (count($GLOBALS['exludeHomesPostSlugArr']) > 0) {
	// 	foreach ($GLOBALS['exludeHomesPostSlugArr'] as $key => $item) {
	// 		$exludePost = get_page_by_path($item, OBJECT, 'homes');
	
	// 		array_push($exludePostIdArr, $exludePost->ID);
	// 	}
	// }
	
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

		<section class="section-house-projects">
			<div class="wrapper">
				<div class="row">
					<div class="col-2">
						<div class="section-number wow fadeIn" data-wow-delay=".2s">
							<p>02</p>
							<p>Наши<br> акции</p>
						</div>
					</div>
					<div class="col-10">
						<div class="top-block">
							<div class="section-title">
								<h2>
									<span class="wow fadeInUp" data-wow-delay=".2s">Специальные предложения</span>
								</h2>
							</div>
							<!-- <div class="buttons">
							<div class="btn-wrap wow fadeIn" data-wow-delay=".3s">
								<button class="btn-icon" data-bs-toggle="modal" data-bs-target="#modalCallback" data-modal-title="Скачайте презентацию" data-modal-button="Скачать" data-modal-download="<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/homes-catalog-plotnikof-2023.pdf">
									<span>Смотреть все</span>
									<i class="icon icon-arrow-right"></i>
								</button>
							</div>
						</div> -->
						</div>



						<div class="special-list">
							<div class="list">
								<?php
								foreach ($queryHomes->posts as $key => $post):
									setup_postdata($post);
									// Project list item
									$isHidden = ($key > 5) ? true : false;
									get_template_part('template-parts/catalog-card', null, array('id' => $post->ID, 'hidden' => $isHidden));
								endforeach;
								?>
							</div>


							<?php if (count($queryHomes->posts) > 3): ?>
								<script>
									var homes_true_posts = '<?php echo serialize($queryHomes->query_vars); ?>';
									var homes_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
									var homes_max_pages = '<?php echo $queryHomes->max_num_pages; ?>';
								</script>
								<div class="show-more wow fadeIn" data-wow-delay=".2s">
									<div class="link">
										<span>Подробнее</span>
									</div>
								</div>
							<?php endif; ?>

						</div>
						<?php
						wp_reset_query();
						remove_filter('posts_orderby', 'orderby_post_title_int');
						?>
					</div>
				</div>
			</div>
		</section>

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

	<!-- <div class="partners-callback">
		<a class="inner" href="https://wa.me/79618791171" target="_blank">
			<div class="wrapper">
				<div class="row">
					<div class="col-2">
						<div class="section-number white-section-number wow fadeIn" data-wow-delay=".2s">
							<p>03</p>
							<p>Связь<br> с нами</p>
						</div>
					</div>
					<div class="col-10">
						<p class="partners-callback-header wow fadeInUp" data-wow-delay=".2s">
							Нужна помощь?
						</p>
						<p class="partners-callback-body wow fadeIn" data-wow-delay=".3s">
							Обсудить все вопросы, рассчитать стоимость доставки и&nbsp;договориться о&nbsp;способе
							оплаты вы&nbsp;можете с&nbsp;нашими специалистами
						</p>
						<button class="btn-icon wow fadeIn" data-wow-delay=".4s">
							<span>Напишите нам в WhatsApp</span>
							<i class="icon-arrow-right"></i>
						</button>
					</div>
				</div>
			</div>
		</a>
	</div> -->


	<section class="need-help">
		<div class="wrapper">
			<div class="row">
				<div class="col-2">
					<div class="section-number wow fadeIn" data-wow-delay=".2s" style="margin-bottom: 178px">
						<p class="section-number">02</p>
					</div>
				</div>
				<div class="col-10">
					<div class="help-header">
						<h2 class="wow fadeInUp " data-wow-delay=".2s">Нужна помощь</h2>
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
								<button class="btn-icon submit" style="grid-area: submit;">
									<span>Отправить заявку</span>
								</button>
								<div class="privacy" style="grid-area: privacy;">
									<p>Нажимая на кнопку, я соглашаюсь с&nbsp;<a
											href="<?php echo home_url('/privacy') ?>" target="_blank">условиями
											обработки персональных данных</a></p>
								</div>
							</div>

						</div>
					</form>
				</div>

			</div>
		</div>
	</section>

	<section class="l-page page-about-company">

		<section class="intro">
			<div class="wrapper">
				<div class="row">
					<div class="col-2">
						<div class="section-number wow fadeIn" data-wow-delay=".2s" style="margin-bottom: 178px">
							<p class="section-number">04</p>
							<p>Компания <br> Сталь-Н</p>
						</div>
						<div class="section-number wow fadeIn" data-wow-delay=".2s">
							<p>Наши <br> партнеры</p>
						</div>
					</div>
					<div class="col-10">
						<div class="page-title-block">
							<div class="section-title">
								<h2 class="wow fadeInUp" data-wow-delay=".2s">О компании</h2>
							</div>

							<?php if (function_exists('bcn_display')) {
								echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".4s">';
								echo '<div class="breadcrumbs-inner">';
								bcn_display();
								echo '</div>';
								echo '</div>';
							} ?>
						</div>
						<div class="content-video xxl-display-block wow fadeIn" data-wow-delay=".4s">

						</div>
						<div class="content wow fadeIn" data-wow-delay=".5s">
							<div class="content-info" style="grid-area: info">
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
							<div class="content-more-info" style="grid-area: more-info">
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

							<div class="content-partners" style="grid-area: partners">
								<div class="list">
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
				</div>
			</div>
		</section>

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

		<?php
		// Section - Map
		get_template_part('template-parts/section-map');
		?>
	</section>
</section>

<?php get_footer(); ?>