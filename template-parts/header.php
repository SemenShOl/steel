<header class="nheader">

    <!-- <div class="wrapper header-desktop">
        
         <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.webp"> 
                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-black.webp"> 
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/n_Blue_logo.png">

            </a>
        </div> -->
    <?php if (has_nav_menu('header-menu')): ?>
        <div class="top-menu-wrap">

            <?php if (count(fw_get_db_settings_option('ul_general_phone_list')) > 0): ?>
                <div class="city-select">
                    <div class="selected"
                        data-phone="<?php echo fw_get_db_settings_option('ul_general_phone_list')[0]['phone']; ?>">
                        <p><?php echo fw_get_db_settings_option('ul_general_phone_list')[0]['city']; ?></p>
                    </div>
                    <div class="list">
                        <ul>
                            <?php foreach (fw_get_db_settings_option('ul_general_phone_list') as $key => $item) {
                                echo '<li data-phone="' . $item['phone'] . '" data-city="' . $item['city'] . '">' . $item['city'] . '</li>';
                            } ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <nav class="top-menu is-hidden">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'main-menu',
                        'menu_id' => '',
                        'depth' => 0,
                        'fallback_cb' => ''
                    )); ?>
            </nav>
        </div>
    <?php endif; ?> 
    <!-- <div class="right-block">

            <div class="phone-whatsapp">
                <a href="https://api.whatsapp.com/send/?phone=79618791171&amp;text=Здравствуйте!" target="_blank"></a>
            </div>

            <?php if (count(fw_get_db_settings_option('ul_general_phone_list')) > 0) {
                echo '<a href="tel:+' . preg_replace('/[^0-9]+/', '', fw_get_db_settings_option('ul_general_phone_list')[0]['phone']) . '" class="link phone change-phone" >';
                echo '<span>' . fw_get_db_settings_option('ul_general_phone_list')[0]['phone'] . '</span>';
                echo '</a>';
            } ?>

            <div
                class="link light"
                data-bs-toggle="modal" 
                data-bs-target="#modalCallback" 
                data-modal-title="Оформить быстрый заказ" 
                data-modal-textarea="message" 
                data-modal-textarea-label="Опишите заказ" 
                data-modal-form-name="Главная - Быстрый заказ"
                data-modal-ya-goal-name="bystr_zakaz"
            >
                <span>Быстрый&nbsp;заказ</span>
            </div>
        </div> -->
    <!-- <div
            class="phone lightning" 
            data-bs-toggle="modal" 
            data-bs-target="#modalCallback" 
            data-modal-title="Оформить быстрый заказ" 
            data-modal-textarea="message" 
            data-modal-textarea-label="Опишите заказ" 
            data-modal-form-name="Главная - Быстрый заказ"
        >
            <div class="phone-link lightning-link">
                <a>Быстрый&nbsp;заказ</a>
            </div>
        </div> 
    </div> -->

    <!-- <div class="wrapper header-mobile">
        <div class="toggle-menu">
            <i></i>
            <i></i>
            <i></i>
        </div>
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-black.webp">
            </a> 
        </div>
        <div class="phones">
            <?php if (count(fw_get_db_settings_option('ul_general_phone_list')) > 0) {
                echo '<a href="tel:+' . preg_replace('/[^0-9]+/', '', fw_get_db_settings_option('ul_general_phone_list')[0]['phone']) . '" class="phone change-phone" >';
                echo '<span style="display:none;">' . fw_get_db_settings_option('ul_general_phone_list')[0]['phone'] . '</span>';
                echo '</a>';
            } ?>
            <a href="https://api.whatsapp.com/send/?phone=79612221645&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%21+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D1%80%D0%BE%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D1%82%D1%8C%D1%81%D1%8F+%D0%BF%D0%BE+%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%83+%D1%81%D1%82%D1%80%D0%BE%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D1%81%D1%82%D0%B2%D0%B0+%D0%B7%D0%B0%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%BD%D0%BE%D0%B3%D0%BE+%D0%B4%D0%BE%D0%BC%D0%B0.+%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE+%D0%BE%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D1%8C%D1%82%D0%B5+%D1%8D%D1%82%D0%BE+%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D0%BD%D0%B8%D0%B5,+%D0%B8+%D0%B4%D0%BE%D0%B6%D0%B4%D0%B8%D1%82%D0%B5%D1%81%D1%8C+%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D0%B0.+%D0%92%D0%B0%D1%88+%D0%BD%D0%BE%D0%BC%D0%B5%D1%80%3A++242516&type=phone_number&app_absent=0" class="whatsapp" target="_blank"></a> 
        </div>
    </div> -->
    <!-- 
    <div class="mobile-menu-wrap">
        <div class="inner-wrap">
            <div class="inner">
                
                <div class="menu-items">
                    <p class="">
                        <a href="<?php echo home_url('/o-kompanii'); ?>">О нас</a>
                        <i></i>
                    </p>
                </div>
                
                <?php if (count($GLOBALS['pageData']['allData']) > 0): ?>   
                    <div class="menu-items">
                        <p class="item-toggle">
                            <a href="<?php echo home_url('/catalog'); ?>">Каталог</a>
                            <i></i>
                        </p>
                        <div class="item-list">
                            <ul>
                                <?php
                                foreach ($GLOBALS['pageData']['allData'] as $key => $item) {
                                    echo '<li>';
                                    echo '<a href="' . home_url($item['href']) . '">' . $item['name'] . '</a>';
                                    echo '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="menu-items">
                    <ul>
                        <li>
                            <a href="<?php echo home_url('/services'); ?>">Услуги</a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/production'); ?>">Производство</a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/oplata-i-dostavka'); ?>">Оплата и доставка</a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/kontakty'); ?>">Контакты</a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo home_url('/gallery'); ?>">Галерея</a>
                        </li> 
                    </ul>
                </div>

                <div class="bottom">
                    <div class="block">
                        <?php if (count(fw_get_db_settings_option('ul_general_phone_list')) > 0): ?>
                            <div class="city-select">
                                <div class="selected">
                                    <p><?php echo fw_get_db_settings_option('ul_general_phone_list')[0]['city']; ?></p>
                                </div>
                                <div class="list">
                                    <ul>
                                        <?php foreach (fw_get_db_settings_option('ul_general_phone_list') as $key => $item) {
                                            echo '<li data-phone="' . $item['phone'] . '">' . $item['city'] . '</li>';
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="email">
                            <a href="mailto:met@gkmtk.pro">met<span>@</span>gkmtk.pro</a>
                        </div>
                        <div class="phone">
                            <?php if (count(fw_get_db_settings_option('ul_general_phone_list')) > 0) {
                                echo '<a href="tel:+' . preg_replace('/[^0-9]+/', '', fw_get_db_settings_option('ul_general_phone_list')[0]['phone']) . '" class="change-phone" >';
                                echo '<span style="display:none;">' . fw_get_db_settings_option('ul_general_phone_list')[0]['phone'] . '</span>';
                                echo '</a>';
                            } ?>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="btn-icon" data-bs-toggle="modal" data-bs-target="#modalCallback" data-modal-title="Оформить быстрый заказ">
                            <span>Быстрый&nbsp;заказ</span>
                            <i class="icon icon-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     -->



    <div class="wrapper">

        <div class="blue-part"></div>
        <div class="white-part"></div>
    </div>
</header>