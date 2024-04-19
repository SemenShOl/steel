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

<section class="section-product-card">
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
                            от <b>146</b> руб.кг
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

                    <button class="nbtn">Быстрый заказ</button>

                    <div class="description-block">
                        <div class="description-block__header">
                            <button class="active">Описание</button>
                            <button>Характеристики</button>

                        </div>
                        <p class="description-block__info">
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
        <div class="pages-navigation">
            <div class="pages-navigation__numbers">
                <div class="pages-navigation__numbers-block">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
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
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
                </div>
            </div>
            <div class="pages-navigation__info">Показаны <span>1–20</span> из 740 товаров</div>
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