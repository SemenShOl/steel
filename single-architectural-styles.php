
<?php
    get_header(); 

    $itemFwOptionsHomes = fw_extract_only_options(fw()->theme->get_post_options('homes'));

    $postId = $post->ID;
    //require ('inc/libs/NCL-lib/NCLNameCaseRu.php');
?>

<section class="l-page page-single-technologies page-single-architectural-styles">

    <section class="technologies-intro">
		<div class="wrapper">
       		<div class="row">
            	<div class="col-2">
                    <div class="section-number wow fadeIn" data-wow-delay=".2s">
						<p>01</p>
						<p>О архитектурном стиле</p>
					</div>
                </div>
            	<div class="col-10">
                    <div class="page-title-block">
						<div class="section-title">
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

                    <div class="media mobile wow fadeIn" data-wow-delay=".3s">
                        <?php
                            // Видео 
                            $videoId = fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_link');
                            $poster = fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_preview')['url'];

                            $preview = ''; 
                            $videoUrl = ''; 
                            if (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_preview') != '') {
                                $preview = fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_preview')['url'];
                            }
                            if (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_link') != '') {
                                $videoUrl = 'https://www.youtube.com/watch?v=' . fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_introvideo_link');
                            }
                            

                            echo '<a class="video-container" data-lity href="' . $videoUrl . '">';
                                echo '<img data-src="' . $preview . '" class="lazy">';
                                echo '<div class="btn-play white">';
                                    echo '<i></i>';
                                echo '</div>';
                            echo '</a>';
                        ?>
                    </div>

                    <div class="content">
                        <div class="text wow fadeIn" data-wow-delay=".2s">
                            <div class="excerpt">
                                <?php the_content(); ?>
                            </div>
                            <div class="buttons">
                                <a class="btn-icon" href="<?php echo home_url( '/proekty' ); ?>">
                                    <?php
                                        $bthText = 'Проекты домов ';

                                        if (get_the_title() == 'С плоской крышей') {
                                            $bthText .= 'c плоской крышей';
                                        } elseif (get_the_title() == 'Хай тек') {
                                            $bthText .= 'хай тек';
                                        } elseif (get_the_title() == 'Шале') {
                                            $bthText .= 'шале';
                                        } elseif (get_the_title() == 'Барнхаус') {
                                            $bthText .= 'барнхаус';
                                        } 

                                        echo '<span>' . $bthText . '</span>';
                                    ?>
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="media wow fadeIn" data-wow-delay=".4s">
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
                                

                                echo '<a class="video-container" data-lity href="' . $videoUrl . '">';
                                    echo '<img data-src="' . $preview . '" class="lazy">';
                                    echo '<div class="btn-play white">';
                                        echo '<i></i>';
                                    echo '</div>';
                                echo '</a>';
                            ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <section class="technologies-specifications">
		<div class="wrapper">
       		<div class="row">
            	<div class="col-2">
                    <div class="section-number wow fadeIn" data-wow-delay=".2s">
						<p>02</p>
						<p>О <?php echo mb_strtolower(get_the_title(), 'UTF-8'); ?></p>
					</div>
                </div>

                
            	<div class="col-10">
                    <div class="section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s"">Технические характеристики<br> <?php echo mb_strtolower(get_the_title(), 'UTF-8'); ?></h2>
					</div>

                    <?php if (count(fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_media_list')) > 0) : ?>
                        <div class="block-media">
                            <?php foreach (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_media_list') as $key => $item) : ?>
                                <?php if ($key <= 1) : ?>
                                    <div class="item-media wow fadeIn" data-wow-delay="<?php echo '.' . ($key + 3) . 's'; ?>">
                                        <?php if ($item['video_link'] != '') : ?>

                                            <?php
                                                // Видео 
                                                $preview = ''; 
                                                $videoUrl = ''; 
                                                if ($item['image'] != '') {
                                                    $preview = $item['image']['url'];
                                                }
                                                if ($item['video_link'] != '') {
                                                    $videoUrl = 'https://www.youtube.com/watch?v=' . $item['video_link'];
                                                }
                                                
                                                echo '<a class="video-container" data-lity href="' . $videoUrl . '">';
                                                    echo '<img data-src="' . $preview . '" class="lazy">';
                                                    echo '<div class="btn-play white">';
                                                        echo '<i></i>';
                                                    echo '</div>';
                                                echo '</a>';
                                            ?>
                                            
                                        <?php else : 
                                            if ($item['image'] != '') {
                                                echo '<a class="img">';
                                                    echo '<img class="lazy" data-src="' . $item['image']['url'] . '">';
                                                echo '</a>';
                                            }
                                        endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                        if (count(fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_params')) > 0) {
                            echo '<div class="params wow fadeIn" data-wow-delay=".2s">';
                                foreach (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_params') as $key => $item) {
                                    echo '<div class="item">';
                                        if ($item['title'] != '') echo '<h4>' . $item['title'] . '</h4>';
                                        if ($item['text'] != '') echo '<div class="text">' . $item['text'] . '</div>';
                                    echo '</div>';
                                }
                            echo '</div>';
                        }

                        if (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_description') != '') {
                            echo '<div class="description wow fadeIn" data-wow-delay=".4s">';
                                echo fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_description');
                            echo '</div>';
                        }
                    ?>

                    <?php if (count(fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_media_list')) > 2) : ?>
                        <div class="block-media">
                            <?php foreach (fw_get_db_post_option($post->ID, 'plotnikoff_architectural_styles_media_list') as $key => $item) : ?>
                                <?php if ($key > 1) : ?>
                                    <div class="item-media wow fadeIn" data-wow-delay="<?php echo '.' . ($key + 3) . 's'; ?>">
                                        <?php if ($item['video_link'] != '') : ?>
                                            <?php
                                                // Видео 
                                                $preview = ''; 
                                                $videoUrl = ''; 
                                                if ($item['image'] != '') {
                                                    $preview = $item['image']['url'];
                                                }
                                                if ($item['video_link'] != '') {
                                                    $videoUrl = 'https://www.youtube.com/watch?v=' . $item['video_link'];
                                                }
                                                
                                                echo '<a class="video-container" data-lity href="' . $videoUrl . '">';
                                                    echo '<img data-src="' . $preview . '" class="lazy">';
                                                    echo '<div class="btn-play white">';
                                                        echo '<i></i>';
                                                    echo '</div>';
                                                echo '</a>';
                                            ?>
                                        <?php else : 
                                            if ($item['image'] != '') {
                                                echo '<a class="img">';
                                                    echo '<img class="lazy" data-src="' . $item['image']['url'] . '">';
                                                echo '</a>';
                                            }
                                        endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </section>
    

    <?php 
        if (fw_get_db_post_option($postID, 'plotnikoff_architectural_styles_catalog_type') != '' && fw_get_db_post_option($postID, 'plotnikoff_architectural_styles_catalog_type') != 'none') : 
        
            $queryHomes = new WP_Query(
            array(
                'post_type' => 'homes',
                'posts_per_page' => -1,
                'order' => 'ASC', 
                'orderby' => 'title',
            )
        );
        if ($queryHomes->posts) : 

        $postArr = array();
        $currentType = fw_get_db_post_option($postID, 'plotnikoff_architectural_styles_catalog_type');

        foreach ($queryHomes->posts as $post) {
            $itemType = fw_get_db_post_option($post->ID, 'plotnikoff_homes_brus');

            if ($currentType == fw_get_db_post_option($post->ID, 'plotnikoff_homes_brus')) {
                array_push($postArr, $post);
            }
        }

        if (count($postArr) > 0) :
    ?>
        <section class="section-house-projects">
            <div class="wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="section-number wow fadeIn" data-wow-delay=".2s">
                            <p>03</p>
                            <p>Каталог проектов</p>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="top-block">
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Проекты домов<br> из клееного бруса</h2>
                            </div>
                            <div class="buttons">
                                <div class="btn-wrap wow fadeIn" data-wow-delay=".3s">
                                    <button class="btn-icon">
                                        <span>Скачать каталог</span>
                                        <i class="icon icon-pdf"></i>
                                    </button>
                                </div>
                                <div class="btn-wrap wow fadeIn" data-wow-delay=".4s">
                                    <a class="btn-icon" href="<?php echo home_url( '/proekty' ); ?>">
                                        <span>Смотреть все проекты</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="item wow fadeIn" data-wow-delay=".2s">
                                    <div class="img">
                                        <img class="lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/house.svg">
                                    </div>
                                    <p>Собственные продуманные проекты</p>
                                </div>
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="img">
                                        <img class="lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/pen-tool-1.svg">
                                    </div>
                                    <p>Внесем любые изменения в типовой проект</p>
                                </div>
                                <div class="item wow fadeIn" data-wow-delay=".6s">
                                    <div class="img">
                                        <img class="lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/house.svg">
                                    </div>
                                    <p>Разработаем индивидуальное решение</p>
                                </div>
                            </div>
                        </div> 
                        
                        
                        <div class="project-list wow fadeIn" data-wow-delay=".4s">
                            <div class="list">
                                <?php
                                    foreach ($postArr as $post) : setup_postdata ($post);
                                        // Project list item
                                        get_template_part( 'template-parts/project-list-item', null, array( 'id' => $post->ID ));
                                    endforeach;
                                ?>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    <?php
        endif; endif; endif; wp_reset_query();
        remove_filter('posts_orderby', 'orderby_post_title_int' );
    ?>


    <section class="section-start-steps">
		<div class="wrapper">
       		<div class="row">
            	<div class="col-2">
					<div class="section-number wow fadeIn" data-wow-delay=".2s">
						<p>04</p>
						<p>Процесс<br> строительства</p>
					</div>
				</div>
            	<div class="col-10">
					<div class="section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Этапы строительства</h2>
                        <p class="wow fadeIn" data-wow-delay=".4s">Строительство индивидуального дома под&nbsp;ключ проходит в&nbsp;несколько этапов:</p>
					</div>


					<div class="steps-list-wrap">
                        <div class="steps-list">
                            <div class="item wow fadeIn" data-wow-delay=".2s" style="grid-area: item-1;">
                                <div class="inner">
                                    <div class="top">
                                        <div class="title">
                                            <i>I</i>
                                            <h4>Проектирование</h4>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Разработка<br> плана и дизайна, подбор<br> материалов.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeIn" data-wow-delay=".3s" style="grid-area: item-2;">
                                <div class="inner">
                                    <div class="top">
                                        <div class="title">
                                            <i>II</i>
                                            <h4>Подготовка<br> фундамента</h4>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Тип фундамента подбирается с учетом свойств грунта на участке</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeIn" data-wow-delay=".4s" style="grid-area: item-3;">
                                <div class="inner">
                                    <div class="top">
                                        <div class="title">
                                            <i>III</i>
                                            <h4>Укладка первого<br> венца</h4>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Укладка первого венца и его гидроизоляция</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeIn" data-wow-delay=".5s" style="grid-area: item-4;">
                                <div class="inner">
                                    <div class="top">
                                        <div class="title">
                                            <i>IV</i>
                                            <h4>Мониаж лаг чернового пола</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeIn" data-wow-delay=".6s" style="grid-area: item-5;">
                                <div class="inner">
                                    <div class="top">
                                        <div class="title">
                                            <i>V</i>
                                            <h4>Сборка коробки</h4>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Сборка коробки, межкомнатных перегородоки перекрытий.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeIn" data-wow-delay=".7s" style="grid-area: item-6;">
                                <div class="inner">
                                    <div class="top">
                                        <div class="title">
                                            <i>VI</i>
                                            <h4>Установка крыши</h4>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Стропил и кровельный пирог</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeIn" data-wow-delay=".8s" style="grid-area: item-7;">
                                <div class="inner">
                                    <div class="top">
                                        <div class="title">
                                            <i>VII</i>
                                            <h4>Монтаж окон<br> и дверей.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeIn" data-wow-delay=".9s" style="grid-area: item-8;">
                                <div class="inner">
                                    <div class="top">
                                        <div class="title">
                                            <i>VIII</i>
                                            <h4>Заключение<br> договора</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeIn" data-wow-delay="1s" style="grid-area: item-9;">
                                <div class="inner">
                                    <div class="top">
                                        <div class="title">
                                            <i>IX</i>
                                            <h4>Внутренние<br> коммуникации и&nbsp;отделка</h4>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Проведение внутренних коммуникаций, внутренняя отделка.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					
				</div>
			</div>
		</div>
	</section>


    <section class="section-warranty">
		<div class="wrapper">
       		<div class="row">
            	<div class="col-2">
					<div class="section-number wow fadeIn" data-wow-delay=".2s">
						<p>05</p>
						<p>Гарантия</p>
					</div>
                    <div class="section-circle wow fadeIn" data-wow-delay=".4s">
						<img class="text lazy animation-spin" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/circle-warranty.svg" alt="">
                        <div class="text-center">до <span class="big">5</span> лет</div>
					</div>
				</div>
            	<div class="col-10">
					<div class="section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Дома, готовые для жизни<br> от компании «Плотникофф»</h2>
					</div>
                    <div class="image-wrap wow fadeIn" data-wow-delay=".4s">
                        <div class="image">
                            <img class="lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/section-warranty-img.jpg">
                        </div>
                    </div>
                    <div class="text-row">
                        <div class="section-circle wow fadeIn" data-wow-delay=".2s">
                            <img class="text lazy animation-spin" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/circle-warranty.svg" alt="">
                            <div class="text-center">до <span class="big">5</span> лет</div>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay=".2s">
                            <p>Мы&nbsp;строим дома в&nbsp;Новосибирске по&nbsp;индивидуальным и&nbsp;современным типовым проектам</p>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay=".4s">
                            <p>Можем адаптировать готовый проект под&nbsp;ваши пожелания:</p>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay=".6s">
                            <ul>
                                <li>увеличить площадь</li>
                                <li>изменить расположение проемов</li>
                                <li>перенести внутренние перегородки</li>
                            </ul>
                        </div>
                    </div>
                    
				</div>
			</div>
		</div>
        <div class="bottom-text">
            <div class="wrapper">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <div class="content">
                            <div class="text-1 wow fadeIn" data-wow-delay=".2s">
                                <p>Оставьте заявку, и&nbsp;мы&nbsp;подготовим смету на&nbsp;строительство из&nbsp;клееного бруса</p>
                                <p>Если вы&nbsp;еще не&nbsp;решили, какой хотите дом, мы&nbsp;предложим варианты и&nbsp;проведем экскурсию на&nbsp;строящиеся объекты</p>
                            </div>
                            <div class="text-2 wow fadeIn" data-wow-delay=".2s">
                                <p>ПЛОТНИКОФФ строит каркасные дома по&nbsp;финской технологии. Мы&nbsp;полноценная строительная компания, а&nbsp;не&nbsp;просто частная бригада. В&nbsp;нашем штате в&nbsp;Новосибирске более 50&nbsp;человек: инженеры, архитекторы, менеджеры, прорабы и&nbsp;рабочие. С&nbsp;нами вы&nbsp;быстро пройдете путь от&nbsp;пустого участка до&nbsp;благоустроенного домовладения.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<?php
		// Section - Contacts
		get_template_part( 'template-parts/section-contacts', null, array( 
			'section-number' => '06',
			'section-title' => 'Понравилась<br> технология?',
			'section-subtitle' => 'Запишем на&nbsp;консультацию или<br> экскурсию на&nbsp;наши строящиеся объекты',
		));
	?>

	<?php
		// Section - Map
		get_template_part( 'template-parts/section-map' );
	?>
</section>

<?php get_footer(); ?>