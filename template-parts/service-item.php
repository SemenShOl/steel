<?php 
    $id = get_the_ID();
?>


<div class="row">
  <div class="col-2">
    <div class="section-number wow fadeIn" data-wow-delay=".2s">
      <p>
        <?php 
        if ($args['num'] < 10) {
          echo '0' . $args['num'];
        } else {
          echo $args['num'];
        }
        ?>
      </p>
    </div>
  </div>
  <div class="col-10">
      <div class="service-item">
        <div class="">
          <h2>
          <?php 
            echo get_the_title($id);
          ?>
          </h2>
          <div class="service-image-mobile">
            <div class="img inner">
              <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url($id, 'full'); ?>" alt="">
            </div>
          </div>
          <div class="content">
          <?php 
            echo the_content();
          ?>
          </div>
          <button class="btn-icon" data-bs-toggle="modal" data-bs-target="#modalCallback" data-modal-title="Узнать стоимость на&nbsp;<?php echo fw_get_db_post_option($post->ID, 'service-formated') ?>" data-modal-button="Отправить">
            <span>Узнать стоимость</span>
            <i class="icon icon-arrow-right"></i>
          </button>
        </div>
        <div class="service-image-pc img inner">
          <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url($id, 'full'); ?>" alt="">
        </div>
      </div>
  </div>
</div>