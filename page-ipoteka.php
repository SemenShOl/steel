<?php
/* Template Name: Ипотека и кредит */

get_header(); ?>

<section class="l-page page-ipoteka">

	<div class="wrapper">
		<div class="row">
			<div class="col-2">
				<div class="section-number wow fadeIn" data-wow-delay=".2s">
					<p>01</p>
					<p>Программы</p>
				</div>
			</div>
			<div class="col-10">
				<div class="page-title-block">
					<div class="section-title">
						<h1 class="wow fadeInUp" data-wow-delay=".2s"><?php the_title(); ?></h1>
					</div>

					<?php if (function_exists('bcn_display')) {
						echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".4s">';
						echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>';
						echo '</div>';
					} ?>
				</div>
				<div class="ipoteka-list">
					<div 
						class="ipoteka-list-item wow fadeIn" data-wow-delay=".2s"
						data-bs-toggle="modal" 
						data-bs-target="#modalCallback" 
						data-modal-title="Закажите расчёт платежа по&nbsp;семейной ипотеке"
						data-modal-form-name="Закажите расчёт платежа по&nbsp;семейной ипотеке"
					>
						<div class="ipoteka-image-container">
							<img class="ipoteka-image lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ipoteka/ipoteka-1.webp" alt="">
						</div>
						<p class="ipoteka-title ipoteka-card-m">Семейная ипотека</p>
						<div class="ipoteka-info-container">
							<div class="ipoteka-info-line ipoteka-card-m">
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">от</span>&nbsp;5,3&nbsp;%</p>
									<p class="ipoteka-info-subtitle">Процентная ставка</p>
								</div>
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">до</span>&nbsp;15&nbsp;<span class="ipoteka-info-small">млн</span></p>
									<p class="ipoteka-info-subtitle">Сумма кредита</p>
								</div>
							</div>
							<div class="ipoteka-info-devider"></div>
							<div class="ipoteka-info-line ipoteka-card-m">
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">от</span>&nbsp;20&nbsp;%</p>
									<p class="ipoteka-info-subtitle">Первоначальный взнос</p>
								</div>
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">до</span>&nbsp;30&nbsp;<span class="ipoteka-info-small">лет</span></p>
									<p class="ipoteka-info-subtitle">Срок кредита</p>
								</div>
							</div>
						</div>
						<div class="ipoteka-card-m mt-auto">
							<button class="btn-icon">
								<span>Расчитать</span>
								<i class="icon-arrow-right"></i>
							</button>
						</div>
					</div>
					<div 
						class="ipoteka-list-item wow fadeIn" data-wow-delay=".4s"
						data-bs-toggle="modal" 
						data-bs-target="#modalCallback" 
						data-modal-title="Закажите расчёт платежа по&nbsp;IT ипотеке"
						data-modal-form-name="Закажите расчёт платежа по&nbsp;IT ипотеке"
					>
						<div class="ipoteka-image-container">
							<img class="ipoteka-image lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ipoteka/ipoteka-2.webp" alt="">
						</div>
						<p class="ipoteka-title ipoteka-card-m">IT&nbsp;ипотека</p>
						<div class="ipoteka-info-container">
							<div class="ipoteka-info-line ipoteka-card-m">
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">от</span>&nbsp;4,7&nbsp;%</p>
									<p class="ipoteka-info-subtitle">Процентная ставка</p>
								</div>
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">до</span>&nbsp;18&nbsp;<span class="ipoteka-info-small">млн</span></p>
									<p class="ipoteka-info-subtitle">Сумма кредита</p>
								</div>
							</div>
							<div class="ipoteka-info-devider"></div>
							<div class="ipoteka-info-line ipoteka-card-m">
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">от</span>&nbsp;15&nbsp;%</p>
									<p class="ipoteka-info-subtitle">Первоначальный взнос</p>
								</div>
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">до</span>&nbsp;30&nbsp;<span class="ipoteka-info-small">лет</span></p>
									<p class="ipoteka-info-subtitle">Срок кредита</p>
								</div>
							</div>
						</div>
						<div class="ipoteka-card-m mt-auto">
							<button class="btn-icon">
								<span>Расчитать</span>
								<i class="icon-arrow-right"></i>
							</button>
						</div>
					</div>
					<div 
						class="ipoteka-list-item wow fadeIn" data-wow-delay=".6s"
						data-bs-toggle="modal" 
						data-bs-target="#modalCallback" 
						data-modal-title="Закажите расчёт платежа по&nbsp;ипотеке на&nbsp;строительство дома"
						data-modal-form-name="Закажите расчёт платежа по&nbsp;ипотеке на&nbsp;строительство дома"
					>
						<div class="ipoteka-image-container">
							<img class="ipoteka-image lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ipoteka/ipoteka-3.webp" alt="">
						</div>
						<p class="ipoteka-title ipoteka-card-m">Ипотека на&nbsp;строительство
							дома</p>
						<div class="ipoteka-info-container">
							<div class="ipoteka-info-line ipoteka-card-m">
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">от</span>&nbsp;9,9&nbsp;%</p>
									<p class="ipoteka-info-subtitle">Процентная ставка</p>
								</div>
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">до</span>&nbsp;10&nbsp;<span class="ipoteka-info-small">млн</span></p>
									<p class="ipoteka-info-subtitle">Сумма кредита</p>
								</div>
							</div>
							<div class="ipoteka-info-devider"></div>
							<div class="ipoteka-info-line ipoteka-card-m">
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">от</span>&nbsp;25&nbsp;%</p>
									<p class="ipoteka-info-subtitle">Первоначальный взнос</p>
								</div>
								<div class="ipoteka-info">
									<p class="ipoteka-info-title"><span class="ipoteka-info-small">до</span>&nbsp;30&nbsp;<span class="ipoteka-info-small">лет</span></p>
									<p class="ipoteka-info-subtitle">Срок кредита</p>
								</div>
							</div>
						</div>
						<div class="ipoteka-card-m mt-auto">
							<button class="btn-icon">
								<span>Расчитать</span>
								<i class="icon-arrow-right"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="section-number wow fadeIn" data-wow-delay=".2s">
					<p>02</p>
					<p>Перечень банков<br>
						участников</p>
				</div>
			</div>
			<div class="col-10">
				<div class="section-title">
					<h2 class="wow fadeInUp" data-wow-delay=".2s">Банки партнеры</h2>
				</div>
				<div class="ipoteka-partners">
					<img class=" wow fadeIn" data-wow-delay=".2s" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ipoteka/1.svg" alt="">
					<img class=" wow fadeIn" data-wow-delay=".3s" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ipoteka/2.svg" alt="">
					<img class=" wow fadeIn" data-wow-delay=".4s" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ipoteka/3.svg" alt="">
					<img class=" wow fadeIn" data-wow-delay=".5s" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ipoteka/4.svg" alt="">
					<img class=" wow fadeIn img-5" data-wow-delay=".6s" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ipoteka/5.svg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<?php
// Section - Contacts
get_template_part('template-parts/section-contacts', null, array(
	'section-number' => '03',
	'section-title' => 'Остались вопросы <br/>по&nbsp;ипотеке?',
	'section-subtitle' => 'Запишитесь на&nbsp;бесплатную консультацию, поможем подобрать выгодное ипотечное решение
и&nbsp;получить одобрение в&nbsp;банках',
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