<?php
/* Template Name: Каталог */
get_header();

$pageData = $GLOBALS['pageData'];


// Хлебные крошки 
function searchParentCategory($arr, $catId, &$breadcrumbCats) {
    $results = [];
    searchInArray($arr, $catId, 'id', $results);

    if (count($results) > 0) {
        array_push($breadcrumbCats, array( 
            'name' => $results[0]['name'],
            'href' => $results[0]['href']
        ));

        if ($results[0]['parentCategory']) {
            searchParentCategory($arr, $results[0]['parentCategory'], $breadcrumbCats);
        }
    }
}

$breadcrumbCats = [];
searchParentCategory($pageData['allData'], $pageData['selectData']['parentCategory'], $breadcrumbCats);


if ($pageData['selectData']) :
?>

<section class="l-page page-single-home page-catalog">

    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="page-title-block">
                    <div class="breadcrumbs wow fadeIn" data-wow-delay=".4s">
                        <div class="breadcrumbs-inner">
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" href="<?php echo home_url( '/' ); ?>">
                                    <span property="name">Главная</span>
                                </a>
                                <meta property="position" content="1">
                            </span>
                            <span class="sep">/</span>
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" href="<?php echo home_url( '/catalog' ); ?>">
                                    <span property="name">Каталог</span>
                                </a>
                                <meta property="position" content="2">
                            </span>
                            <span class="sep">/</span>


                            <?php   
                                if (count($breadcrumbCats) > 0) {
                                    foreach (array_reverse($breadcrumbCats) as $key => $cat) {
                                        echo '<span property="itemListElement" typeof="ListItem">';
                                            echo '<a property="item" typeof="WebPage" href="' . $cat['href'] . '">';
                                                echo '<span property="name">' . $cat['name'] . '</span>';
                                            echo '</a>';
                                            echo '<meta property="position" content="' . ($key + 3) . '">';
                                        echo '</span>';
                                        echo '<span class="sep">/</span>';
                                    }
                                }
                            ?>

                            <span property="itemListElement" typeof="ListItem">
                                <span property="name"><?php echo $pageData['selectData']['name']; ?></span>
                                <meta property="position" content="<?php echo (3 + count($breadcrumbCats)); ?>">
                            </span>
                        </div>
                    </div>

                    <div class="section-title">
                        <?php if (!$pageData['selectData']['childrenCategoryParsed']) : ?>
                            <div class="back wow fadeIn" data-wow-delay=".2s">
                                <a class="link" href="<?php echo $breadcrumbCats[0]['href']; ?>"></a>
                            </div>
                        <?php endif; ?>
                        <h1 class="wow fadeInUp" data-wow-delay=".2s"><?php echo $pageData['selectData']['name']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    <?php if ($pageData['selectData']['childrenCategory']) : ?> 
        <!-- Подкатегории -->
        <div class="wrapper">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <?php get_template_part( 'template-parts/catalog-sidebar'); ?>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="catalog-wrapper"> 
                        <?php if (count($pageData['selectData']) > 0) : ?>
                            <?php if ($pageData['selectData']['childrenCategory']) : ?>
                                <?php if (count($pageData['selectData']['childrenCategoryParsed']) > 0) : ?>
                                    <div class="catalog-list">
                                        <?php
                                            foreach ($pageData['selectData']['childrenCategoryParsed'] as $key => $item) {
                                                get_template_part( 'template-parts/catalog-list-single', null, array(
                                                    'id' => $item['id'],
                                                    'name' => $item['name'],
                                                    'href' => $item['href'],
                                                    'image' => $item['image'],
                                                    
                                                ) );
                                            }
                                        ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php else : ?>
                            <p>Ничего не найдено</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>

        <!-- Товары -->
        <section class="catalog-single-page">
            <div class="wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="main-block">
                            <div class="images">
                                <?php
                                    $image = esc_url(get_template_directory_uri()) . '/assets/data/catalog-images/'; 
                                    $image .= preg_replace('/catalog\//', '', trim($GLOBALS['pageSlug'], '/')) . '-1.jpg'; 
                                ?> 
                                <img src="<?php echo $image; ?>"> 
                            </div>
                            <div class="content">
                                
                                <div class="description">
                                    <h4>Описание</h4>
                                    <?php if ($pageData['selectData']['description'] == null) : ?>
                                        <div class="text">
                                            <!-- <p> 
                                                <?php echo $pageData['selectData']['name']; ?> 
                                                поставляется со склада 
                                                <?php if (count(fw_get_db_settings_option('ul_general_phone_list')) > 0) {
                                                    echo 'в г.';
                                                    echo '<span class="change-city">' . fw_get_db_settings_option('ul_general_phone_list')[0]['city'] . '</span>';
                                                } ?>
                                            </p> -->


                                            <!-- Высокопрочные листы описание -->
                                            <?php if ($GLOBALS['pageSlug'] == '/catalog/list-iz-vysokoprochnoj-stali') : ?>
                                                <p>Для производства износостойких деталей используются лучшие материалы от&nbsp;мировых 
                                                производителей высокопрочной стали Hardox, Magstrong, Quard, Powerhard, Relia, Strenx 
                                                и&nbsp;другие. Каждый из&nbsp;этих материалов имеет свои уникальные свойства.</p>
                                                <p>Листы из высокопрочной стали поставляется со склада в г.Новосибирск</p>
                                            <?php endif; ?>


                                            <p>
                                                Для заказа позвоните по телефону 
                                                <?php if (count(fw_get_db_settings_option('ul_general_phone_list')) > 0) {
                                                    echo '<a href="tel:+' . preg_replace('/[^0-9]+/', '', fw_get_db_settings_option('ul_general_phone_list')[0]['phone']) . '">';
                                                        echo '<span>' . fw_get_db_settings_option('ul_general_phone_list')[0]['phone'] . '</span>';
                                                    echo '</a>';
                                                } ?>
                                                , напишите нам на почту 
                                                <a href="mailto:met@gkmtk.pro">met@gkmtk.pro</a> 
                                                или оставьте заявку на сайте.
                                            </p>
                                            <p>Группа компаний «МТК» занимается комплексным обеспечением производственных и&nbsp;строительных объектов в&nbsp;России.</p>
                                            <p class="color-text"><strong>Про нас:</strong></p> 
                                            <ul>
                                                <li>Участвуем в&nbsp;торгах в&nbsp;качестве поставщика металлопроката на&nbsp;тендерных площадках: АСТ ГОЗ; Сбербанк-АСТ; Росэлторг; ЭТП Газпромбанк; РТС-тендер; b2b-center; ЭТП ТЭК-Торг и&nbsp;др.</li>
                                                <li>Собственное производство, а&nbsp;также мы&nbsp;сотрудничаем с&nbsp;поставщиками металлопроката: от&nbsp;лидеров отрасли до&nbsp;небольших производств, от&nbsp;крупнейших складских комплексов до&nbsp;региональных металлобаз.</li>
                                                <li>Предоставляем выгодные ценовые условия </li>
                                                <li>Более 2&nbsp;млн номенклатурных позиций. Поэтому мы&nbsp;можем в&nbsp;короткие сроки исполнить заявку любой сложности.</li>
                                                <li>Вся продукция производится в&nbsp;строгом соответствии с&nbsp;отраслевыми стандартами и&nbsp;имеет соответствующие сертификаты качества.</li>
                                                <li>Мы&nbsp;сотрудничаем с&nbsp;надёжными транспортными компаниями. Доставка осуществляется точно в&nbsp;срок и&nbsp;с&nbsp;соблюдением требований к&nbsp;перевозке данного вида груза.</li>
                                            </ul>
                                        </div>
                                    <?php else : ?>
                                        <div class="text">
                                            <?php echo $pageData['selectData']['description']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="buttons">
                                    <button
                                        class="btn-icon"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modalCallback" 
                                        data-modal-title="Оформить быстрый заказ - <?php echo $pageData['selectData']['name']; ?>"
                                        data-modal-form-name="Оформить быстрый заказ - <?php echo $pageData['selectData']['name']; ?>"
                                        data-modal-title="Оформить быстрый заказ" 
                                        data-modal-textarea="message" 
                                        data-modal-textarea-label="Опишите заказ" 
                                        data-modal-ya-goal-name="bystr_zakaz"
                                    >
                                        <span>Быстрый заказ</span>
                                        <i class="icon icon-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    

                        <?php
                            
                            if ($GLOBALS['pageSlug']) {
                                $slug = '`' . preg_replace('/catalog\//', '', trim($GLOBALS['pageSlug'], '/')) . '`';
                                $offset = 0;
                                $limit = 15;

                                // Продукты
                                $data = getCategoryProducts($slug, array(
                                    'offset' => $offset,
                                    'limit' => $limit,
                                ));


                                // Данные фильтра
                                $filterData = getFiltersData($slug);
                            }

                            

                            if ($data != null && $data['status'] == 'success') :


                            echo '<script>'; 
                                // echo "const pageSlug = '" + $GLOBALS['pageSlug'] + "';";
                                echo "const allProducts = {";
                                echo "list: " . json_encode($data['data'], true) . ",";
                                echo " count: " . $data['count'] . ",";
                                echo " totalCount: " . $data['totalCount'] . ",";
                                echo "};";
                                echo "let filterData = [];";
                                if ($filterData != null) {
                                    echo "filterData = " . json_encode($filterData) . ";";
                                }
                            echo '</script>';



                            // Данные для таблицы
                            $maxShow = 10;
                            $rows = $data['data'];
                            $tableHead = array();
                            $tableRow = array();

                            foreach ($rows as $keyRow => $row) {
                                $tableCol = array();

                                if ($keyRow <= $maxShow) :
                                    foreach ($row as $key => $col) {
                                        if ($key != 'id' && $key != 'createdAt' && $key != 'updatedAt') {
                                            if ($col != '') {
                                                array_push($tableCol, array(
                                                    'label' => $key,
                                                    'value' => $col,
                                                ));

                                                if ($keyRow == 0) {
                                                    array_push($tableHead, $key);
                                                }
                                            }
                                        }
                                    }

                                    array_push($tableRow, $tableCol);
                                endif;
                                
                            }
                        ?>

                            <div
                                class="catalog-single-page-products-list is-hidden"
                                id="catalog-products-list"
                                data-page-slug="<?php echo $GLOBALS['pageSlug'] ?>"
                                v-if="productsList !== null"
                            >
                                <div class="section-title">
                                    <h2>Товары <span>{{ totalCount | price }}</span></h2> 
                                    <div class="min-order-text">
                                        <p>МИНИМАЛЬНАЯ СУММА ЗАКАЗА ОТ 25000 ₽</p>
                                    </div>
                                </div>


                                <div class="product-filters">
                                    <div class="list">
                                        <product-filter-item
                                            v-for="(item, key) in filterItems" 
                                            :key="item.name"
                                            :index="item.name"
                                            :item-data="item"
                                            @selected="onFilterItemChange"
                                        ></product-filter-item>
                                    </div>
                                </div>

                                <div
                                    class="products-table-wrap"
                                    :class="{ 'is-loading': isLoading }"
                                >

                                    <div class="table-responsive">
                                        <div class="products-table">
                                            <div class="thead">
                                                <div class="list-item">
                                                    <div
                                                        class="item"
                                                        v-for="(value, key) in tableHead"
                                                        :key="key"
                                                        :class="{ 'long-title' : value.length > 20 }"
                                                    >
                                                        <span>{{ value }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tlist">

                                                <!-- Товар в таблице -->
                                                <product-item
                                                    v-for="(value, key) in tableRow"
                                                    :key="key"
                                                    :data-item="value"
                                                ></product-filter>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <div
                                            class="item"
                                            v-if="tableRow.length > 0"
                                            v-for="(item, key) in tableRow"
                                            :key="key"
                                        >
                                            <button
                                                class="btn-icon btn-price"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalCallback"
                                                data-modal-order="order"
                                                :data-modal-order-data="item[0].value"
                                                :data-modal-title="'Узнать цену - ' + item[0].value"
                                                :data-modal-form-name="'Узнать цену - ' + item[0].value"
                                                data-modal-ya-goal-name="uznat_cenu"
                                            >
                                                <span>Узнать цену</span>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="overlay"></div>
                                </div>

                                <div class="bottom-block">
                                    <div class="pagination">
                                        <button
                                            class="item prev" 
                                            @click="prevPage()"
                                            v-if="currentPage > 1"
                                        ></button>
                                        <button 
                                            v-for="page in paginationRange" 
                                            :key="page.val"
                                            class="item"
                                            :class="{ active: currentPage === page.val, dots: page.class === 'dots' }"
                                            @click="goToPage(page.val)"
                                        >
                                            {{ page.val }}  
                                        </li>
                                        <button 
                                            class="item next" 
                                            @click="nextPage()"
                                            v-if="currentPage < Math.ceil(totalCount / limit)"
                                        ></button>
                                    </div>
                                    <div class="text">
                                        <p>Показано {{ (offset + 1) }}–{{ paginationShowPage }} из {{ totalCount }} товаров.</p>
                                    </div>
                                </div>
                            </div>



                            <!-- Template - product-filters -->
                            <script type="text/x-template" id="product-filter-item-template">
                                <div class="item">
                                    <div
                                        class="multiselect-wrap"
                                        :class="{ 'is-filled' : isFilled}"
                                    >
                                        <multiselect
                                            v-model="selected"
                                            :options="itemData.list"
                                            :searchable="false"
                                            placeholder=""
                                            :multiple="false"
                                            :taggable="false"
                                            :close-on-select="true"
                                            :show-labels="false"
                                            @select="selectedFilterTag"
                                            @remove="removeFilterTag"
                                        ></multiselect>
                                        <label>{{ itemData.name }}</label>
                                    </div>
                                </div>
                            </script>  


                            <!-- Template - product-item -->
                            <script type="text/x-template" id="product-item-template">
                                <div class="product-item item">
                                    <div
                                        v-if="dataItem.length > 0"
                                        v-for="(item, key) in dataItem"
                                        :key="key"
                                    >
                                        <p>{{ item.label }}</p> 
                                        <p v-if="item.value !== ''">{{ item.value }}</p>
                                        <p v-else>---</p> 
                                    </div>
                                    <div class="buttons">
                                        <button
                                            class="btn-icon btn-price"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalCallback"
                                            data-modal-order="order"
                                            :data-modal-order-data="dataItem[0].value"
                                            :data-modal-title="'Узнать цену - ' + dataItem[0].value"
                                            :data-modal-form-name="'Узнать цену - ' + dataItem[0].value"
                                            data-modal-ya-goal-name="uznat_cenu"
                                        >
                                            <span>Узнать цену</span>
                                            <i class="icon icon-arrow-right"></i>
                                        </button>
                                        
                                    </div>
                                </div>
                            </script>
                        <?php endif; ?>




                        <section class="callback wow fadeIn" data-wow-delay=".3s">
                            <div class="row">
                                <div class="col-12">
                                    <div class="callback-form-wrap">
                                        <form class="common-form" data-toggle="validator" role="form" data-focus="false" novalidate="true">
                                            <!-- <div class="form-left lazy" data-bg="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/single-home-callback-bg.png"> -->
                                            <div class="form-left">
                                                <h3>Оставьте заявку на&nbsp;расчёт актуальной<br> стоимости материалов</h3>
                                                <div class="form-group-set">
                                                    <div class="btn-icon white">
                                                        <div class="form-group">
                                                            <label>Введите ваше имя</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Имя">
                                                        </div>
                                                        <i class="icon icon-user"></i>
                                                    </div>
                                                    <div class="btn-icon white">
                                                        <div class="form-group">
                                                            <label>Ваш номер телефона</label>
                                                            <input type="text" class="form-control" name="phone" placeholder="+ 7(" required>
                                                        </div>
                                                        <i class="icon icon-phone"></i>
                                                    </div>
                                                    <div class="btn-icon white">
                                                        <div class="form-group">
                                                            <label>Ваша почта</label>
                                                            <input type="text" class="form-control" name="email" placeholder="">
                                                        </div>
                                                        <i class="icon icon-email"></i>
                                                    </div>
                                                </div>
                                                <div class="privacy">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="privacy" checked="">
                                                        <i></i>
                                                    </label>
                                                    <p>Нажимая на кнопку, я соглашаюсь с <a href="<?php echo home_url('/privacy') ?>" target="_blank">условиями обработки персональных данных</a></p>
                                                </div>
                                            </div>
                                            <div class="form-submit">
                                                <button class="btn btn-primary submit">
                                                    <span>Оставить заявку</span>
                                                </button>
                                            </div>

                                            <input type="hidden" name="form_name" value="Заказ товара - <?php echo $pageData['selectData']['name']; ?>">
                                            <input type="hidden" name="modal_success" value="modalSuccess">
                                            <input type="hidden" name="ya_metrica_goal_name" value="zakaz">
                                            <input type="hidden" name="action" value="send_message">
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </section>




                    </div>
                </div>
            </div>


            <div class="partners-callback">
                <a href="<?php echo home_url( '/special' ); ?>" class="inner">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-2">
                                <div class="section-number white-section-number wow fadeIn" data-wow-delay=".2s">
                                    <p>02</p>
                                    <p>Связь<br>с нами</p>
                                </div>
                            </div>
                            <div class="col-10">
                                <p class="partners-callback-header wow fadeInUp" data-wow-delay=".2s">
                                    Наши спецпредложения
                                </p>
                                <p class="partners-callback-body wow fadeIn" data-wow-delay=".3s">
                                    Ознакомьтесь с&nbsp;нашими скидками<br> и&nbsp;специльными предложениями
                                </p>
                                <button
                                    class="btn-icon wow fadeIn" 
                                    data-wow-delay=".4s" 
                                >
                                    <span>Посмотреть все</span>
                                    <i class="icon-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>




            <?php
                $queryHomes = new WP_Query(
                    array(
                        'post_type' => 'special',
                        'posts_per_page' => 6,
                        'order' => 'ASC',
                        // 'orderby' => 'title',
                        // 'post__not_in' => $exludePostIdArr,
                    )
                );
                if ($queryHomes->posts) :
            ?>
                <section class="section-house-projects"> 
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-2">
                                <div class="section-number wow fadeIn" data-wow-delay=".2s">
                                    <p>03</p>
                                    <p>Наши<br>Акции</p>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="top-block">
                                    <div class="section-title">
                                        <h2>
                                            <span class="wow fadeInUp" data-wow-delay=".2s">Специальные предложения</span>
                                        </h2>
                                    </div>
                                    <div class="buttons">
                                        <div class="btn-wrap wow fadeIn" data-wow-delay=".3s">
                                            <a class="btn-icon" href="<?php echo home_url( '/special' ); ?>">
                                                <span>Смотреть все</span>
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                
                                    <div class="special-list">
                                        <div class="list">
                                            <?php
                                            foreach ($queryHomes->posts as $key => $post) : setup_postdata($post);
                                                // Project list item
                                                $isHidden = ($key > 5) ? true : false;
                                                get_template_part('template-parts/catalog-card', null, array('id' => $post->ID, 'hidden' => $isHidden));
                                            endforeach;
                                            ?>
                                        </div>


                                        <?php if (count($queryHomes->posts) > 6) : ?>
                                            <script>
                                                var homes_true_posts = '<?php echo serialize($queryHomes->query_vars); ?>';
                                                var homes_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                                var homes_max_pages = '<?php echo $queryHomes->max_num_pages; ?>';
                                            </script>
                                            <div class="show-more wow fadeIn" data-wow-delay=".2s">
                                                <div class="link">
                                                    <span>Показать ещё</span>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                <?php
                                wp_reset_query();
                                remove_filter('posts_orderby', 'orderby_post_title_int');
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

        </section>
        
    <?php endif; ?>

	
</section>



<?php
    // Section - Contacts
    get_template_part('template-parts/section-contacts', null, array(
        'section-number' => '08',
        'section-title' => 'Познакомимся<br> вживую?',
        'section-subtitle' => 'Запишитесь на бесплатную консультацию, проведем экскурсию на наши строящиеся объекты. Вы своими глазами оцените наш подход — сделать выбор станет легче и увереннее!',
    ));
?>

<?php
    // Section - Map
    get_template_part('template-parts/section-map');
?>

<?php get_footer(); ?>


<?php else : ?>

    <section class="l-page page-404">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-content">
                        <h1>Страница не найдена</h1>
                        <p>Попробуйте вернуться на <a href="<?php echo home_url('/') ?>">главную страницу</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>