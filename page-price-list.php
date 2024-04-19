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
                        <button>Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button>Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button>Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button>Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button>Скачать прайс-лист</button>
                    </div>

                    <div class="price-info__row">
                        <p class="title">Нержавеющий прокат</p>
                        <button>Скачать прайс-лист</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<section class="section-contact-map">
    <div class="nwrapper">
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

            <?php
            //Section - Map
            get_template_part('template-parts/section-map');

            ?>
        </div>
    </div>

</section>


<?php get_footer(); ?>