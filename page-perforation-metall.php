<?php
/* Template Name: Перфорация металла */

get_header();
?>


<section class="l-page page-perforation-metall">
    <div class="bread-crumbs">
        <p>Главная</p>
        <p>/Прайс-лист</p>
    </div>
    <h1 class="section-title">Перфорация металла</h1>
    <div class="perforation-body">
        <div class="img-and-button">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/metall/perforation.png">
            <button class="nbtn">Быстрый заказ</button>
        </div>
        <p class="gray-text">Технологический процесс выполняется на координатно-пробивном прессе с ЧПУ, благодаря
            чему достигается высокая точность и оперативность выполнения заказа. В функционал оборудования входят и
            другие операции, такие как высечка плоских деталей и пуклевка. <br> <br> Перфорация металла на заказ
            производится
            по техническому заданию заказчика, в котором указывается форма пробиваемых отверстий и межцентровой шаг.
            Оборудование позволяет делать отверстия круглой, продолговатой, квадратной, прямоугольной, треугольной и
            другой формы.<br> <br> В качестве материала для перфорации на дыропробивном прессе, мы предлагаем
            листовую
            нержавеющую сталь, толщиной до 2 мм, или цветной листовой металл – до 4 мм. Максимальные размеры
            перфорированных листов составляют 1250 х 2500 мм. Диаметр отверстий варьирует от равного толщине металла
            до 37 мм. Для металла большей толщины, перфорация выполняется гидроабразивным способом или на фрезерных
            станках.<br> <br> Учитывая возможность последующей механической обработки: резки, гибки, сварки,
            покраски и др.,
            мы можем предложить изготовление полуфабрикатов или конечных деталей со сплошной или частичной
            перфорацией.<br> <br> Перфорация листового металла может производиться с различными целями: уменьшить
            вес детали
            или конструкции, обеспечить светопроницаемость или циркуляцию газа/жидкости, а также в декоративных
            целях.<br> <br> Мы готовы обеспечить бесперебойные поставки перфорированных металлических листов или
            деталей на
            производство, а также выполняем единичные заказы в любом нужном объеме. Сотрудничать с нами выгодно, так
            как у нас всегда разумные и обоснованные цены, а покупать собственное дорогостоящее оборудование не
            всегда рентабельно. Выполнение заказа и доставка по Москве и области осуществляется в сжатые сроки.</p>
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


<?php get_footer(); ?>