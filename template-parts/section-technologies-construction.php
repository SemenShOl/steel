<?php
$sectionNumber = '01';
$sectionNumberText = 'Наша<br> продукция';
$sectionTitle = '<span class="wow fadeInUp" data-wow-delay=".2s">Каталог продукции</span>';
$sectionTopButton = '';
// $sectionTopButton = '<div class="buttons wow fadeIn" data-wow-delay=".5s"><a class="btn-icon" data-bs-toggle="modal" data-bs-target="#modalCallback" data-modal-button="Скачать" data-modal-download="' . esc_url(get_template_directory_uri()) . '/assets/docs/homes-catalog-plotnikof-2023.pdf" data-modal-title="Скачать каталог" data-modal-form-name="Главная - Скачать каталог"><span>Скачать каталог</span><i class="icon icon-pdf"></i></a></div>';
$sectionOpenItemModal = false;

if ($args['section-number'])
    $sectionNumber = $args['section-number'];
if ($args['section-number-text'])
    $sectionNumberText = $args['section-number-text'];
if ($args['section-top-button'])
    ('<div class="buttons wow fadeIn" data-wow-delay=".5s">' . $args['section-top-button'] . '</div>');
if ($args['section-title'])
    $sectionTitle = $args['section-title'];
if ($args['section-open-item-modal'])
    $sectionOpenItemModal = $args['section-open-item-modal'];

?>

<section class="section-technologies-construction">
    <div class="nwrapper">
        <div class="row">
            <div class="ncol-2">
                <div class="section-number wow fadeIn" data-wow-delay=".2s">
                    <!-- <p><?php echo $sectionNumber; ?></p> -->
                    <p class="section-number">01</p>
                    <p>Трубозапорная арматура</p>
                    <p>Детали трубопроводов</p>
                    <p>Сортовой прокат</p>
                    <p>Листовой прокат</p>
                    <p>Метизная продукция</p>
                    <p>Нержавеющая сталь</p>
                    <p>Цветной металлопрокат</p>
                </div>
            </div>
            <div class="ncol-10">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s"><?php echo $sectionTitle; ?></h2>

                    <?php echo $sectionTopButton; ?>
                </div>

                <?php

                if (count($GLOBALS['pageData']['allData']) > 0) {
                    echo '<div class="technologies-list">';
                    foreach ($GLOBALS['pageData']['allData'] as $key => $item) {
                        echo '<div id="' . $item['id'] . '" class="item wow fadeIn --animation-image" data-wow-delay=".2s">';
                        echo '<a href="' . home_url($item['href']) . '" class="link-wrap">';
                        echo '<div class="img inner">';
                        $image = esc_url(get_template_directory_uri()) . '/assets/data/' . $item['image'];
                        echo '<img class="lazy" data-src="' . $image . '" alt="">';
                        echo '</div>';
                        echo '<p>' . $item['name'] . '</p>';
                        echo '</a>';
                        echo '</div>';
                    }
                    echo '</div>';
                }

                ?>

                <div class="buttons-mobile">
                    <?php echo $sectionTopButton; ?>
                </div>
            </div>
        </div>
    </div>
</section>