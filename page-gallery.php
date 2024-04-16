<?php
/* Template Name: Галлерея */

$categories = get_the_category();

get_header(); ?>


<section class="section-catalog">
  <div class="nwrapper">
    <div class="ncol-2">
      <h3>Каталог</h3>
      <ul class="product-types">
        <li class="product-type">
          <div class="type-title">
            <h4>Трубозапорная арматура</h4>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
          </div>

          <nav сlass="certain-product">
            <ul>
              <li>
                <a class="link">
                  <p>Вентили (клапаны)</p>
                </a>
              </li>
              <li>
                <a class="link">
                  <p>Задвижки</p>
                </a>
              </li>
              <li>
                <a class="link">
                  <p>Затворы</p>
                </a>
              </li>
              <li>
                <a class="link">
                  <p>Клапаны обратные</p>
                </a>
              </li>
              <li>
                <a class="link">
                  <p>Краны шаровые под приварку</p>
                </a>
              </li>
              <li>
                <a class="link">
                  <p>Краны шаровые фланцевые, муфтовые</p>
                </a>
              </li>
            </ul>
          </nav>
        </li>
        <li class="product-type">
          <div class="type-title">
            <h4>Трубозапорная арматура</h4>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
          </div>

        </li>
        <li class="product-type">
          <div class="type-title">
            <h4>Трубозапорная арматура</h4>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
          </div>

        </li>
      </ul>
    </div>
    <div class="ncol-10">

      <h1>Трубозапорная арматура</h1>

      <div class="production-line">
        <div class="product">
          <a href="">
            <img class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_1.jpg">
            <p>Вентили (клапаны)</p>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_2.jpg">
            <p>Вентили (клапаны)</p>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_3.jpg">
            <p>Вентили (клапаны)</p>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_4.jpg">
            <p>Вентили (клапаны)</p>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_5.jpg">
            <p>Вентили (клапаны)</p>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_6.jpg">
            <p>Вентили (клапаны)</p>
          </a>
        </div>
      </div>

    </div>
</section>



<section class="l-page page-about-company">

  <?php
  // Section - Contacts
  get_template_part(
    'template-parts/section-contacts',
    null,
    array(
      'section-number' => '08',
    )
  );
  ?>

  <?php
  // Section - Map
  get_template_part('template-parts/section-map');
  ?>
</section>


<?php

get_footer(); ?>