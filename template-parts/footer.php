<footer class="footer">
	<div class="block-main">
		<div class="wrapper">
			<div class="row pc-border">
				<div class="col-2">
					<div class="block-main-logo">
						<a href="<?php echo home_url('/'); ?>">
							<!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/n_logo.pnh"> -->
							<img
								src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/n_Dark_logo.svg">

						</a>
					</div>
				</div>
				<!-- &nbsp -->
				<div class="col-10">
					<div class="block-main-menu menu-desktop">
						<ul class="inner">
							<li><a href="<?php echo home_url('/production'); ?>" class="link" style="">Продукция</a>
							</li>
							<li><a href="<?php echo home_url('/oplata-i-dostavka'); ?>" class="link"
									style="">Оплата</a></li>
							<li><a href="<?php echo home_url('/services'); ?>" class="link" style="">Услуги</a></li>
							<li><a href="<?php echo home_url('/calculator'); ?>" class="link" style="">Калькулятор</a>
							</li>
							<li><a href="<?php echo home_url('/o-kompanii'); ?>" class="link" style="">О компании</a>
							</li>
							<li><a href="<?php echo home_url('/oplata-i-dostavka'); ?>" class="link"
									style="">Доставка</a></li>
							<li><a href="<?php echo home_url('/kontakty'); ?>" class="link" style="">Контакты</a></li>
							<li><a href="<?php echo home_url('/price-list'); ?>" class="link" style="">Прайс-лист</a>
							</li>

						</ul>
					</div>
					<!-- Мобильное меню  -->
					<div class="block-main-menu menu-mobile">
						<div class="line-link">
							<ul class="inner">
								<li><a href="<?php echo home_url('/o-kompanii/'); ?>" class="link"
										style="grid-area: link-1;">О&nbsp;компании</a></li>
								<li><a href="<?php echo home_url('/catalog'); ?>" class="link"
										style="grid-area: link-2;">Каталог продукции</a></li>
								<li><a href="<?php echo home_url('/services'); ?>" class="link link-3"
										style="grid-area: link-3;">Услуги</a></li>
								<li><a href="<?php echo home_url('/kontakty'); ?>" class="link link-4"
										style="grid-area: link-4;">Контакты</a></li>
								<li><a href="<?php echo home_url('/production'); ?>" class="link link-5"
										style="grid-area: link-5;">Производство</a></li>
								<li><a href="<?php echo home_url('/oplata-i-dostavka'); ?>" class="link link-6"
										style="grid-area: link-6;">Оплата и&nbsp;доставка</a></li>
								<li><a href="<?php echo home_url('/gallery'); ?>" class="link link-7"
										style="grid-area: link-7;">Галерея</a></li>
							</ul>
						</div>
					</div>
					<div class="block-main-right">
						<div class="logo-mob">
							<a href="<?php echo home_url('/'); ?>">
								<img
									src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-white.webp">
							</a>
						</div>
						<div class="block-main-right-top">
							<div class="block-main-right-top-text">
								<?php if (count(fw_get_db_settings_option('ul_general_phone_list')) > 0) {
									echo '<div class="block-main-right-phone">';
									echo '<a href="tel:+' . preg_replace('/[^0-9]+/', '', fw_get_db_settings_option('ul_general_phone_list')[0]['phone']) . '" class="change-phone">';
									echo '<span>' . fw_get_db_settings_option('ul_general_phone_list')[0]['phone'] . '</span>';
									echo '</a>';
									echo '</div>';
								} ?>
								<div class="block-main-right-email">
									<a href="mailto:met@gkmtk.pro">met<span>@</span>gkmtk.pro</a>
								</div>


							</div>
							<button class="btn-icon white callback" data-bs-toggle="modal"
								data-bs-target="#modalCallback">
								<span>Заказать звонок</span>
								<i class="icon-phone"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="block-bottom">
				<div class="row">
					<div class="col-2">
						<div class="block-bottom-copyright">
							<p>© 2017 - <?php echo date('Y'); ?> «Cталь-Н»<br> металлопрокат</p>
						</div>
					</div>
					<div class="col-10">
						<div class="block-bottom-content">
							<p class="block-bottom-content-text">
							Сайт носит информационный характер, не является публичной офертой. 
							Пользуясь сайтом Вы даете согласие на сбор, обработку и использование Ваших персональных данных согласно 
								<a href="<?php echo home_url('/privacy') ?>" target="_blank">Политике
									конфиденциальности</a>
							</p>
							<!-- <div class="block-bottom-content-dev">
								<div class="item">
									<a href="https://solt.design/" target="_blank">
										<img class="footer-solt lazy"
											data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/solt-logo.svg"
											alt="">
										<span>Сайт разработан<br> в <em>SOLT</em></span>
									</a>
								</div>
								<div class="item">
									<a href="https://demis.ru/" target="_blank">
										<img class="footer-solt lazy"
											data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/demis.webp"
											alt="">
										<span><span class="underline">Продвижение</span><br>сайта</span>
									</a>
								</div> -->



								<!-- <div class="item">
							<a href="https://solt.design/" target="_blank">
								<img class="demis lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/demis.webp" alt="">
							</a>
						</div>
						<div class="item">
							<a href="https://demis.ru/" target="_blank">
								<span><span class="underline">Продвижение</span><br>сайта</span>
							</a>
						</div> -->
								<!-- <div class="item">
							<a href="https://solt.design/" target="_blank">
								<img class="lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/demis-logo.svg" alt="">
								<span><em>Продвижение</em><br> сайта</span>
							</a>
						</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
</footer>