<?php
/* Template Name: Доставка */

get_header();
?>

<section class="l-page">
    <section class="page-delivery">
        <div class="nwrapper">
            <div class="ncol-2">
                <p>Наши<br> преимущества</p>
            </div>
            <div class="ncol-10">
                <div class="bread-crumbs">
                    <p>Главная</p>
                    <p>/Доставка</p>
                </div>
                <h1 class="section-title">Доставка</h1>
                <p class="delivery-description gray-text">Наша компания рада вашим заказам, для вашего комфорта у нас
                    есть
                    собственная служба
                    доставки. Получить оплаченную продукцию от Сталь-Н вы можете путем доставки или бесплатным
                    самовывозом
                    со склада в вашем городе.</p>
                <div class="delivery-block">
                    <div class="delivery-block__info">
                        <p class="gray-text">Оплатить доставку можно по счету или наличными при получении заказа</p>
                        <p class="gray-text">Доставка в день заказа (при наличии на складе)</p>
                        <p class="gray-text">Бесплатная доставка до "Транспортной Компании" при отправке в регионы</p>
                        <p class="gray-text">Доставка собственным автотранспортом</p>
                    </div>

                    <div class="delivery-block__car-brand">
                        <div class="car-brand__title">
                            <p class="car-brand__item">Марка машины</p>
                            <p class="car-brand__item">Длина тоннаж</p>
                            <p class="car-brand__item">Доставка по РФ, цена за 1 км</p>
                        </div>

                        <div class="car-brand__row">
                            <p class="car-brand__item">Газель</p>
                            <p class="car-brand__item">6м, 2т</p>
                            <p class="car-brand__item">15 ₽</p>
                        </div>
                        <div class="car-brand__row">
                            <p class="car-brand__item">Газель</p>
                            <p class="car-brand__item">6м, 2т</p>
                            <p class="car-brand__item">15 ₽</p>
                        </div>
                        <div class="car-brand__row">
                            <p class="car-brand__item">Газель</p>
                            <p class="car-brand__item">6м, 2т</p>
                            <p class="car-brand__item">15 ₽</p>
                        </div>
                        <div class="car-brand__row">
                            <p class="car-brand__item">Газель</p>
                            <p class="car-brand__item">6м, 2т</p>
                            <p class="car-brand__item">15 ₽</p>
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
</section>


<!-- 
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
</script> -->

<script>
    const moreInfo = document.querySelector('.header-more-info');
    const lPage = document.querySelector('.l-page');
    const mobilePart = document.querySelector('.mobile-part');
    const nheader = document.querySelector('.nheader');

    console.log(moreInfo)
    moreInfo.addEventListener('click', () => {
        lPage.classList.toggle('hidden');
        mobilePart.classList.toggle('active');
    })


</script>

<?php get_footer(); ?>