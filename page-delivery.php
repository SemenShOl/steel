<?php
/* Template Name: Условия доставки */

get_header(); ?>

<section class="l-page page-partners page-delivery">

	<div class="wrapper">
		<div class="row">
			<div class="col-2">
				<div class="section-number wow fadeIn" data-wow-delay=".2s">
					<p>01</p>
					<p>Доставка</p>
				</div>
			</div>
			<div class="col-10">
				<?php if (function_exists('bcn_display')) {
					echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".3s">';
					echo '<div class="breadcrumbs-inner">';
					bcn_display();
					echo '</div>';
					echo '</div>';
				} ?>
				<div class="text-wrapper">
					<div class="text">
						<div class="partners-title">
							<h1 class="wow fadeInUp" data-wow-delay=".2s">Условия доставки</h1>
						</div>

						<div class="mw-1020 font-400-20-150 mb-60-40 wow fadeIn" data-wow-delay=".4s">
							<p>Компания "Сталь и точка" осуществляет доставку металлопроката в любой регион Российской Федерации.</p>
							<p>Доставка производится, как собственным автотранспортом до склада клиента, так и посредством транспортных компаний на ваш выбор, авиа, авто и ЖД.</p>

							<ul>
								<li>До терминала транспортных компаний довозим своими силами.</li>
								<li>Отгрузка осуществляется на следующий день после поступления предоплаты.</li>
							</ul>

							<p>Оплата производится по выставленным счетам.</p>
							<p>Также возможны индивидуальные условия сотрудничества, по обоюдному согласованию и заключении договора.</p>
						</div>
					</div>
					<!-- <div class="image">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/page-about-company-video.jpg" alt="">
					</div> -->
				</div>


			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="row">
			<div class="col-2">

				<div class="section-number partners-side-lable wow fadeIn" data-wow-delay=".2s">
					<p>02</p>
					<p>Оплата</p>
				</div>
			</div>
			<div class="col-10">
				<p class="partners-list-header wow fadeInUp" data-wow-delay=".2s">Способы оплаты</p>
				<div class="partners-list">
					<div class="partners-list-item wow fadeIn" data-wow-delay=".2s">
						<div class="partners-list-mark">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/1.svg" alt="">
						</div>
						<div class="partners-list-body">
							<p>На расчетный счет</p>
							<p>Оплата производится по&nbsp;выставленному счету. Подтверждением оплаты является платежное поручение с&nbsp;отметкой банка.</p>
						</div>
					</div>
					<div class="partners-list-item wow fadeIn" data-wow-delay=".3s">
						<div class="partners-list-mark">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/2.svg" alt="">
						</div>
						<div class="partners-list-body">
							<p>В офисах продаж наличными средствами</p>
							<p>Обсудить все вопросы, рассчитать стоимость доставки и&nbsp;договориться о&nbsp;способе оплаты вы&nbsp;можете с&nbsp;нашими специалистами в&nbsp;офисах продаж.</p>
						</div>
					</div>
					<!-- <div class="partners-list-item wow fadeIn" data-wow-delay=".4s">
            <div class="partners-list-mark">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partners/3.svg" alt="">
            </div>
            <div class="partners-list-body">
              <p>При получении продукции наличными средствами</p>
              <p>Мы&nbsp;всегда готовы идти навстречу нашим клиентам. При заказе большого объема продукции оплата может быть осуществлена по&nbsp;факту получения груза.</p>
            </div>
          </div> -->
				</div>
			</div>
		</div>
</section>

<?php
// Section - Contacts
get_template_part('template-parts/section-contacts', null, array(
	'section-number' => '04',
	'section-title' => 'Заинтересовало<br/>
предложение?',
	'section-subtitle' => 'Запишем на&nbsp;консультацию или<br/> экскурсию на&nbsp;наши строящиеся объекты',
	'circle-button-text-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-contacts.svg',
	'circle-button-icon-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-contacts-phone.svg',
	'mobile-button-text' => 'Записаться',
));
?>

<?php
// Section - Map
get_template_part('template-parts/section-map');
?>



<?php get_footer(); ?>