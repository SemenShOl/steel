<?php
/* Template Name: Каталог */

get_header();

$pageData = $GLOBALS['pageData'];
?>

<section class="l-page page-catalog">

    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="page-title-block">
                    <?php if (function_exists('bcn_display')) { 
                        echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".4s">';
                            echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
                        echo '</div>';
                    } ?>

                    <div class="section-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Каталог</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
    <div class="wrapper">
        <div class="row">
            <div class="col-12 col-lg-3">
                <?php get_template_part( 'template-parts/catalog-sidebar'); ?>
            </div>
            <div class="col-12 col-lg-9">
                <div class="catalog-wrapper">
                    <?php if (count($pageData['allData']) > 0) : ?>
                        <div class="catalog-list">
                            <?php
                                foreach ($pageData['allData'] as $key => $item) {
                                    get_template_part( 'template-parts/catalog-list-single', null, array(
                                        'id' => $item['id'],
                                        'name' => $item['name'],
                                        'href' => $item['href'],
                                        'image' => $item['image'],
                                    ) );
                                    // var_dump($item['name']);
                                }
                            ?>
                        </div>
                    <?php else : ?>
                        <p>Ничего не найдено</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

	
</section>

<?php
    // Section - Contacts
    get_template_part('template-parts/section-contacts', null, array(
        'section-number' => '08',
        'section-title' => 'Познакомимся<br> вживую?',
        'section-subtitle' => 'Запишитесь на бесплатную консультацию, проведем экскурсию на наши строящиеся объекты. Вы своими глазами оцените наш подход — сделать выбор станет легче и увереннее!',
    ));

    // if ($args['section-number']) $sectionNumber = $args['section-number'];
    // if ($args['section-title']) $sectionTitle = $args['section-title'];
    // if ($args['section-subtitle']) $sectionSubtitle = $args['section-subtitle'];
    // if ($args['form-title']) $formTitle = $args['form-title'];
?>

<?php
    // Section - Map
    get_template_part('template-parts/section-map');
?>

<?php get_footer(); ?>