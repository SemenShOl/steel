<?php
/* Template Name: Доставка */

get_header();
?>


<section class="page-delivery">
    <div class="nwrapper">
        <div class="ncol-2">
            <p>Наши<br> преимущества</p>
        </div>
        <div class="ncol-10">
            <h1 class="section-title">Доставка</h1>
            <p class="delivery-description gray-text">Наша компания рада вашим заказам, для вашего комфорта у нас есть
                собственная служба
                доставки. Получить оплаченную продукцию от Сталь-Н вы можете путем доставки или бесплатным самовывозом
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