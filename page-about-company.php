<?php
/* Template Name: О компании */

get_header(); ?>

<section class="l-page page-about-company">
    <div class="nwrapper">
        <div class="ncol-2"></div>
        <div class="ncol-10">
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



<?php
// Section - Contacts
get_template_part(
    'template-parts/section-contacts',
    null,
    array(
        'section-number' => '08',
        'section-title' => 'Познакомимся<br> вживую?',
        'section-subtitle' => 'Запишитесь на бесплатную консультацию, проведем экскурсию на наши строящиеся объекты. Вы своими глазами оцените наш подход — сделать выбор станет легче и увереннее!',
    )
);

if ($args['section-number'])
    $sectionNumber = $args['section-number'];
if ($args['section-title'])
    $sectionTitle = $args['section-title'];
if ($args['section-subtitle'])
    $sectionSubtitle = $args['section-subtitle'];
if ($args['form-title'])
    $formTitle = $args['form-title'];
?>

<?php
// Section - Map
get_template_part('template-parts/section-map');
?>
</section>

<?php get_footer(); ?>