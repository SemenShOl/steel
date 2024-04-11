<?php
/* Template Name: FAQ */

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<section class="l-page page-faq">

    <section class="intro">
		<div class="wrapper">
       		<div class="row">
            	<div class="col-2">
                    <div class="section-number wow fadeIn" data-wow-delay=".2s">
						<p>01</p>
						<p>FAQ</p>
					</div>

                    <div class="block-audio wow fadeIn" data-wow-delay=".4s">
						<h4>Посмотрите интервью c&nbsp;Владимиром о&nbsp;том, как&nbsp;построить дом в&nbsp;Новосибирске и&nbsp;за какие деньги</h4>
						<a class="btn-play" data-lity href="https://www.youtube.com/watch?v=qRwW2wIKJMY">
							<i></i>
							<span>Смотреть</span>
                        </a>
					</div>
                </div>
            	<div class="col-10">
                    <div class="page-title-block">

						<div class="section-title">
							<h1 class="wow fadeInUp" data-wow-delay=".2s"><?php the_title(); ?></h1>
						</div>

                        <?php if (function_exists('bcn_display')) { 
                            echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".4s">';
                                echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
                            echo '</div>';
                        } ?>
					</div>
                    <div class="faq-list">
                        <?php if (count(fw_get_db_post_option($post->ID, 'plotnikoff_faq_list')) > 0) : ?>
                            <div class="list">
                                <?php foreach (fw_get_db_post_option($post->ID, 'plotnikoff_faq_list') as $key => $item) : ?>
                                    <div class="item wow fadeIn" data-wow-delay="<?php echo '.' . ($key + 2) . 's'; ?>">
                                        <div class="toggle">
                                            <p><?php echo $item['title']; ?></p>
                                            <i></i>
                                        </div>
                                        <div class="text">
                                            <p><?php echo $item['text']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="buttons wow fadeIn" data-wow-delay=".4s">
                            <button
                                class="btn-icon" 
                                data-bs-toggle="modal" 
                                data-bs-target="#modalCallback"
                                data-modal-textarea="message"
                                data-modal-form-name="FAQ - Задать вопрос"
                            >
								<span>Задать вопрос</span>
								<i class="icon icon-cloud-text"></i>
							</button>
                        </div>
                    </div>
                    <div class="interview-block">
                        <div class="interview-mobile wow fadeIn" data-wow-delay=".2s">
                        Посмотрите интервью c&nbsp;Владимиром о&nbsp;том, как построить дом в&nbsp;Новосибирске  и&nbsp;за&nbsp;какие деньги
                        </div>
                        <?php
                            // Локальное видео 
                            $poster = esc_url(get_template_directory_uri()) . '/assets/images/faq-interview-poster.jpg';
                            $videoPreview = esc_url(get_template_directory_uri()) . '/assets/videos/home-video-2-preview.webm';

                            echo '<a class="video-container type-local play-youtube wow fadeIn" data-wow-delay=".4s" data-lity href="https://www.youtube.com/watch?v=qRwW2wIKJMY">';
                            echo '<video class="preview lazy" autoplay="true" muted="true" loop="true" data-poster="' . $poster . '">';
                            echo '<source data-src="' . $videoPreview . '">';
                            echo '</video>';

                            echo '<div class="btn-play play-video-block">';
                            echo '<i></i><span>Смотреть</span>';
                            echo '</div>';
                            echo '</a>';
                        ?>
                        
                        <div class="text wow fadeIn" data-wow-delay=".4s">
                            <p>В интервью обсуждали много вопросов, особенно про загородное домостроение. С какими трудностями сталкиваемся мы, и как их решаем. Ответили на ваши частые вопросы и развенчали миф о стройке, что "Самому строить дешевле". Финишировали беседу фразой: "Как семьям становиться еще счастливее".</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
		// Section - Contacts
		get_template_part( 'template-parts/section-contacts', null, array( 
			'section-number' => '02',
            'section-title' => 'Задайте свой вопрос',
            'mobile-button-text' => 'Задать вопрос',
			'section-subtitle' => 'Менеджер свяжется с&nbsp;вами<br> и&nbsp;ответит на&nbsp;ваши вопросы',
		));
	?>

	<?php
		// Section - Map
		get_template_part( 'template-parts/section-map' );
	?>
    
</section>

<?php
    endwhile; endif;
    get_footer();
?>
