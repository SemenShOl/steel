<?php
/* Template Name: Главная страница */

get_header(); ?>

<section class="l-page">

	<section class="section-intro">
		<div class="background"></div>
		<div class="wrapper">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-10">
					<div class="main-img">
						<div class="section-title">
							<h1>
								<!-- <span class="wow fadeInUp" data-wow-delay=".2s">Строим дома</span>
								<span class="wow fadeInUp" data-wow-delay=".3s">«Готовые для жизни»</span> -->
								<span class="wow fadeInUp" data-wow-delay=".2s">Металлопродукция <br>с&nbsp;доставкой по&nbsp;всей России</span>
							</h1>
							<p class="wow fadeIn" data-wow-delay=".3s">Компания &laquo;Сталь и точка&raquo; поставляет металлопродукцию по&nbsp;всей России. Развитая сеть филиалов, а&nbsp;также собственный автопарк позволяют нам подобрать соответствующее решение даже для нестандартных проектов.
							</p>
							<button
								class="btn-icon white" 
								data-bs-toggle="modal" 
								data-bs-target="#modalCallback" 
								data-modal-title="Оставить заявку" 
								data-modal-form-name="Главная - Оставить заявку"
							>
								<span>Оставить заявку</span>
								<i class="icon icon-arrow-right"></i>
							</button>
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

							// echo '<div class="btn-play play-video-block" data-video-id="play-video-intro">';
							// echo '<i></i><span>Смотреть</span>';
							// echo '</div>';
							echo '</div>';
							?>
						</div>
					</div>
					<div class="main-info">
						<div class="props-grid wow fadeIn" data-wow-delay=".6s">
							<div class="item">
								<a href="<?php echo home_url('/catalog'); ?>">
									<div class="icon">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-one.svg">
									</div>
									<div class="text">
										<!-- <p>Более 15<br> проектов домов</p> -->
										<p>Боль&shy;шой вы&shy;бор ме&shy;тал&shy;лоп&shy;ро&shy;дук&shy;ции</p>
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
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-two.svg">
									</div>
									<div class="text">
										<p>Быст&shy;рая до&shy;став&shy;ка до&nbsp;ва&shy;ше&shy;го скла&shy;да или объ&shy;ек&shy;та</p>
										<div class="link">
											<span>Подробнее</span>
											<i></i>
										</div>
									</div>
								</a>
							</div>
							<div class="item">
								<div
									data-bs-toggle="modal" 
									data-bs-target="#modalCallback" 
									data-modal-title="Узнать о наличии товара на складе" 
									data-modal-textarea="message" 
									data-modal-textarea-label="Опишите заказ" 
									data-modal-form-name="Главная - Узнать наличие"
								>
									<div class="icon">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-three.svg">
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
								<div
									data-bs-toggle="modal"
									data-bs-target="#modalCallback" 
									data-modal-title="Получить расчет стоимости заказа" 
									data-modal-textarea="message" 
									data-modal-textarea-label="Опишите заказ" 
									data-modal-form-name="Главная - Узнать стоимость" 
									data-modal-button="Скачать прайс-лист" 
								>
								<!-- data-modal-download="<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/homes-catalog-plotnikof-2023.pdf" -->
									<div class="icon">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-four.svg">
									</div>
									<div class="text">
										<p>Луч&shy;шая це&shy;на за&nbsp;тон&shy;ну и&nbsp;до&shy;пол&shy;ни&shy;тель&shy;ные скид&shy;ки от&nbsp;объ&shy;ёма</p>
										<div class="link">
											<span>Подробнее</span>
											<i></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="props-grid props-grid-mobile wow fadeIn" data-wow-delay=".2s">
						<div class="item">
							<a href="<?php echo home_url('/catalog'); ?>">
								<div class="icon">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-one.svg">
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
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-two.svg">
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
							<div
								data-bs-toggle="modal" 
								data-bs-target="#modalCallback" 
								data-modal-title="Узнать о наличии товара на складе" 
								data-modal-textarea="message" 
								data-modal-textarea-label="Опишите заказ" 
								data-modal-form-name="Главная - Узнать наличие"
							>
								<div class="icon">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-three.svg">
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
							<div
								data-bs-toggle="modal"
								data-bs-target="#modalCallback" 
								data-modal-title="Получить расчет стоимости заказа" 
								data-modal-textarea="message" 
								data-modal-textarea-label="Опишите заказ" 
								data-modal-form-name="Главная - Узнать стоимость" 
								data-modal-button="Скачать прайс-лист" 
							>
								<div class="icon">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/intro-four.svg">
								</div>
								<div class="text">
									<p>Луч&shy;шая це&shy;на за&nbsp;тон&shy;ну и&nbsp;до&shy;пол&shy;ни&shy;тель&shy;ные скид&shy;ки от&nbsp;объ&shy;ёма</p>
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
	</section>

	<?php
		// Section - Technologies construction
		get_template_part('template-parts/section-technologies-construction', null, array(
			'section-number' => '01',
		));
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
		if ($queryHomes->posts) :
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
								foreach ($queryHomes->posts as $key => $post) : setup_postdata($post);
									// Project list item
									$isHidden = ($key > 5) ? true : false;
									get_template_part('template-parts/catalog-card', null, array('id' => $post->ID, 'hidden' => $isHidden));
								endforeach;
								?>
							</div>


							<?php if (count($queryHomes->posts) > 3) : ?>
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
	get_template_part('template-parts/section-online-broadcast', null, array(
		'section-number' => '04',
	));
	?>

	<div class="partners-callback">
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
							Обсудить все вопросы, рассчитать стоимость доставки и&nbsp;договориться о&nbsp;способе оплаты вы&nbsp;можете с&nbsp;нашими специалистами
						</p>
						<button class="btn-icon wow fadeIn" data-wow-delay=".4s">
							<span>Напишите нам в WhatsApp</span>
							<i class="icon-arrow-right"></i>
						</button>
					</div>
				</div>
			</div>
		</a>
	</div>

	<section class="l-page page-about-company">

		<section class="intro">
			<div class="wrapper">
				<div class="row">
					<div class="col-2">
						<div class="section-number wow fadeIn" data-wow-delay=".2s">
							<p>04</p>
							<p>Наша<br> компания</p>
						</div>
					</div>
					<div class="col-10">
						<div class="page-title-block">
							<div class="section-title">
								<h2 class="wow fadeInUp" data-wow-delay=".2s">Компания «Сталь и точка»</h2>
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
							<!-- <a href="https://www.youtube.com/watch?v=n1gLsYmWwSs" data-lity>
								<video class="preview lazy" autoplay="true" muted="true" loop="true" data-poster="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/page-about-company-video.jpg">';
									<source data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/videos/about-video-1-preview.webm">
								</video>
								<div class="btn-play white">
									<i></i>
								</div>
							</a> -->
													<div class="content-video xxl-display-block wow fadeIn" data-wow-delay=".4s">
							<a class="cutoff-corner-right">
								<img class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home-mtk.webp">
							</a>
						</div>
						</div>
						<div class="content wow fadeIn" data-wow-delay=".5s">
							<div class="content-info">
								<div class="item">
									<h4>Наша компания основана в&nbsp;2016 году</h4>
									<p>Компания &laquo;Сталь и точка&raquo;&nbsp;&mdash; один из&nbsp;ведущих 
									поставщиков на&nbsp;рынке металлоторговли. Производим металлопрокат нетиповых 
									размеров, изготавливаем детали, проводим металлообработку и&nbsp;комплектуем 
									партии проката разного сортамента.<br><br>
									Знаем, как сэкономить бюджет и&nbsp;уложиться в&nbsp;назначенные сроки. 
									Организовываем доставку сертифицированной продукции в&nbsp;назначенный 
									срок, предлагаем клиентам персональные скидки от&nbsp;объема и&nbsp;лучшую 
									цену за&nbsp;тонну на&nbsp;рынке</p>
									<a class="btn-icon" href="<?php echo home_url('/o-kompanii'); ?>">
										<span>Узнать больше</span>
										<i class="icon icon-arrow-right"></i>
									</a>
								</div>
							</div>
							<div class="content-video xxl-display-none">
								<a class="cutoff-corner-right">
									<img class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home-mtk.webp">
									<!-- <video class="preview lazy" autoplay="true" muted="true" loop="true" data-poster="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/page-about-company-video.jpg">';
										<source data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/videos/about-video-1-preview.webm">
									</video>
									<div class="btn-play white">
										<i></i>
									</div> -->
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		// Section - Contacts
		get_template_part('template-parts/section-contacts', null, array(
			'section-number' => '08',
		));
		?>

		<?php
		// Section - Map
		get_template_part('template-parts/section-map');
		?>
	</section>
</section>

<?php get_footer(); ?>