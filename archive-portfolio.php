<?php

$categories = get_the_category();

get_header(); ?>

<section class="l-page page-archive-portfolio">

    <section class="section-portfolio-objects-list">
        <?php
            $queryPortfolio = new WP_Query(
                array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 9,
                    // 'order' => 'ASC', 
                    'orderby' => 'menu_order',
                )
            );
            if ($queryPortfolio->posts) : 
        ?>
            <div class="wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="section-number wow fadeIn" data-wow-delay=".2s">
                            <p>01</p>
                            <p>Строим дома<br> как для себя</p>
                        </div>

                        <div class="page-title-block page-title-block-mobile">
                            <?php if (function_exists('bcn_display')) { 
                                echo '<div class="breadcrumbs">';
                                    echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
                                echo '</div>';
                            } ?>
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Наши объекты</h2>
                            </div>
                            <div class="right-block wow fadeIn" data-wow-delay=".4s">
                                <a class="btn-icon" href="<?php echo home_url( '/proekty' ); ?>">
                                    <span>Смотреть каталог проектов</span>
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="portfolio-filter wow fadeIn" data-wow-delay=".5s" data-type-active='[]'>
                            <p>Технология строительства:</p>
                            <div class="list">
                                <div class="item" data-type="carkas">
                                    <span>Каркас&shy;ные дома</span>
                                </div>
                                <div class="item" data-type="gasbeton">
                                    <span>Газо&shy;бетон</span>
                                </div>
                                <div class="item" data-type="brus">
                                    <span>Брус</span>
                                </div>
                                <div class="item" data-type="brick">
                                    <span>Кирпич</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="page-title-block page-title-block-desktop">
                            <div class="section-title">
                                <h1 class="wow fadeInUp" data-wow-delay=".3s">Наши объекты</h1>
                            </div>
                            <div class="right-block wow fadeIn" data-wow-delay=".4s">
                                <?php if (function_exists('bcn_display')) { 
                                    echo '<div class="breadcrumbs">';
                                        echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
                                    echo '</div>';
                                } ?>
                                <a class="btn-icon" href="<?php echo home_url( '/proekty' ); ?>">
                                    <span>Смотреть каталог проектов</span>
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="content">                           
                            <div class="portfolio-list">
                                <div class="list">
                                    <?php
                                        foreach ($queryPortfolio->posts as $post) : setup_postdata ($post);
                                            // Project list item
                                            get_template_part( 'template-parts/portfolio-list-item', null, array( 'id' => $post->ID ));
                                        endforeach;
                                    ?>
                                </div>

                                <script>
                                    var portfolio_true_posts = '<?php echo serialize($queryPortfolio->query_vars); ?>';
                                    var portfolio_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                    var portfolio_max_pages = '<?php echo $queryPortfolio->max_num_pages; ?>';
                                </script>

                                <?php if ( $queryPortfolio->max_num_pages > 1 ) : ?>
                                    <div class="show-more">
                                        <div class="link">
                                            <span>Показать ещё</span>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        <?php
            endif; wp_reset_query();
            // remove_filter('posts_orderby', 'orderby_post_title_int' );
        ?>
    </section>


    <section class="section-portfolio-geography">
        <div class="wrapper">
            <div class="row">
                <div class="col-2">
                    <div class="section-number wow fadeIn" data-wow-delay=".2s">
                        <p>02</p>
                        <p>Строим в НСО<br> и&nbsp;не только</p>
                    </div>
                </div>
                <div class="col-10">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">География проектов</h2>
                    </div>
                    
                    <?php
                        $queryPortfolio = new WP_Query(
                            array(
                                'post_type' => 'portfolio',
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                            )
                        );
                        if ($queryPortfolio->posts) : 

                        $mapAddresses = array();

                        foreach ($queryPortfolio->posts as $post) : setup_postdata ($post);
                            if (fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_address') != '') {
                                array_push($mapAddresses, fw_get_db_post_option($post->ID, 'plotnikoff_portfolio_address'));
                            }
                        endforeach;

                        if (count($mapAddresses) > 0) {
                            $mapMarkers = '[';

                            foreach ($mapAddresses as $key => $item) {
                                if ($key > 0) {
                                    $mapMarkers .= ',';
                                }

                                $mapMarkers .= '{"address": "' . $item . '", "type": "portfolio-object", "iconSize": [40, 40], "iconOffset": [-20, -20], "iconUrl": "'.  esc_url(get_template_directory_uri()) . '/assets/images/map-marker-1.svg", "infoWindowText": "' . $item . '"}';
                            }

                            $mapMarkers .= ']';
                        }
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
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>


    <section class="section-info-block-black lazy"  data-bg="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/info-block-black-1-bg.png">
		<div class="wrapper">
       		<div class="row">
            	<div class="col-2">
					<div class="section-number wow fadeIn" data-wow-delay=".2s">
						<p>03</p>
						<p>Экскурсия</p>
					</div>
				</div>
            	<div class="col-10">
                    <div class="content">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Сделать выбор проще,<br> если увидеть всё своими глазами</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Мы приглашаем вас на экскурсию по построенным объектам, чтобы оценить преимущества, почувствовать атмосферу и выбрать свой идеальный дом </p>
                        </div>
                        <button
                            class="btn-icon wow fadeIn" 
                            data-wow-delay=".6s"
                            data-bs-toggle="modal" 
                            data-bs-target="#modalCallback"
                            data-modal-title="Записаться на экскурсию"
                            data-modal-form-name="Записаться на экскурсию"
                        >
                            <span>Записаться на экскурсию</span>
                            <i class="icon icon-eye"></i>
                        </button>
                    </div>
				</div>
			</div>
		</div>
	</section>

    <?php
	    // Section - Online broadcast
        get_template_part('template-parts/section-online-broadcast', null, array(
            'section-number' => '04',
        ));
	?>

    <?php
		// Section - Contacts
		get_template_part( 'template-parts/section-contacts', null, array( 
			'section-number' => '05',
			'section-title' => 'Понравилась<br> наша работа?',
			'section-subtitle' => 'Запишитесь на бесплатную консультацию, проведем экскурсию на наши строящиеся объекты, вы своими глазами оцените наш подход — сделать выбор станет проще',
		));
	?>

	<?php
		// Section - Map
		get_template_part( 'template-parts/section-map' );
	?>

</section>

<?php get_footer(); ?>


