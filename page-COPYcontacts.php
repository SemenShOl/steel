<?php
/* Template Name: Контакты */

get_header(); ?>

<section class="l-page page-contacts">

    <div class="wrapper">
        <div class="row">
            <!-- <div class="col-2">
            </div> -->
            <div class="col-12">
          

                <div class="content-wrap">
                    <div class="content-info">
                        <div class="section-title-desktop">
                            <?php if (function_exists('bcn_display')) { 
                                echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".2s">';
                                    echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
                                echo '</div>';
                            } ?>
                            
                            <div class="section-title">
                                <h1 class="wow fadeInUp" data-wow-delay=".2s"><?php the_title(); ?></h1>
                            </div>
                        </div>
                        <div class="phone wow fadeIn" data-wow-delay=".3s">
                            <a href="tel:+73833832108"><span>+7</span><i>.</i><span>499</span><i>.</i>681<i>.</i>61<i>.</i>53</a>
                        </div>
                        <div class="email wow fadeIn" data-wow-delay=".4s">
                            <a href="mailto:zakaz@plff.ru">met<span>@</span>gkmtk.pro</a>
                        </div>
                        <div class="address wow fadeIn" data-wow-delay=".5s">
                            <p>г. Новосибирск, ул. Советская, д.23, оф.403, 630099</p>
                        </div>
                        <div class="schedule wow fadeIn" data-wow-delay=".6s">
                            <p><strong>Время работы:</strong></p>
                            <p>ПН-ПТ с 9:00 до 18:00,<br> сб-вс - по предварительной записи</p>
                        </div>
                        <div class="buttons wow fadeIn" data-wow-delay=".6s">
                            <button
                                class="btn-icon" 
                                data-bs-toggle="modal" 
                                data-bs-target="#modalCallback"
                                data-modal-title="Закажите звонок"
                                data-modal-ya-goal-name="zayavka"
                            >
                                <span>Заказать звонок</span>
                                <i class="icon icon-phone"></i>
                            </button>
                            <button
                                class="btn-icon" 
                                data-bs-toggle="modal" 
                                data-bs-target="#modalCallback"
                                data-modal-title="Напишите нам"
                                data-modal-textarea="message"
                                data-modal-form-name="Контакты - Написать нам"
                                data-modal-ya-goal-name="zayavka"
                            >
                                <span>Написать нам</span>
                                <i class="icon icon-pen"></i>
                            </button>
                        </div>
                        <div class="bottom-text wow fadeIn" data-wow-delay=".7s">
                            <p><strong>Реквизиты юридического лица:</strong></p>
                            <div>
                                <p>ООО ГК "МТК"</p>
                                <p>ИНН: 5406610038</p>
                                <p>ОГРН: 1165476108225</p>
                                <p>КПП: 540701001</p>
                                <p>ОКПО: 02596422</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-map wow fadeIn" data-wow-delay=".4s">
                        <?php
                            $mapMarkers = '[';
                            $mapMarkers .= '{"coords": [55.026324, 82.917016], "type": "main", "iconSize": [80, 120], "iconOffset": [-40, 120], "iconUrl": "'.  esc_url(get_template_directory_uri()) . '/assets/images/map-marker.webp", "infoWindowText": "г. Новосибирск, ул. Советская, д.23, оф.403"}';
                            $mapMarkers .= ']';
                        ?>

                        <div
                            class="map" 
                            data-map-marker='<?php echo $mapMarkers; ?>'
                            data-map-center="<?php echo '[55.026324, 82.917016]'; ?>" 
                            data-map-zoom="16"
                        ></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

	
</section>

<?php get_footer(); ?>