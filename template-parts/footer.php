<footer class="nfooter">
	<div class="nwrapper">
		<div class="ncol-2">
			<div class="logo">
				<a href="<?php echo home_url('/'); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/n_Dark_logo.svg">

				</a>
			</div>
			<div class="privacy-footer top">© 2017 - 2024 «Cталь-Н»
				металлопрокат</div>
		</div>
		<div class="ncol-10">
			<div class="logo">
				<a href="<?php echo home_url('/'); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/n_Dark_logo.svg">

				</a>
			</div>
			<div class="top-part">
				<ul class="top-part__nav-list">
					<li><a href="<?php echo home_url('/katalog'); ?>">Продукция</a>
					</li>
					<li><a href="<?php echo home_url('/payment'); ?>">Оплата</a></li>
					<li><a href="<?php echo home_url('/perforation-metall'); ?>">Услуги</a>
					<li><a href="<?php echo home_url('/calculator'); ?>">Калькулятор</a>
					<li><a href="<?php echo home_url('/about'); ?>">О компании</a>
					<li><a href="<?php echo home_url('/delivery'); ?>">Доставка</a></li>
					<li><a href="<?php echo home_url('/contcats'); ?>">Контакты</a></li>
					<li><a href="<?php echo home_url('/price-list'); ?>">Прайс-лист</a>
					</li>

				</ul>

				<div class="top-part__contacts">
					<div class="contacts__phone">
						<?php /* if (count(fw_get_db_settings_option('ul_general_phone_list')) > 0) {
													  echo '<div class="block-main-right-phone">';
													  echo '<a href="tel:+' . preg_replace('/[^0-9]+/', '', fw_get_db_settings_option('ul_general_phone_list')[0]['phone']) . '" class="change-phone">';
													  echo '<span>' . fw_get_db_settings_option('ul_general_phone_list')[0]['phone'] . '</span>';
													  echo '</a>';
													  echo '</div>'; 
												  } */
						?>
						<a href="tel:79628288777" class="change-phone">+7 (962) 828-87-77</a>
					</div>
					<a class="contacts__email" href=" mailto:steel-n2@bk.ru">steel-n2<span>@</span>bk.ru</a>
					<!-- <button class="nbtn ask-price" data-bs-toggle="modal" data-bs-target="#modalCallback">
						<span>Заказать звонок</span>
					</button> -->
					<button class="nbtn ask-price">
						<span>Заказать звонок</span>
					</button>
				</div>
			</div>

			<div class="bottom-part">
				<p class="privacy-footer top">© 2017 - 2024 «Cталь-Н»
					Металлопрокат</p>
				<p class="privacy-footer">Сайт носит информационный характер, не является публичной офертой. Пользуясь
					сайтом
					Вы даете согласие
					на сбор, обработку и использование Ваших персональных данных согласно Политике конфиденциальности
				</p>
			</div>

		</div>
	</div>

</footer>