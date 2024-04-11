<?php get_header(); ?>

<section class="l-page page-archive-technologies page-archive-architectural-styles">
    <?php
        $queryArchitecturalStyles = new WP_Query(
            array(
                'post_type' => 'architectural-styles',
                'posts_per_page' => -1,
            )
        );
        if ($queryArchitecturalStyles->posts) : 
    ?>

    <section class="technologies-intro">
        <div class="wrapper">
            <div class="row">
                <div class="col-2">
                    <div class="section-number wow fadeIn" data-wow-delay=".2s">
                        <p>01</p>
                    </div>
                </div>
                <div class="col-10">
                    <div class="page-title-block">
                        <div class="section-title">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s">Архитектурные<br> стили</h1>
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
                        <div class="text wow fadeIn" data-wow-delay=".4s">
                            <p>В 2019-2021 мы&nbsp;участвовали в&nbsp;интересном проекте: проектирование и&nbsp;реализация коттеджного посёлка в&nbsp;Братске как&nbsp;гензастройщик.</p>
                        </div>
                        <div class="tech-list">
                            <?php foreach ($queryArchitecturalStyles->posts as $key => $post) : setup_postdata ($post); ?>
                                <div class="item wow fadeIn" data-wow-delay="<?php echo '.' . ($key + 3) . 's'; ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        // var_dump(get_the_title());
                                            echo '<i class="icon ';
                                                if (get_the_title() == 'Дом с плоской крышей') {
                                                    echo 'icon-flat-roof';
                                                } else if (get_the_title() == 'Дома в стиле хай-тек') {
                                                    echo 'icon-high-tech';
                                                } else if (get_the_title() == 'Дом в стиле шале') {
                                                    echo 'icon-shale';
                                                } else if (get_the_title() == 'Дом в стиле барнхаус') {
                                                    echo 'icon-barnhouse';
                                                } else {

                                                }
                                            echo '"></i>';
                                            echo '<span>' . get_the_title() . '</span>';
                                        ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="technologies-list">
        
        <?php foreach ($queryArchitecturalStyles->posts as $key => $post) : setup_postdata ($post); ?>
            <div class="technologies-list-item wow fadeIn" data-wow-delay=".2s">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-2">
                            <div class="section-number">
                                <p>
                                    <?php
                                        echo ($key < 9) ? '0' : ''; 
                                        echo ($key + 2);
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="content">
                                <div class="text">
                                    <h4><?php the_title(); ?></h4>

                                    <?php if ($key == 0) : ?>
                                        <?php
                                            // Видео 
                                            $preview = ''; 
                                            $videoUrl = ''; 
                                            if (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_preview') != '') {
                                                $preview = fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_preview')['url'];
                                            }
                                            if (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_link') != '') {
                                                $videoUrl = 'https://www.youtube.com/watch?v=' . fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_link');
                                            }
                                            

                                            echo '<a class="video-container lazy" data-lity href="' . $videoUrl . '">';
                                                echo '<img data-src="' . $preview . '" class="lazy">';
                                                echo '<div class="btn-play white">';
                                                    echo '<i></i>';
                                                echo '</div>';
                                            echo '</a>';
                                        ?>
                                    <?php else : ?>
                                        <?php if (count(fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_media_list')) > 0) : ?>
                                            <div class="slider-mobile">
                                                <?php foreach (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_media_list') as $key => $item) {
                                                    if ($key <= 1 && $item['image'] != '') {
                                                        echo '<div class="item">';
                                                            echo '<img src="' . $item['image']['url'] . '">';
                                                        echo '</div>';
                                                    }
                                                } ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <div class="desc">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a class="btn-icon" href="<?php the_permalink(); ?>">
                                        <span>Подробнее о стиле</span>
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div>

                                <?php if ($key == 0) : ?>
                                    <?php
                                        // Видео 
                                        $preview = ''; 
                                        $videoUrl = ''; 
                                        if (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_preview') != '') {
                                            $preview = fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_preview')['url'];
                                        }
                                        if (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_link') != '') {
                                            $videoUrl = 'https://www.youtube.com/watch?v=' . fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_link');
                                        }
                                        

                                        echo '<a class="video-container lazy" data-lity href="' . $videoUrl . '">';
                                            echo '<img data-src="' . $preview . '" class="lazy">';
                                            echo '<div class="btn-play white">';
                                                echo '<i></i>';
                                            echo '</div>';
                                        echo '</a>';
                                    ?>
                                <?php else : ?>
                                    <?php if (count(fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_media_list')) > 0) : ?>
                                        <div class="image">
                                            <div class="list">
                                                <?php foreach (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_media_list') as $key => $item) {
                                                    if ($key <= 1 && $item['image'] != '') {
                                                        echo '<div class="item item-' . ($key + 1) . '">';
                                                            echo '<img src="' . $item['image']['url'] . '">';
                                                        echo '</div>';
                                                    }
                                                } ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        
    </section>







    <?php
		// Section - Contacts
		get_template_part( 'template-parts/section-contacts', null, array( 
			'section-number' => '0' . (count($queryArchitecturalStyles->posts) + 2),
			'section-title' => 'Не знаете какой стиль подойдет вам?',
			'section-subtitle' => 'Запишем на&nbsp;консультацию или экскурсию на&nbsp;наши строящиеся объекты',
		));
	?>

	<?php
		// Section - Map
		get_template_part( 'template-parts/section-map' );
	?>

    <?php
        endif; wp_reset_query();
        remove_filter('posts_orderby', 'orderby_post_title_int' );
    ?>

</section>

<?php get_footer(); ?>


