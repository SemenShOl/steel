<?php
/* Template Name: Галлерея */

$categories = get_the_category();

get_header(); ?>


<section class="section-catalog-valve">
  <div class="nwrapper">
    <div class="ncol-2">
      <h3>Каталог</h3>
      <ul class="product-types">
        <li class="product-type">
          <div class="type-title">
            <h4>Задвижки</h4>
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

      <h1>Задвижки</h1>

      <div class="production-line">
        <div class="product">
          <a href="">
            <img class=""
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/valve-1.jpg">
            <p class="title">Вентили (клапаны)</p>
            <div class="info">
              <p>В наличии</p>
              <p>По запросу</p>
            </div>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class=""
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/valve-2.jpg">
            <p class="title">Вентили (клапаны)</p>
            <div class="none">
              <p class="no">Нет в наличии</p>
            </div>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class=""
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/valve-1.jpg">
            <p class="title">Вентили (клапаны)</p>
            <div class="info">
              <p>В наличии</p>
              <p>По запросу</p>
            </div>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class=""
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/valve-2.jpg">
            <p class="title">Вентили (клапаны)</p>
            <div class="info">
              <p>В наличии</p>
              <p>По запросу</p>
            </div>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class=""
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/valve-1.jpg">
            <p class="title">Вентили (клапаны)</p>
            <div class="info">
              <p>В наличии</p>
              <p>По запросу</p>
            </div>
          </a>
        </div>
        <div class="product">
          <a href="#">
            <img class=""
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/valve-1.jpg">
            <div class="info">
              <p>В наличии</p>
              <p>По запросу</p>
            </div>
          </a>
        </div>
      </div>

      <div class="product-pages">
        <div class="pages">
          <div class="block">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
          </div>
          <div class="block active">
            <p>1</p>
          </div>
          <div class="block">
            <p>2</p>
          </div>
          <div class="block">
            <p>3</p>
          </div>
          <div class="block">
            <p>4</p>
          </div>
          <div class="block pre-last">
            <p>5</p>
          </div>
          <div class="block ">
            <p>...</p>
          </div>
          <div class="block last">
            <p>42</p>
          </div>
          <div class="block ">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
          </div>
        </div>
        <div class="info">Показаны <span>1–20</span> из 740 товаров</div>
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