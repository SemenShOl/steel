<?php
/* Template Name: О компании */

get_header(); ?>

<section class="l-page page-price-list">
    <div class="nwrapper">
        <div class="ncol-2"></div>
        <div class="ncol-10">
            <div class="bread-crumbs">
                <p>Главная</p>
                <p>/Прайс-лист</p>
            </div>
            <h1 class="section-title">Прайс-лист</h1>

            <div class="price-info">
                <p class="description">Уважаемые клиенты, мы разместили прайс-листы в формате MS Excel для того чтобы вы
                    могли в любой момент могли ознакомится с нашим ассортиментом. В наших прайс-листах вы найдете всю
                    поставляем продукцию, наши контакты, ознакомительные цены*, размеры металлопроката и прочую
                    информацию. В прайс-листах указанно что мы оказываем услуги по резке и рубке в размер, о точных
                    ценах на данные услуги уточняйте у наших менеджеров.
                    <br>
                    <br> * Обращаем ваше внимание что цены указанные в
                    ниже приведенных прайс-листах не являются публичной офертой ст.437 (ч.2) ГК РФ. Цены необходимо
                    уточнять по телефону или электронной почте у наших менеджеров.
                </p>
                <div class="price-info__rows">
                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button class="download-price-list">Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button class="download-price-list">Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button class="download-price-list">Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button class="download-price-list">Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button class="download-price-list">Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button class="download-price-list">Скачать прайс-лист</button>
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

<script>
    const btnGetPritceLists = document.querySelectorAll('.download-price-list');

    btnGetPritceLists.forEach(btn => {
        btn.addEventListener('click', () => {
            var link = document.createElement('a');
            link.setAttribute('href', '<?php echo esc_url(get_template_directory_uri()); ?>/assets/price-list/empty-file.txt');
            link.setAttribute('download', 'price-list.txt');

            link.click();
        })
    })
</script>


<?php get_footer(); ?>