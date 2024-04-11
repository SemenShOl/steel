<!-- . -->

<?php

$categories = get_the_category();

get_header(); 

$queryTestimonials = new WP_Query(
    array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1,
        'order' => 'ASC', 
        'orderby' => 'title',
    )
);
// $postsArr = array();
$postsArrVideoFavorite = array();
$postsArrVideo = array();
$postsArrText = array();

if ($queryTestimonials ->posts) {
    foreach ($queryTestimonials->posts as $post) : setup_postdata ($post);
        if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_link') != '') {
            if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_favorite') == 'yes') {
                array_push($postsArrVideoFavorite, $post);
            } else {
                array_push($postsArrVideo, $post);
            }
        } else {
            array_push($postsArrText, $post);
        }
    endforeach;
}



?>

<section class="l-page page-archive-testimonials">


    <section class="testimonials-wrap">

		<div class="wrapper">
       		<div class="row">
               <div class="col-2">
                    <div class="section-number wow fadeIn" data-wow-delay=".2s">
                        <p>01</p>
                        <p>Отзывы</p>
                    </div>
                </div>
            	<div class="col-10">
                    <div class="page-title-block">
                        <div class="section-title">
                            <div class="back wow fadeIn" data-wow-delay=".3s">
                                <a class="link" href="<?php echo home_url( '/' ); ?>"></a>
                            </div>
                            <h1 class="wow fadeInUp" data-wow-delay=".2s"">Отзывы наших клиентов</h1>
                        </div>
                        <div class="right-block">
                            <?php if (function_exists('bcn_display')) { 
                                echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".3s">';
                                    echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
                                echo '</div>';
                            } ?>
                            <button class="btn-icon wow fadeIn" data-wow-delay=".4s" data-bs-toggle="modal" data-bs-target="#modalNewReview">
                                <span>Оставить свой отзыв</span>
                                <i class="icon-cloud-text"></i>
                            </button>
                        </div>

                        <button class="btn-icon mob wow fadeIn" data-wow-delay=".3s" data-bs-toggle="modal" data-bs-target="#modalNewReview">
                            <span>Оставить свой отзыв</span>
                            <i class="icon-cloud-text"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>



        <?php
            if (count($postsArrVideoFavorite) > 0) : 

            $post = $postsArrVideoFavorite[0];

            $videoId = fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_link');


            $poster = '';
            if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_poster') != '') {
                $poster = fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_poster')['url'];
            }

            $videoPreview = '';
            if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_preview') != '') {
                $videoPreview = fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_preview')['url'];
            }
        ?>
            <section class="section-testimonials-video-big wow fadeIn" id="post-<?php echo $post->ID; ?>" data-wow-delay=".2s">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-2">
                            <div class="block-audio wow fadeIn" data-wow-delay=".2s">
                                <div class="block-play">
                                    <p>Смотреть<br> видео отзыв клиента</p>
                                    <a class="btn-play play-video-block" data-lity href="<?php echo $videoId; ?>">
                                        <i></i>
                                        <span>Смотреть</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="big-testimonial">
                                <div class="video-wrap wow fadeIn --animation-image" data-wow-delay=".2s">
                                    <div class="video-inner cutoff-corner-right">
                                        <?php
                                            // Youtube видео
                                            echo '<a class="video-container type-youtube type-youtube-link" data-lity href="' . $videoId . '">';
                                                echo '<video class="lazy" autoplay="true" muted="true" loop="true" data-poster="' . $poster . '">';
                                                    echo '<source data-src="' . $videoPreview . '">';
                                                echo '</video>';

                                                echo '<div class="btn-play play-video-block">';
                                                    echo '<i></i><span>Смотреть</span>';
                                                echo '</div>';
                                            echo '</a>';
                                        ?>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="text">
                                        <img class="ico-quote lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/quote.svg">
                                        <div class="text">
                                            <?php echo $post->post_content; ?>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <?php
                                            if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_name') != '') {
                                                echo '<p class="name">' . fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_name') . '</p>'; 
                                            }
                                            if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_address') != '') {
                                                echo '<p class="location">' . fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_address') . '</p>'; 
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php endif; ?>



        <?php 
            $showCount = 6;
            if (count($postsArrVideo) > 0) : 
        ?>
            <section class="section-testimonials-video">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <div class="list-block">
                                <?php foreach ($postsArrVideo as $key => $post) : setup_postdata ($post); ?>
                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_link') != '') : ?>
                                        <div
                                            id="post-<?php echo $post->ID; ?>"
                                            class="item wow fadeIn <?php echo (($key + 1) > $showCount) ? 'is-hidden' : ''; ?>"
                                            data-wow-delay="<?php echo '.' . ($key + 3) . 's'; ?>"
                                        >
                                            <a class="inner" href="<?php echo fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_link'); ?>" data-lity>
                                                <div class="video">
                                                    <?php if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_preview') != '') : ?>
                                                        <img data-src="<?php echo fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_preview')['url']; ?>" class="lazy">
                                                    <?php endif; ?>
                                                    <div class="btn-play white">
                                                        <i></i>
                                                    </div>
                                                </div>
                                                <?php
                                                    if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_home_build') != '') {
                                                        echo '<h4>' . fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_home_build') . '</h4>';
                                                    }
                                                    if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_address') != '') {
                                                        echo '<p>' . fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_address') . '</p>';
                                                    }
                                                ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>

                            <?php if (count($postsArrVideo) > $showCount) : ?>
                                <div class="show-more wow fadeIn" data-wow-delay=".2s">
                                    <div class="link">
                                        <span>Показать ещё</span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php
            $showCount = 6;
            if (count($postsArrText) > 0) : 
        ?>
            <section class="section-testimonials-text">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <div class="list-block">
                                <?php foreach ($postsArrText as $key => $post) : setup_postdata ($post); ?>
                                    <div
                                        id="post-<?php echo $post->ID; ?>"
                                        class="item wow fadeIn <?php echo (($key + 1) > $showCount) ? 'is-hidden' : ''; ?>"
                                        data-wow-delay="<?php echo '.' . ($key + 3) . 's'; ?>"
                                    >
                                        <div class="inner" data-bs-toggle="modal" data-bs-target="#modalReviewView" data-post-id="<?php echo $post->ID; ?>">
                                            <div class="photo">
                                                <?php
                                                    if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_name') != '') {
                                                        $nameArr = explode(' ', fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_name'));
                                                        $name = '';

                                                        foreach ($nameArr as $key => $item) {
                                                            if ($key <= 1) {
                                                                $name .= strtoupper(mb_strimwidth($item, 0, 1));
                                                            }
                                                        }

                                                        echo '<div class="img">';
                                                            echo '<p>' . $name . '</p>';
                                                        echo '</div>'; 
                                                    }  

                                                    if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_rating') != '') {
                                                        echo '<p>' . fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_rating') . '</p>';
                                                    }
                                                ?>
                                            </div>
                                            <?php
                                                if (fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_name') != '') {
                                                    echo '<p class="name">' . fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_name') . '</p>'; 
                                                }

                                                if (get_the_content() != '') {
                                                    echo '<div class="text">' . wp_trim_words(get_the_content($post->ID), 30) . '</div>';
                                                }
                                            ?>
                                            <div class="link">
                                                <span>Читать отзыв</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php if (count($postsArrText) > $showCount) : ?>
                                <div class="show-more wow fadeIn" data-wow-delay=".2s">
                                    <div class="link">
                                        <span>Показать ещё</span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    </section>



    <?php
		// Section - Contacts
		get_template_part( 'template-parts/section-contacts', null, array( 
			'section-number' => '02',
			'modal-open' => 'modalNewReview',
            'section-title' => 'Оставьте свой<br> отзыв',
            'section-subtitle' => 'Заполните форму и расскажите<br> о своем опыте работы с нами',
            'circle-button-text-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-testimonial-text.svg',
            'circle-button-icon-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-testimonial-icon.svg',
		));
	?>

	<?php
		// Section - Map
		get_template_part( 'template-parts/section-map' );
	?>

</section>

<?php get_footer(); ?>




