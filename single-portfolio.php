<?php
get_header();

$itemFwOptionsPortfolio = fw_extract_only_options(fw()->theme->get_post_options('portfolio'));
?>

<section class="l-page page-single-portfolio">

    <section class="page-single-home-intro">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-block">
                        <div class="section-title">
                            <div class="back wow fadeIn" data-wow-delay=".2s">
                                <a class="link" href="<?php echo home_url('/portfolio'); ?>"></a>
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
                                if (count(fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_images')) > 0) {
                                    foreach (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_images') as $key => $image) {
                                        echo '<div class="item"><img data-lazy="' . $image['url']  . '"></div>';
                                    }
                                } else {
                                    if (has_post_thumbnail()) {
                                        echo '<div class="item">' . gеt_the_post_thumbnail($post->ID, 'full') . '</div>';
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
                        </div>
                        <div class="content-info wow fadeIn" data-wow-delay=".5s">
                            <div class="block-top">
                                <div class="props props-1">
                                    <?php if (count(fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_tech')) > 0) : ?>
                                        <div class="item">
                                            <div class="text">  
                                                <h4 class="tech-list">
                                                    <?php
                                                        $text = '';
                                                        $keyNumber = 0;
                                                        
                                                        foreach (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_tech') as $key => $item) {
                                                            $link = home_url( '/technologies/' );

                                                            if ($keyNumber > 0) $text .= ', ';

                                                            $keyNumber += 1;  

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
                                                            $text .= $itemFwOptionsPortfolio['plotnikoff_portfolio_tech']['choices'][$key];
                                                            $text .= '</a>';
                                                        }
                                                        echo $text;
                                                    ?>
                                                </h4>
                                                <p>Материал стен по типовому проекту</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_area') != '') : ?>
                                        <div class="item">
                                            <div class="text">
                                                <h4><?php echo fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_area') . ' м²'; ?></h4>
                                                <p>Общая площадь</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_area_heat') != '') : ?>
                                        <div class="item">
                                            <div class="text">
                                                <h4><?php echo fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_area_heat') . ' м²'; ?></h4>
                                                <p>Площадь теплого контура</p>
                                            </div>
                                        </div>
                                    <?php endif; ?> -->

                                    <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_floor') != '') : ?>
                                        <div class="item">
                                            <div class="text">
                                                <h4><?php echo $itemFwOptionsPortfolio['plotnikoff_portfolio_floor']['choices'][fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_floor')]; ?></h4>
                                                <p>Этажность</p>
                                            </div>
                                        </div>
                                    <?php endif; ?> -->
                                </div>

                                <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_kp_title') != '' && fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_kp_location') != '') : ?>
                                    <div class="location">
                                        <a href="#location" class="scroll-to">
                                            <i></i>
                                            <div>
                                                <p><?php echo fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_kp_title'); ?></p>
                                                <p>Расположение</p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="props props-2">
                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_livingroom') != '') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-rooms"></div>
                                            <div class="text">
                                                <?php 
                                                    $val = (int)fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_livingroom'); 

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

                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_bathroom') != '') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-bathroom-cabinet"></div>
                                            <div class="text">
                                                <?php 
                                                    $val = (int)fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_bathroom'); 

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

                                    <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_bedroom') != '') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-bed"></div>
                                            <div class="text">
                                                <h4><?php echo fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_bedroom'); ?></h4>
                                                <p>Спальни</p>
                                            </div>
                                        </div>
                                    <?php endif; ?> -->

                                    <!-- <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_halls') != '') : ?>
                                        <div class="item is-icon">
                                            <div class="icon icon-bed"></div>
                                            <div class="text">
                                                <h4><?php echo fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_halls'); ?></h4>
                                                <?php
                                                if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_halls') > 1) {
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
                            </div>


                            <?php 
                                $typeTitle = 'дома';
                                preg_match_all('/индивидуа/', get_the_title(), $matchIndividual);
                                if (count($matchIndividual[0]) > 0) :
                                
                                preg_match_all('/Баня/i', get_the_title(), $matchTypeTitle1);
                                preg_match_all('/Гараж/i', get_the_title(), $matchTypeTitle2);

                                if (count($matchTypeTitle1[0]) > 0) $typeTitle = 'бани';
                                if (count($matchTypeTitle2[0]) > 0) $typeTitle = 'гаража';
                            ?>
                                <div class="buttons"> 
                                    <button
                                        class="btn-icon project-link" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modalCallback"
                                        data-modal-title="Заказать индивидуальный проект <?php echo $typeTitle; ?>"
                                        data-modal-form-name="Заказать индивидуальный проект <?php echo $typeTitle; ?>"
                                    >
                                        <span>Заказать индивидуальный проект <?php echo $typeTitle; ?></span>
                                        <i class="icon icon-arrow-right"></i>
                                    </button>
                                </div>
                            <?php else : ?>
                                <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_house_project') != '' && count(fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_house_project')) > 0) : ?>
                                    <div class="buttons">
                                        <a class="btn-icon project-link" href="<?php echo get_the_permalink(preg_replace('/projects_/', '', fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_house_project')[0])); ?>">
                                            <span>Перейти к проекту дома</span>
                                            <i class="icon icon-arrow-right"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (get_the_content() != '') : ?>
        <section class="description">
            <div class="wrapper">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Описание</h2>
                        <div class="text wow fadeIn" data-wow-delay=".4s">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_house_project')[0] != 'none' && fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_house_project') != '' && count(fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_house_project')) > 0) : ?>
        <section class="house-project">
            <div class="wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="section-number wow fadeIn" data-wow-delay=".2s">
                            <p>02</p>
                            <p>Проект дома</p>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Проект дома</h2>
                        </div>
                        <div class="project-list wow fadeIn" data-wow-delay=".5s">
                            <div class="list">
                                <?php
                                get_template_part('template-parts/project-list-item', null, array(
                                    'id' => preg_replace('/projects_/', '', fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_house_project')[0])
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_address') != '') : ?>
        <section class="location" id="location">
            <div class="wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="section-number wow fadeIn" data-wow-delay=".2s">
                            <p>03</p>
                            <p>Расположение</p>
                        </div>
                    </div>
                    <div class="col-10">
                        <?php
                            $address = fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_address');
    
                            $mapMarkers = '[';
                            $mapMarkers .= '{"address": "' . $address . '", "type": "portfolio-object-single", "iconSize": [40, 40], "iconOffset": [-20, -20], "iconUrl": "'.  esc_url(get_template_directory_uri()) . '/assets/images/map-marker-1.svg", "infoWindowText": "' . $address . '"}';
                            $mapMarkers .= ']';
                        ?>
                        <div class="map-wrap">
                            <div
                                class="map wow fadeIn" 
                                data-wow-delay=".5s"
                                data-map-marker='<?php echo $mapMarkers; ?>' 
                                data-map-center="<?php echo '[55.0274998, 82.9143595]'; ?>" 
                                data-map-zoom="13"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <section class="similar-projects">
        <div class="wrapper">
            <div class="row">
                <div class="col-2">
                    <div class="section-number wow fadeIn" data-wow-delay=".2s">
                        <p>04</p>
                        <p>Смотрите также</p>
                    </div>
                </div>
                <div class="col-10">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Другие обьекты</h2>
                        <div class="custom-slick-arrows wow fadeIn" data-wow-delay=".4s">
                        </div>
                    </div>

                    <section class="section-house-projects">
                        <?php
                        $queryHomes = new WP_Query(
                            array(
                                'post_type' => 'portfolio',
                                'posts_per_page' => 6,
                                'order' => 'ASC',
                                'orderby' => 'rand',
                                'post__not_in' => array($post->ID),
                            )
                        );
                        if ($queryHomes->posts) :
                        ?>
                            <div class="project-list wow fadeIn" data-wow-delay=".4s">
                                <div class="list">
                                    <?php
                                    foreach ($queryHomes->posts as $post) : setup_postdata($post);
                                        // Project list item
                                        get_template_part('template-parts/portfolio-list-item', null, array(
                                            'id' => $post->ID,
                                            // 'price-position' => 'top',
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
</section>

<?php get_footer(); ?>