<?php
/* Template Name: Услуги */

get_header();

// $servicesAllArr = array();
$queryServices = new WP_Query(
    array(
        'post_type' => 'architectural-styles',
        'posts_per_page' => -1,
        'order' => 'ASC',
    )
);
// if ($queryServices->posts) {
//   foreach ($queryServices->posts as $post) : setup_postdata ($post);
//       array_push($servicesAllArr, $post);
//   endforeach;
// }

?>

<section class="l-page section-product-card">
    <div class="nwrapper">
        <div class="product-description">
            <div class="bread-crumbs">
                <p>Главная</p>
                <p>/Каталог</p>
                <p>/Трубозапорная арматура</p>
            </div>
            <h1 class="section-title">Задвижка стальная 30лс15нж (PN 40, DN 50-350)</h1>
            <div class="product-description__product">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/big-product.png">

                <div class="product-description__product-info">
                    <div class="short-info">
                        <div class="short-info__column">
                            <p>Розничная цена</p>
                            <span>
                                от <b>146</b> руб.кг
                            </span>
                        </div>

                        <div class="short-info__column">
                            <p>Оптовая цена</p>
                            <span>Уточняйте</span>
                        </div>
                        <div class="short-info__column">
                            <p>Наличие</p>
                            <div class="attetion-p">В наличии</div>
                        </div>
                    </div>

                    <button class="nbtn ask-price">Быстрый заказ</button>

                    <div class="description-block">
                        <div class="description-block__header">
                            <button class="active">Описание</button>
                            <button>Характеристики</button>

                        </div>
                        <p class="description-block__info t-s">
                            Для управления потоком, движущимся в трубопроводах различного назначения, применяется
                            специальная
                            арматура.
                            Это, в частности, поворотные дисковые затворы, которые по своей сути являются
                            запорно-регулирующими
                            устройствами. Они играют свою важную роль не только в бытовых системах водоснабжения,
                            вентиляции,
                            отопления
                            и прочих. Такая арматура не менее востребована в пищевой, металлургической, нефтегазовой и
                            других отраслях
                            промышленности.
                            <br> <br>
                            При этом полезно знать, что существуют упомянутые устройства, управляемые вручную. Другие
                            затворы оснащены электро- или пневмоприводом. Средой, которой управляют названные элементы
                            трубопровода,
                            может являться, например, питьевая или техническая вода, пищевые продукты, нефть, газ.
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <div class="available-products">
            <div class="available-products__header">
                <div class="p-arrow">
                    <p>Наименование</p>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">

                </div>
                <p>Количество</p>
                <p>Единицы измерения</p>
                <div class="p-arrow">
                    <p>Цена оптовая</p>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">

                </div>
            </div>
            <div class="available-products__line"></div>
            <div class="available-products__rows">
                <div class="available-products__row">
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>
                    <p>Килограмм (кг)</p>
                    <p>Уточняйте</p>

                    <button class="ask-price">Запросить цену</button>
                </div>
                <div class="available-products__row">
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>
                    <p>Килограмм (кг)</p>
                    <p>Уточняйте</p>

                    <button class="ask-price">Запросить цену</button>
                </div>
                <div class="available-products__row">
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>
                    <p>Килограмм (кг)</p>
                    <p>Уточняйте</p>

                    <button class="ask-price">Запросить цену</button>
                </div>
                <div class="available-products__row">
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>
                    <p>Килограмм (кг)</p>
                    <p>Уточняйте</p>

                    <button class=" ask-price">Запросить цену</button>
                </div>
                <div class="available-products__row">
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>
                    <p>Килограмм (кг)</p>
                    <p>Уточняйте</p>

                    <button class="ask-price">Запросить цену</button>
                </div>
                <div class="available-products__row">
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>
                    <p>Килограмм (кг)</p>
                    <p>Уточняйте</p>

                    <button class="ask-price">Запросить цену</button>
                </div>
                <div class="available-products__row">
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>
                    <p>Килограмм (кг)</p>
                    <p>Уточняйте</p>
                    <button class="ask-price">Запросить цену</button>
                </div>
                <div class="available-products__row">
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>
                    <p>Килограмм (кг)</p>
                    <p>Уточняйте</p>
                    <button class="ask-price">Запросить цену</button>

                </div>
            </div>
        </div>

        <div class="available-products mobile">
            <div class="available-products__card">
                <div class="product-info-pair">
                    <p class="gray-text">Наименование</p>
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Количество</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>

                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Единицы измерения</p>
                    <p>Килограмм (кг)</p>
                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Цена оптовая</p>
                    <p>Уточняйте</p>
                </div>

                <button class="ask-price">Запросить цену</button>

            </div>
            <div class="available-products__card">
                <div class="product-info-pair">
                    <p class="gray-text">Наименование</p>
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Количество</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>

                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Единицы измерения</p>
                    <p>Килограмм (кг)</p>
                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Цена оптовая</p>
                    <p>Уточняйте</p>
                </div>

                <button class="ask-price">Запросить цену</button>

            </div>
            <div class="available-products__card">
                <div class="product-info-pair">
                    <p class="gray-text">Наименование</p>
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Количество</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>

                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Единицы измерения</p>
                    <p>Килограмм (кг)</p>
                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Цена оптовая</p>
                    <p>Уточняйте</p>
                </div>

                <button class="ask-price">Запросить цену</button>

            </div>
            <div class="available-products__card">
                <div class="product-info-pair">
                    <p class="gray-text">Наименование</p>
                    <p>Задвижка стальная 30лс15нж (PN 40, DN 50-350)</p>
                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Количество</p>
                    <div class="number-btns">
                        <div class="action">-</div>
                        <div class="number">1</div>
                        <div class="action">+</div>
                    </div>

                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Единицы измерения</p>
                    <p>Килограмм (кг)</p>
                </div>
                <div class="product-info-pair">
                    <p class="gray-text">Цена оптовая</p>
                    <p>Уточняйте</p>
                </div>

                <button class="ask-price">Запросить цену</button>

            </div>
        </div>
        <div class="pages-navigation">
            <div class="pages-navigation__numbers">
                <div class="pages-navigation__numbers-block">
                    <!-- <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14" fill="none">
                        <path d="M8 7L1.74073 1L0.999999 1.70459L6.56606 7L1 12.2953L1.74073 13L8 7Z"
                            fill="currentColor" stroke="currentColor" />
                    </svg>
                </div>
                <div class="pages-navigation__numbers-block active">
                    <p>1</p>
                </div>
                <div class="pages-navigation__numbers-block">
                    <p>2</p>
                </div>
                <div class="pages-navigation__numbers-block">
                    <p>3</p>
                </div>
                <div class="pages-navigation__numbers-block">
                    <p>4</p>
                </div>
                <div class="pages-navigation__numbers-block pre-last">
                    <p>5</p>
                </div>
                <div class="pages-navigation__numbers-block ">
                    <p>...</p>
                </div>
                <div class="pages-navigation__numbers-block last">
                    <p>42</p>
                </div>
                <div class="pages-navigation__numbers-block ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14" fill="none">
                        <path d="M8 7L1.74073 1L0.999999 1.70459L6.56606 7L1 12.2953L1.74073 13L8 7Z"
                            fill="currentColor" stroke="currentColor" />
                    </svg>
                </div>
            </div>
            <div class="pages-navigation__info">Показаны &nbsp; <span>1–20</span>&nbsp; из &nbsp;740&nbsp;
                товаров
            </div>
        </div>
    </div>

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