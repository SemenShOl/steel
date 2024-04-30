<?php
/* Template Name: Оплата */

get_header(); ?>

<section class="l-page">
	<section class="page-payment">

		<div class="nwrapper">
			<div class="ncol-2">
			</div>
			<div class="ncol-10">
				<div class="bread-crumbs">
					<p>Главная</p>
					<p>/Оплата</p>
				</div>
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


<section class="main-modal">
	<div class="main-modal__bg">
		<div class="main-modal__content">
			<button class="main-close-btn">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/metall/modal-close.svg">
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
				<button class="nbtn submit send-btn">
					<span>Перезвоните мне</span>
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
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/metall/modal-close.svg">
			</button>
			<h3 class="modal-title">Ваша заявка принята!</h3>
			<p>Менеджер свяжется в ближайшее время</p>
		</div>
	</div>
</section>


<?php get_footer(); ?>

<!-- Мобильное меню header -->
<script>
	const moreInfo = document.querySelector('.header-more-info');
	const lPage = document.querySelector('.l-page');
	const footer = document.querySelector('.nfooter');
	const contactsAndMap = document.querySelector('.section-contact-map')
	const mobilePart = document.querySelector('.mobile-part');
	const nheader = document.querySelector('.nheader');


	moreInfo.addEventListener('click', () => {
		lPage.classList.toggle('hidden');
		footer.classList.toggle('hidden');
		contactsAndMap.classList.toggle('hidden')
		mobilePart.classList.toggle('active');
	})


</script>

<!-- Модально окно -->
<script>
	const btnsAskPrice = document.querySelectorAll('.ask-price');

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

	btnsAskPrice.forEach(btn => {
		btn.addEventListener('click', () => {
			onOpenModalMain();
		})
	})

</script>