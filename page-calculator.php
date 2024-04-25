<?php

/* Template Name: Калькулятор */
get_header();

?>

<section class="l-page page-calculator ">
    <div class="nwrapper">
        <div class="ncol-2 moveable">
            <div class="bread-crumbs">
                <p>Главная</p>
                <p>/Каталог</p>
            </div>
            <h1 class="section-title">Калькулятор металлопроката</h1>

            <ul class="product-types">
                <li class="product-type active">
                    <nav сlass="certain-product">
                        <ul>
                            <li>
                                <a class="link not-bordered">
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

            </ul>
        </div>
        <div class="ncol-10">
            <div class="bread-crumbs">
                <p>Главная</p>
                <p>/Калькулятор металлопроката</p>
            </div>
            <h1 class="section-title">Калькулятор металлопроката</h1>

            <div class="metall-types">
                <div class="metall-types__item active">Нержавеющая сталь</div>
                <div class="metall-types__item">Алюминий</div>
                <div class="metall-types__item">Медь</div>
                <div class="metall-types__item">Латунь</div>
                <div class="metall-types__item">Бронза</div>

            </div>

            <div class="metall-info">
                <div class="metall-info__scheme">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/metall/scheme.svg">

                </div>

                <div class="metall-info__inputs">
                    <div class="form-group">
                        <label>Внешний диаметр, мм</label>
                        <input type="number" class="form-control" placeholder="Например, 100">

                    </div>
                    <div class="form-group">
                        <label>Количество, шт</label>
                        <input type="number" class="form-control" placeholder="Например, 100">

                    </div>
                    <div class="form-group">
                        <label>Толщина стенки, мм</label>
                        <input type="number" class="form-control" placeholder="Например, 100">

                    </div>
                    <div class="form-group">
                        <label class="text-red">Общий вес, т</label>
                        <input type="number" class="form-control" placeholder="Например, 100">

                    </div>
                    <div class="form-group">
                        <label>Длина, мм</label>
                        <input type="number" class="form-control" placeholder="Например, 100">

                    </div>
                    <div></div>
                    <div class="form-group">
                        <label class="text-red">Вес 1 шт, кг</label>
                        <input type="number" class="form-control" placeholder="Например, 100">

                    </div>
                    <button class="nbtn ">Рассчитать стоимость</button>
                </div>
                <p class="metall-info__description">
                    Калькулятор металла позволяет вам быстро и точно рассчитать вес выбранного металлопроката,
                    основываясь на его размерах. Это очень полезный инструмент при планировании и оценке проектов, а
                    также при заказе необходимого количества материала. Мы надеемся, что наш калькулятор металла будет
                    полезным для вас. Если у вас возникнут вопросы или потребуется дополнительная информация, не
                    стесняйтесь обращаться!
                </p>
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




<?php get_footer(); ?>