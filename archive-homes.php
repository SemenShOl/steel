<?php

$categories = get_the_category();

get_header();

?>

<section class="l-page page-archive-homes"> 
    <?php
        $exludePostIdArr = array();

        // array_push($exludePostIdArr, $post->ID);

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
                // 'order' => 'DESC', 
                'orderby' => 'menu_order',
                'post__not_in' => $exludePostIdArr,
            )
        );

        if ($queryHomes->posts) : 
    ?>
        <div class="wrapper"> 
            <div class="row">
                <div class="col-12">
                    
                    <div class="page-title-block">
                        <div class="section-title">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s">Каталог</h1>
                        </div>

                        <?php if (function_exists('bcn_display')) { 
                            echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".4s">';
                                echo '<div class="breadcrumbs-inner">';
                                    bcn_display();
                                    echo '</div>'; 
                            echo '</div>';
                        } ?>
                    </div>
                    <!-- <div class="page-title-actions wow fadeIn" data-wow-delay=".5s">
                        <div class="subtitle">
                            <p>Мы подготовили стильные проекты домов, выбирайте какой вам по душе!</p>
                        </div>
                        <?php //the_posts_pagination(); ?>
                    </div> -->

                    <div class="content wow fadeIn" data-wow-delay=".2s">
                        <div class="project-list">
                            <div class="list">
                                <?php 
                                    foreach ($queryHomes->posts as $post) : setup_postdata ($post);
                                        get_template_part( 'template-parts/project-list-item', null, array( 'id' => $post->ID ));
                                    endforeach;

                                    // if ( have_posts() ) : 
                                    //     while ( have_posts() ) : the_post();
                                    //         get_template_part( 'template-parts/project-list-item', null, array( 'id' => $post->ID ));
                                    //     endwhile;
                                    // else :
                                    //     echo '<div class="not-found"><p>Проектов не найдено :(</p></div>';
                                    // endif;
                                ?>
                            </div>

                            <script>
                                var homes_true_posts = '<?php echo serialize($queryHomes->query_vars); ?>';
                                var homes_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                var homes_max_pages = '<?php echo $queryHomes->max_num_pages; ?>';
                            </script>

                            <?php if ( $queryHomes->max_num_pages > 1 ) : ?>
                                <div class="show-more">
                                    <div class="link">
                                        <span>Показать ещё</span>
                                    </div>
                                </div>
                            <?php endif; ?> 
                        </div>
                        

                        <?php //the_posts_pagination(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
        endif; wp_reset_query();
    ?>

    <?php
		// Section - Contacts
		get_template_part( 'template-parts/section-contacts', null, array( 
			'section-number' => '02',
		));
	?>

	<?php
		// Section - Map
		get_template_part( 'template-parts/section-map' );
	?>

</section>

<?php get_footer(); ?>








