<?php
/* Template Name: Контакты */

get_header(); ?>

<section class="l-page page-contacts">

    <div class="nwrapper">
        <div class="ncol-2 first">
            <p>Новосибирск</p>

        </div>
        <div class="ncol-10">
            <div class="bread-crumbs">
                <p>Главная</p>
                <p>/Контакты</p>
            </div>
            <h1 class="section-title">Контакты</h1>
            <!-- <div class="contact-grid"> -->
            <div class="places">
                <div class="contact-type">
                    <h3 class="contact-type__title">Офис продаж</h3>
                    <p class="contact-type__info"><b>+7 (965) 827-90-06</b>
                        <br><br> пн-пт 9:00-18:00, без перерыва
                    </p>
                    <button class="nbtn">Заказать звонок</button>
                </div>
                <div class="contact-type">
                    <h3 class="contact-type__title">Офис продаж</h3>
                    <p class="contact-type__info"><b>+7 (965) 827-90-06</b>
                        <br><br> пн-пт 9:00-18:00, без перерыва
                    </p>
                    <button class="nbtn">Заказать звонок</button>
                </div>
                <div class="contact-type">
                    <h3 class="contact-type__title">Электронная почта</h3>
                    <p class="contact-type__info"><b>steel-n@bk.ru</b>
                    </p>
                    <button class="nbtn">Заказать звонок</button>
                </div>
                <div class="contact-type">
                    <h3 class="contact-type__title">Электронная почта</h3>
                    <p class="contact-type__info"><b>steel-n@bk.ru</b>
                    </p>
                    <button class="nbtn">Заказать звонок</button>
                </div>
                <!-- </div> -->



            </div>

        </div>
    </div>
    <div class="nwrapper">
        <div class="ncol-2">
            <p>Другие города</p>

        </div>
        <div class="ncol-10">
            <div class="other-cities">
                <div class="cities-list">
                    <u>Абакан</u>
                    <u class="active">Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>

                    <u>Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>

                    <u>Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>
                    <u>Абакан</u>


                </div>

                <div class="places">
                    <div class="contact-type">
                        <h3 class="contact-type__title">Офис продаж</h3>
                        <p class="contact-type__info"><b>+7 (965) 827-90-06</b>
                            <br><br> пн-пт 9:00-18:00, без перерыва
                        </p>
                        <button class="nbtn">Заказать звонок</button>
                    </div>

                </div>
            </div>

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