<?php
/* Template Name: Производство */

get_header(); 

// $servicesAllArr = array();
$queryServices = new WP_Query(
  array(
      'post_type' => 'production',
      'posts_per_page' => -1,
      'order'   => 'ASC',
  )
);
// if ($queryServices->posts) {
//   foreach ($queryServices->posts as $post) : setup_postdata ($post);
//       array_push($servicesAllArr, $post);
//   endforeach;
// }

?>

<section class="l-page page-services">

  <div class="wrapper">
    <div class="row">
      <div class="col-2">
        <div class="section-number wow fadeIn" data-wow-delay=".2s">
          <p>01</p>
        </div>
      </div>
      <div class="col-10 services-border">
        <div class="services-head">
          <div>
            <h1 class="wow fadeInUp" data-wow-delay=".2s">Производство изделий<br>из металлопроката</h1>
            <?php if (function_exists('bcn_display')) { 
            echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".3s">';
              echo '<div class="breadcrumbs-inner">';
                                  bcn_display();
                                  echo '</div>'; 
              echo '</div>';
            } ?>
          </div>
          <div>
            <p class="font-400-20-150 mb-60-40 wow fadeIn" data-wow-delay=".4s">Наша компания может произвести детали, фасонные части, емкости, резервуары, трубы и&nbsp;многое другое. Мы&nbsp;занимаемся производством любого металлопроката.</p>
            <p class="font-400-20-150 mb-60-40 wow fadeIn" data-wow-delay=".4s">Металлопрокат&nbsp;&mdash; это металлические изделия, которые производят с&nbsp;помощью прокатки заготовки из&nbsp;металла на&nbsp;прокатных станах под определённой температурой.
            </p>
          </div>
        </div>
        <div class="buttons wow fadeIn" data-wow-delay=".5s">
          <button
            class="btn-icon" 
            data-bs-toggle="modal" 
            data-bs-target="#modalCallback" 
            data-modal-title="Скачать прайс-лист" 
            data-modal-button="Скачать" 
          >
          <!-- data-modal-download="<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/homes-catalog-plotnikof-2023.pdf" -->
            <span>Скачать прайс-лист</span>
            <i class="icon icon-pdf"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="services-list">
      <?php
          // echo '123'; 
          $num = 2;
          while ( $queryServices -> have_posts() ) : $queryServices -> the_post();
              get_template_part( 'template-parts/service-item', null, array(
                  'id' => get_the_ID(),
                  'num' => $num
              ));
              $num++;
              
          endwhile;
          wp_reset_postdata();
      ?>
    </div>
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