<?php
/* Template Name: Каталог */

$categories = get_the_category();

get_header(); ?>

<section class="l-page">
    <section class=" page-catalog">
        <div class="nwrapper">
            <div class="ncol-2 moveable">
                <div class="bread-crumbs">
                    <p>Главная</p>
                    <p>/Каталог</p>
                </div>
                <h3>Каталог</h3>
                <h1 class="section-title">Трубозапорная арматура</h1>

                <ul class="product-types">
                    <li class="product-type active">
                        <div class="type-title">
                            <h4>Трубозапорная арматура</h4>
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
                        </div>

                        <nav сlass="certain-product">
                            <ul>
                                <li>
                                    <a class="link">
                                        <p>Вентили (клапаны)</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="link">
                                        <p>Задвижки</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="link">
                                        <p>Затворы</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="link">
                                        <p>Клапаны обратные</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="link">
                                        <p>Краны шаровые под приварку</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="link">
                                        <p>Краны шаровые фланцевые, муфтовые</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </li>
                    <li class="product-type">
                        <div class="type-title">
                            <h4>Трубозапорная арматура</h4>
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
                        </div>

                    </li>
                    <li class="product-type">
                        <div class="type-title">
                            <h4>Трубозапорная арматура</h4>
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
                        </div>

                    </li>
                    <li class="product-type">
                        <div class="type-title">
                            <h4>Трубозапорная арматура</h4>
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
                        </div>

                    </li>
                    <li class="product-type">
                        <div class="type-title">
                            <h4>Трубозапорная арматура</h4>
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
                        </div>

                    </li>
                </ul>
            </div>
            <div class="ncol-10">
                <div class="bread-crumbs">
                    <p>Главная</p>
                    <p>/Каталог</p>
                </div>
                <h1 class="section-title">Трубозапорная арматура</h1>

                <div class="production-line">
                    <div class="product">
                        <a href="">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_1.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_2.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_3.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_4.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_5.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_6.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
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