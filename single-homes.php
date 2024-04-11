<?php
    get_header();

    $itemFwOptionsHomes = fw_extract_only_options(fw()->theme->get_post_options('homes'));
    $pageSlug = $post->post_name;


    if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_group_items_status') == 'on') : 

    $exludePostIdArr = array();

    if (count($GLOBALS['exludeHomesPostSlugArr']) > 0) {
        foreach ($GLOBALS['exludeHomesPostSlugArr'] as $key => $item) {
            $exludePost = get_page_by_path($item, OBJECT, 'homes');

            array_push($exludePostIdArr, $exludePost->ID);
        }
    }



    $queryHomes = new WP_Query( 
        array(
            'post_type' => 'homes',
            'posts_per_page' => 9,
            'order' => 'ASC',
            'orderby' => 'title',
            'post__not_in' => $exludePostIdArr,
        )
    );
    if ($queryHomes->posts) :
?>
    <!-- Шаблон группы проектов домов -->

    <section class="l-page page-archive-homes">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-block">
                        <div class="section-title">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s">
                                <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_group_items_title') != '') {
                                    echo fw_get_db_post_option($post->ID, 'plotnikoff_homes_group_items_title');
                                } else {
                                    the_title();
                                } ?>
                            </h1>
                        </div>

                        <?php if (function_exists('bcn_display')) { 
                            echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".4s">';
                                echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
                            echo '</div>';
                        } ?>
                    </div>
                    
                    <section class="section-house-projects pt-30 wow fadeIn" data-wow-delay=".2s">
                        <div class="content">
                            <div class="project-list">
                                <div class="list">
                                    <?php 
                                        $techSlug = '';

                                        
                                        if ($pageSlug == 'karkasnye-doma') {
                                            $techSlug = 'karkasnye-doma';
                                        } else if ($pageSlug == 'doma-iz-profilirovannogo-brusa') {
                                            $techSlug = 'doma-iz-profilirovannogo-brusa';
                                        } else if ($pageSlug == 'doma-iz-brusa') {
                                            $techSlug = 'doma-iz-brusa';
                                        } else if ($pageSlug == 'doma-iz-kleenogo-brusa') {
                                            $techSlug = 'dom-iz-kleenogo-brusa';
                                        } else if ($pageSlug == 'doma-iz-gazobetona') {
                                            $techSlug = 'doma-iz-gazobetona';
                                        } else if ($pageSlug == 'monolit') {
                                            $techSlug = 'monolit';
                                        } else if ($pageSlug == 'doma-iz-kirpicha') {
                                            $techSlug = 'dom-iz-kirpicha';
                                        }

                                        foreach ($queryHomes->posts as $post) : setup_postdata($post);
                                            // Project list item
                                            get_template_part('template-parts/project-list-item', null, array(
                                                'id' => $post->ID,
                                                'link_tech' => $techSlug
                                            ));
                                        endforeach;
                                    ?>
                                </div>

                                <?php if ($queryHomes->max_num_pages > 1) : ?>
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
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </section>

    <?php endif; wp_reset_postdata(); ?>

<?php else : ?>
    <!-- Стандартный шаблон одного проекта дома -->
    <section class="l-page page-single-home">

        <section class="page-single-home-intro">
            <div class="wrapper">
                <div class="row"> 
                    <div class="col-12">
                        <div class="page-title-block">
                            <div class="section-title">
                                <div class="back wow fadeIn" data-wow-delay=".2s">
                                    <a class="link" href="<?php echo home_url('/proekty'); ?>"></a>
                                </div>
                                <h1 class="wow fadeInUp" data-wow-delay=".2s"><?php the_title(); ?></h1>
                            </div>

                            <?php if (function_exists('bcn_display')) {
                                echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".3s">';
                                echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>';
                                echo '</div>';
                            } ?>
                        </div>
                        <div class="content">
                            <div class="content-images wow fadeIn" data-wow-delay=".3s">
                                <div class="content-images-slider">
                                    <?php
                                    if (count(fw_get_db_post_option($post->ID, 'plotnikoff_homes_images')) > 0) {
                                        foreach (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images') as $key => $image) {
                                            echo '<div class="item"><img data-lazy="' . $image['image']['url']  . '"></div>';
                                        }
                                    } else {
                                        if (has_post_thumbnail()) {
                                            echo '<div class="item">' . grt_the_post_thumbnail('full') . '</div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="numbers">
                                    <span class="current">1</span>
                                    <span class="sep">/</span>
                                    <span class="max">1</span>
                                </div>
                                <div class="custom-slick-arrows white"></div>
                                <!-- <a class="tour-3d" href="#">
                                    <i></i>
                                    <span>3D тур</span>
                                </a> -->
                            </div>
                            <div class="content-info wow fadeIn" data-wow-delay=".5s">
                                <div class="props">

                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_brus') != '') : ?>
                                        <div class="item">
                                            <div class="text">
                                                <h4 class="tech-list">
                                                    <?php
                                                        $text = ''; 
                                                        $link = home_url( '/technologies/' );
                                                        $key = fw_get_db_post_option($post->ID, 'plotnikoff_homes_brus');

                                                        if ($key == 'carkas') { 
                                                            $link .= 'karkasnye-doma';
                                                        } else if ($key == 'profbrus') {
                                                            $link .= 'doma-iz-profilirovannogo-brusa';
                                                        } else if ($key == 'glue_brus') {
                                                            $link .= 'dom-iz-kleenogo-brusa';
                                                        } else if ($key == 'brick') {
                                                            $link .= 'doma-iz-kirpicha';
                                                        } else if ($key == 'gasbeton') {
                                                            $link .= 'doma-iz-gazobetona';
                                                        } else if ($key == 'brus') {
                                                            $link .= 'doma-iz-brusa';
                                                        } else if ($key == 'monolit') {
                                                            $link .= 'monolit';
                                                        }

                                                        $text .= '<a href="' . $link . '">';
                                                        $text .= $itemFwOptionsHomes['plotnikoff_homes_brus']['choices'][$key];
                                                        $text .= '</a>';
                                                        
                                                        echo $text;
                                                    ?>
                                                </h4>
                                                <p>Материал стен по типовому проекту</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_area_glob') != '') : ?>
                                        <div class="item">
                                            <div class="text">
                                                <h4><?php echo fw_get_db_post_option($post->ID, 'plotnikoff_homes_area_glob') . ' м²'; ?></h4>
                                                <p>Общая площадь</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_area_glob') != '') : ?>
                                        <div class="item">
                                            <div class="text">
                                                <h4><?php echo fw_get_db_post_option($post->ID, 'plotnikoff_homes_area_glob') . ' м²'; ?></h4>
                                                <p>Площадь теплого контура</p>
                                            </div>
                                        </div>
                                    <?php endif; ?> -->
                                    <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_floor') != '') : ?>
                                        <div class="item">
                                            <div class="text">
                                                <h4><?php echo $itemFwOptionsHomes['plotnikoff_homes_floor']['choices'][fw_get_db_post_option($post->ID, 'plotnikoff_homes_floor')]; ?></h4>
                                                <p>Этажность</p>
                                            </div>
                                        </div>
                                    <?php endif; ?> -->

                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_rooms') != '') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-rooms"></div>
                                            <div class="text">
                                                <?php 
                                                    $val = (int)fw_get_db_post_option($post->ID, 'plotnikoff_homes_rooms'); 

                                                    echo '<h4>' . $val . '</h4>';
                                                    echo '<p>';
                                                        if ($val == 1) {
                                                            echo 'Комната';
                                                        } else if ($val > 1 && $val <= 4) {
                                                            echo 'Комнаты';
                                                        } else {
                                                            echo 'Комнат';
                                                        }
                                                    echo '</p>';
                                                ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_bathroom') != '') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-bathroom-cabinet"></div>
                                            <div class="text">
                                                <?php 
                                                    $val = (int)fw_get_db_post_option($post->ID, 'plotnikoff_homes_bathroom'); 

                                                    echo '<h4>' . $val . '</h4>';
                                                    echo '<p>';
                                                        if ($val == 1) {
                                                            echo 'Санузел';
                                                        } else if ($val > 1 && $val <= 4) {
                                                            echo 'Санузла';
                                                        } else {
                                                            echo 'Санузов';
                                                        }
                                                    echo '</p>';
                                                ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_bedroom') != '') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-bed"></div>
                                            <div class="text">
                                                <h4><?php echo fw_get_db_post_option($post->ID, 'plotnikoff_homes_bedroom'); ?></h4>
                                                <p>Спальни</p>
                                            </div>
                                        </div>
                                    <?php endif; ?> -->
                                    <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_hall') != '') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-bed"></div>
                                            <div class="text">
                                                <h4><?php echo fw_get_db_post_option($post->ID, 'plotnikoff_homes_hall'); ?></h4>
                                                <?php
                                                if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_hall') > 1) {
                                                    $text = 'Холла';
                                                } else {
                                                    $text = 'Холл';
                                                }
                                                echo '<p>' . $text . '</p>';
                                                ?>
                                            </div>
                                        </div>
                                    <?php endif; ?> -->
                                </div>

                                <div class="buttons download-catalog">
                                    <?php 
                                        $presentationLink = esc_url(get_template_directory_uri()) . '/assets/docs/homes-catalog-plotnikof-2023.pdf';
                                        if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_presentation_file') != '') {
                                            $presentationLink = fw_get_db_post_option($post->ID, 'plotnikoff_homes_presentation_file')['url'];
                                        } 
                                    ?>
                                    <a class="btn-icon" href="<?php echo $presentationLink; ?>" target="_blank">
                                        <span>Скачать презентацию проекта</span>
                                        <i class="icon icon-pdf"></i>
                                    </a>
                                </div>

                                <div class="props additional">
                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_terassa') == 'on') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-terassa"></div>
                                            <div class="text">
                                                <p>Терраса</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_tech') == 'on') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-tech"></div>
                                            <div class="text">
                                                <p>Мастерская</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_wardrobe') == 'on') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-wardrobe"></div>
                                            <div class="text">
                                                <p>Гардеробная</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_crawlspace') == 'on') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-anresol"></div>
                                            <div class="text">
                                                <p>Антресоль</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_garage') == 'on') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-private-garage"></div>
                                            <div class="text">
                                                <p>Гараж</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_swimming') == 'on') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-swimming"></div>
                                            <div class="text">
                                                <p>Бассейн</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_sauna') == 'on') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-sauna"></div>
                                            <div class="text">
                                                <p>Сауна</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="callback wow fadeIn" data-wow-delay=".3s">
            <div class="wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="callback-form-wrap">
                            <form class="common-form" data-toggle="validator" role="form" data-focus="false" novalidate="true">
                                <div class="form-left lazy" data-bg="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/single-home-callback-bg.png">
                                    <h3>Узнать актуальную стоимость дома<br> по&nbsp;этому проекту или построить<br> по&nbsp;индивидуальному</h3>
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

                                <input type="hidden" name="form_name" value="Форма на странице проекта - <?php the_title(); ?>">
                                <input type="hidden" name="modal_success" value="modalSuccess">
                                <input type="hidden" name="ya_metrica_goal_name" value="goal1">
                                <input type="hidden" name="action" value="send_message">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_layouts') != '' && count(fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_layouts')) > 0) : ?>
            <section class="layouts">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-2 wow fadeIn" data-wow-delay=".2s">
                            <div class="section-number">
                                <p>01</p>
                                <p>Планировки</p>
                            </div>
                            <!-- <ul class="nav nav-tabs">
                                <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_layouts') != '' && count(fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_layouts')) > 0) : ?>
                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-layouts">Планиров&shy;ка</button>
                                    </li>
                                <?php endif; ?>

                                <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_fasad') != '' && count(fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_fasad')) > 0) : ?>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-fasad">Фаса&shy;ды</button>
                                    </li>
                                <?php endif; ?>

                                <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_razrez') != '' && count(fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_razrez')) > 0) : ?>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-razrez">В разре&shy;зе</button>
                                    </li>
                                <?php endif; ?>
                            </ul> -->
                        </div>
                        <div class="col-10 wow fadeIn" data-wow-delay=".4s">
                            <div class="tab-content">

                                <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_layouts') != '' && count(fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_layouts')) > 0) : ?>
                                    <div class="tab-pane fade show active" id="tab-layouts">
                                        <div class="tab-layouts-content">
                                            <div class="list">
                                                <?php
                                                    foreach (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_layouts') as $key => $item) : 

                                                    $layoutsCount = count(fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_layouts'));
                                                ?>
                                                    <div class="item <?php echo ($layoutsCount == 1) ? 'is-single' : ''; ?>">
                                                        <?php if ($item['image']['url']) : ?>
                                                            <a data-fslightbox="img-layouts" href="<?php echo $item['image']['url']; ?>">
                                                                <?php
                                                                    // if ($item['floor'] != '' && $item['floor'] != 'none') {
                                                                    //     echo '<div class="title">';
                                                                    //     if ($item['floor'] == 'floor_1') {
                                                                    //         echo '<i>I</i>';
                                                                    //         echo '<p>Этаж</p>';
                                                                    //     } else if ($item['floor'] == 'floor_2') {
                                                                    //         echo '<i>II</i>';
                                                                    //         echo '<p>Этаж</p>';
                                                                    //     } else if ($item['floor'] == 'floor_3') {
                                                                    //         echo '<i>III</i>';
                                                                    //         echo '<p>Этаж</p>';
                                                                    //     } else if ($item['floor'] == 'floor_mansard') {
                                                                    //         echo '<i class="mansarda"></i>';
                                                                    //         echo '<p>Мансарда</p>';
                                                                    //     }
                                                                    //     echo '</div>';
                                                                    // } 
                                                                ?>

                                                                <div class="image">
                                                                    <img src="<?php echo esc_url($item['image']['url']); ?>">
                                                                </div>

                                                                <?php if ($item['area'] != '' && $item['area'] != 'none') {
                                                                    echo '<div class="bottom">';
                                                                    echo '<h4>' . $item['area'] . ' м²</h4>';

                                                                    if ($layoutsCount > 1) {
                                                                        if ($item['floor'] == 'floor_1') {
                                                                            echo '<p>Площадь I этажа</p>';
                                                                        } else if ($item['floor'] == 'floor_2') {
                                                                            echo '<p>Площадь II этажа</p>';
                                                                        } else if ($item['floor'] == 'floor_3') {
                                                                            echo '<p>Площадь III этажа</p>';
                                                                        } else if ($item['floor'] == 'floor_mansard') {
                                                                            echo '<p>Площадь мансарда</p>';
                                                                        }
                                                                    }
                                                                    echo '</div>';
                                                                } ?>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_fasad') != '' && count(fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_fasad')) > 0) : ?>
                                    <div class="tab-pane fade" id="tab-fasad">
                                        <div class="tab-images-content">
                                            <div class="list">
                                                <?php foreach (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_fasad') as $key => $item) : ?>
                                                    <div class="item">
                                                        <a data-fslightbox="img-fasad" href="<?php echo $item['image']['url']; ?>">
                                                            <div class="image">
                                                                <img src="<?php echo $item['image']['url']; ?>">
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?> -->

                                <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_razrez') != '' && count(fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_razrez')) > 0) : ?>
                                    <div class="tab-pane fade" id="tab-razrez">
                                        <div class="tab-images-content">
                                            <div class="list">
                                                <?php foreach (fw_get_db_post_option($post->ID, 'plotnikoff_homes_images_razrez') as $key => $item) : ?>
                                                    <div class="item">
                                                        <a data-fslightbox="img-razrez" href="<?php echo $item['image']['url']; ?>">
                                                            <div class="image">
                                                                <img src="<?php echo $item['image']['url']; ?>">
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <section class="what-include wow fadeIn" data-wow-delay=".2s">
            <div class="wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="section-number">
                            <p>02</p>
                            <p>Что включено</p>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h2>Комплектации</h2>
                                        </th>
                                        <th>Тепловой<br> контур</th>
                                        <th>Предчистовая<br> отделка</th>
                                        <th>Под ключ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>Организация строительной площадки</p>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Подвод сетей (Вода, газ, электричество, канализация), септик из&nbsp;бетонных колец</p>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Монолитная ж/б плита, закладные под коммуникации (вода, канализация по&nbsp;точкам)</p>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Наружные и внутренние стены, межэтажное перекрытие, стропильная система</p>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Утепление стен минеральной теплоизоляцией с&nbsp;устройством ветрозащиты и&nbsp;пароизоляции (для каркасных домов)</p>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Утепление кровли минеральной теплоизоляцией с&nbsp;устройством ветрозащиты и&nbsp;пароизоляции</p>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Кровельное покрытие, водосточная система кровли</p>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Окна и&nbsp;балконные двери пластиковые двухкамерный стеклопакет, входные утепленные двери с&nbsp;терморазрывом</p>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Отделка фасада, наличники окон и&nbsp;дверей, настил террас и&nbsp;балконов, подшивка карнизных свесов</p>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Утепление фундаментной плиты, устройство полусухой стяжки первого этажа</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Отопление: Установка котла отопления, разводка котельной, устройство водяного теплого пола, разводка труб отопления, монтаж радиаторов, конвекторов</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Водоснабжение: разводка труб водоснабжения, монтаж коллекторов, установка водорозеток и&nbsp;бойлера косвенного нагрева</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Электроснабжение: прокладка кабелей по&nbsp;точкам потребления; монтаж распределительных коробок, установка электрического щита, устройство заземления</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Вентиляция: прокладка вент. Каналов из&nbsp;влажных помещений, монтаж кровельных вентвыходов</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Разводка труб канализации в&nbsp;санузлах, монтаж канализационного стояка</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Черновая отделка:<br> &mdash;&nbsp;отделка стен гипсокартоном (для каркасных домов)<br> &mdash;&nbsp;гипсовая штукатурка стен (для каменных домов)</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                        <td>
                                            <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                    <tr class="is-hide-line">
                                        <td>
                                            <p>Чистовая отделка:<br>
                                            &mdash;&nbsp;напольное покрытие<br>
                                            &mdash;&nbsp;натяжные потолки<br>
                                            &mdash;&nbsp;окраска стен по&nbsp;подготовленному основанию (шлифовка<br>
                                            и&nbsp;покраска для деревянных домов)<br>
                                            &mdash;&nbsp;межкомнатные двери<br>
                                            &mdash;&nbsp;отделка санузла плиткой<br>
                                            &mdash;&nbsp;сантехника (унитаз, раковина, душевая)<br>
                                            &mdash;&nbsp;светильники и&nbsp;люстры, розетки и&nbsp;выключатели<br>
                                            &mdash;&nbsp;отделка оконных откосов, монтаж подоконников<br>
                                            &mdash;&nbsp;временная лестница</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        <div class="circle-check"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="show-more">
                            <div class="link">
                                <span>Показать все</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <?php if (get_the_content() != '') : ?>
            <section class="description wow fadeIn" data-wow-delay=".2s">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-2">
                            <div class="section-number">
                                <p>03</p>
                                <p>О проекте <?php the_title(); ?></p>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="section-title">
                                <h2>Описание проекта</h2>
                            </div>
                            <div class="text">
                                <?php the_content(); ?>
                            </div>

                            <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_homes_description_video_link') != '' && fw_get_db_post_option($post->ID, 'plotnikoff_homes_description_video_preview') != '') {
                                echo '<a class="video" data-lity href="' . fw_get_db_post_option($post->ID, 'plotnikoff_homes_description_video_link') . '">';
                                echo '<img class="lazy" data-src="' . fw_get_db_post_option($post->ID, 'plotnikoff_homes_description_video_preview')['url'] . '">';
                                echo '<div class="btn-play white"><i></i></div>';
                                echo '</a>';
                            } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php
        // Section - Technologies
        get_template_part('template-parts/section-technologies-construction', null, array(
            'section-number' => '04',
            'section-number-text' => 'Технологии<br> строительства',
            'section-top-button' => '<button class="btn-icon" data-bs-toggle="modal" data-bs-target="#modalCallback"><span>Запишитесь на консультацию</span><i class="icon icon-support"></i></button>',
            'section-title' => 'Хотите построить дом<br> из другого материала?',
            'section-open-item-modal' => true,
        ));
        ?>

        <section class="section-steps-list">
            <div class="wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="section-number wow fadeIn" data-wow-delay=".2s">
                            <p>05</p>
                            <p>Процесс<br> строительства<br> дома</p>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Этапы строительства</h2>
                        </div>
                        <div class="steps-list">
                            <div class="item wow fadeIn" data-wow-delay=".3s">
                                <div class="icon">I</div>
                                <div class="text">
                                    <h4>Подготовительные работы</h4>
                                    <p>Разработка проектной документации с&nbsp;учетом особенностей участка и&nbsp;пожеланий заказчика. Можно адаптировать типовой проект или создать индивидуальный. На&nbsp;этапе проводится геодезическое исследование, выбирают материалы, технологию строительства, планировку и&nbsp;др.</p>
                                </div>
                            </div>
                            <div class="item wow fadeIn" data-wow-delay=".4s">
                                <div class="icon">II</div>
                                <div class="text">
                                    <h4>Строительство фундамента</h4>
                                    <p>Выбор типа фундамента зависит от&nbsp;типа почвы и&nbsp;грунтовых вод на&nbsp;участке. Может быть ленточным, свайным, монолитным или блочным.</p>
                                </div>
                            </div>
                            <div class="item  wow fadeIn" data-wow-delay=".5s">
                                <div class="icon">III</div>
                                <div class="text">
                                    <h4>Строительные и монтажные работы</h4>
                                    <p>Возведение стен из&nbsp;подобранных материалов. Установка крыши, выбор типа которой зависит от&nbsp;климатических условий и&nbsp;архитектурного стиля дома, может быть плоской, скатной, шатровой, мансардной и&nbsp;др. Установка дверей и&nbsp;окон.</p>
                                </div>
                            </div>
                            <div class="item is-hidden">
                                <div class="icon">IV</div>
                                <div class="text">
                                    <h4>Прокладка коммуникаций</h4>
                                    <p>Включает в&nbsp;себя установку всех необходимых коммуникакий, это может быть: системы отопления, водоснабжения, канализации, электроснабжения, вентиляции и&nbsp;др.</p>
                                </div>
                            </div>
                        </div>
                        <div class="show-more">
                            <div class="link">
                                <span>Показать все</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section-info-block-black lazy" data-bg="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/info-block-black-1-bg.png">
            <div class="wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="section-number wow fadeIn" data-wow-delay=".2s">
                            <p>06</p>
                            <p>Экскурсия</p>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="content">
                            <div class="section-title  wow fadeIn" data-wow-delay=".4s">
                                <h2>Сделать выбор проще,<br> если увидеть всё своими глазами</h2>
                                <p>Мы приглашаем вас на экскурсию по построенным объектам, чтобы оценить преимущества, почувствовать атмосферу и выбрать свой идеальный дом </p>
                            </div> 
                            <button
                                class="btn-icon wow fadeIn" 
                                data-wow-delay=".5s"
                                data-bs-toggle="modal" 
                                data-bs-target="#modalCallback"
                                data-modal-title="Записаться на экскурсию"
                            >
                                <span>Записаться на экскурсию</span>
                                <i class="icon icon-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="similar-projects">
            <div class="wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="section-number wow fadeIn" data-wow-delay=".2s">
                            <p>07</p>
                            <p>Смотрите также</p>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Похожие проекты</h2>
                            <div class="custom-slick-arrows wow fadeIn" data-wow-delay=".4s">
                            </div>
                        </div>

                        <section class="section-house-projects wow fadeIn" data-wow-delay=".5s">
                            <?php
                                $exludePostIdArr = array();

                                array_push($exludePostIdArr, $post->ID);

                                if (count($GLOBALS['exludeHomesPostSlugArr']) > 0) {
                                    foreach ($GLOBALS['exludeHomesPostSlugArr'] as $key => $item) {
                                        $exludePost = get_page_by_path($item, OBJECT, 'homes');

                                        array_push($exludePostIdArr, $exludePost->ID);
                                    }
                                }

                                $queryHomes = new WP_Query(
                                    array(
                                        'post_type' => 'homes',
                                        'posts_per_page' => 6,
                                        'order' => 'ASC',
                                        'orderby' => 'rand',
                                        'post__not_in' => $exludePostIdArr,
                                    )
                                );
                                if ($queryHomes->posts) :
                            ?>
                                <div class="project-list">
                                    <div class="list">
                                        <?php
                                        foreach ($queryHomes->posts as $post) : setup_postdata($post);
                                            // Project list item
                                            get_template_part('template-parts/project-list-item', null, array(
                                                'id' => $post->ID,
                                                'price-position' => 'top',
                                                'image-load-type' => 'data-lazy',
                                            ));
                                        endforeach;
                                        ?>
                                    </div>
                                </div>
                            <?php
                            endif;
                            wp_reset_query();
                            remove_filter('posts_orderby', 'orderby_post_title_int');
                            ?>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </section>

<?php endif; ?>

<?php
    // Section - Contacts
    get_template_part('template-parts/section-contacts', null, array(
        'section-number' => '08',
        'section-title' => 'Понравился<br> проект?',
    ));
?>

<?php
    // Section - Map
    get_template_part('template-parts/section-map');
?>

<?php get_footer(); ?>