<?php
/* Template Name: Галлерея */

$categories = get_the_category();

get_header(); ?>

<section class="l-page section-gallery">
  <?php
    $queryPortfolio = new WP_Query(
        array(
            'post_type' => 'testimonials',
            // 'posts_per_page' => 6,
            // 'order' => 'ASC', 
    //         'orderby' => 'menu_order',
        )
    );
    if ($queryPortfolio->posts) : 
  ?>
  <div class="wrapper">
    <div class="row">
      <div class="col-2">
        <div class="section-number wow fadeIn" data-wow-delay=".2s">
         
        </div>
      </div>
      <div class="col-10">
        <div class="partners-title">
          <h1 class="wow fadeInUp" data-wow-delay=".2s">Галерея</h1>
          
          <?php if (function_exists('bcn_display')) { 
            echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".3s">';
              echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
            echo '</div>';
          } ?>
        </div>
        <!-- <p class="mw-1020 font-400-20-150 mb-60-40 wow fadeIn" data-wow-delay=".4s">Помимо доставок собственными машинами, мы&nbsp;можем доставлять металлопрокат через специализированные компании, это стало возможно, так как с&nbsp;нами сотрудничают крупнейшие транспортные организации: Деловые Линии, Автотрейдинг, Байкал-Сервис, Желдорэкспедиция и&nbsp;другие. Мы&nbsp;верим, что главное&nbsp;&mdash; это удобство нашего клиента, поэтому для каждого заказа, мы&nbsp;подбираем наиболее выгодный вариант доставки. Такой подход позволяет получать более быстрый, качественный и&nbsp;дешевый сервис. В&nbsp;зависимости 
от&nbsp;ваших пожеланий, мы&nbsp;можем предложить различные варианты доставки вашего заказа: до&nbsp;терминала транспортной компании или непосредственно до&nbsp;вашего склада транспортом из&nbsp;нашего автопарка. Наличие филиалов нашей компании в&nbsp;других городах позволяет оптимально рассчитать доставку с&nbsp;минимальными транспортными затратами.</p> -->

      </div>
    </div>
  </div>
  </div>
  <div class="wrapper">
    <div class="row">
      <div class="col-2">

        <div class="section-number partners-side-lable wow fadeIn" data-wow-delay=".2s">
          <!-- <p>02</p>
          <p>Оплата</p> -->
        </div>
      </div>
      <div class="col-10">
      <div class="content">           
          <div class="gallery-video">
            <a href="<?php echo fw_get_db_post_option($post->ID, 'gallery_video')['url']; ?>" data-lity>
              <video class="preview lazy" autoplay="true" muted="true" loop="true">';
                  <source data-src="<?php echo fw_get_db_post_option($post->ID, 'gallery_video_preview')['url']; ?>">
              </video>
              <div class="btn-play white">
                  <i></i>
              </div>
            </a>
          </div>                
          <div class="portfolio-list">
            <div class="list">
                <?php
                    $curImage = 0;
                    foreach ($queryPortfolio->posts as $post) : setup_postdata ($post); ?>
                        <a class="portfolio-list-item <?php if($curImage >= 6) echo 'is-hidden' ?>" data-fslightbox="gallery" href="<?php echo esc_url(fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_preview')['url']); ?>">
                          <div class="portfolio-list-img-container">
                            <img class="portfolio-list-item-inner <?php if($curImage < 6) echo 'wow fadeIn --animation-image' ?> " src="<?php echo esc_url(fw_get_db_post_option($post->ID, 'plotnikoff_testimonials_video_preview')['url']); ?>"></img>
                          </div>
                        </a>
                        
                    <?php $curImage++; endforeach;
                ?>
            </div>

            <script>
                var portfolio_true_posts = '<?php echo serialize($queryPortfolio->query_vars); ?>';
                var portfolio_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                var portfolio_max_pages = '<?php echo $queryPortfolio->max_num_pages; ?>';
            </script>

            <?php if ( count($queryPortfolio->posts) > 6 ) : ?>
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

<?php
// Section - Contacts
get_template_part('template-parts/section-contacts', null, array(
  'section-number' => '04',
  'section-title' => 'Заинтересовало<br/>
предложение?',
  'section-subtitle' => 'Запишем на&nbsp;консультацию или<br/> экскурсию на&nbsp;наши строящиеся объекты',
  'circle-button-text-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-contacts.svg',
  'circle-button-icon-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-contacts-phone.svg',
  'mobile-button-text' => 'Записаться',
));
?>

<?php
// Section - Map
get_template_part('template-parts/section-map');
?>



<?php get_footer(); ?>