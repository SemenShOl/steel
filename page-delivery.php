<?php
/* Template Name: Условия доставки */

get_header(); ?>

<section class="l-page page-partners page-delivery">

	<div class="nwrapper">
		<div class="ncol-2">
		</div>
		<div class="ncol-10">
			<h1 class="section-title">Оплата</h1>

			<div class="payment-info">
				<p>Уважаемые клиенты, у нас есть множество удобных способов оплаты. Мы стараемся стараемсярасширять
					способы оплаты по мере их появления.</p>
				<p class="max-sum">Минимальная сумма заказа 3000 руб.</p>
			</div>

			<div class="payment-types">
				<div class="payment-types__row">
					<div class="payment-types__img">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/payment/1.svg">

					</div>
					<h3>Безналичная оплата для юр.лиц</h3>
					<p>Самый популярный вид оплаты для юридических лиц. Мы работаем с НДС 20%. Данный вид оплаты
						занимает от 1 до 3х банковских дней. С товаром вам будет предоставлен чек и накладная на
						оплаченную продукцию.</p>
				</div>

				<div class="payment-types__row">
					<div class="payment-types__img">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/payment/2.svg">

					</div>
					<h3>Безналичная оплата для юр.лиц</h3>
					<p>Самый популярный вид оплаты для юридических лиц. Мы работаем с НДС 20%. Данный вид оплаты
						занимает от 1 до 3х банковских дней. С товаром вам будет предоставлен чек и накладная на
						оплаченную продукцию.</p>
				</div>
				<div class="payment-types__row">

					<div class="payment-types__img">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/payment/3.svg">

					</div>
					<h3>Безналичная оплата для юр.лиц</h3>
					<p>Самый популярный вид оплаты для юридических лиц. Мы работаем с НДС 20%. Данный вид оплаты
						занимает от 1 до 3х банковских дней. С товаром вам будет предоставлен чек и накладная на
						оплаченную продукцию.</p>
				</div>
				<div class="payment-types__row">
					<div class="payment-types__img">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/payment/4.svg">

					</div>
					<h3>Безналичная оплата для юр.лиц</h3>
					<p>Самый популярный вид оплаты для юридических лиц. Мы работаем с НДС 20%. Данный вид оплаты
						занимает от 1 до 3х банковских дней. С товаром вам будет предоставлен чек и накладная на
						оплаченную продукцию.</p>
				</div>
			</div>

		</div>
	</div>

</section>

<section class="l-page page-about-company">

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




<?php get_footer(); ?>