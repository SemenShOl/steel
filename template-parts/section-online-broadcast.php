<?php 
    $sectionNumber = '01';
    $sectionNumberText = 'Прямая<br> трансляция со<br> стро&shy;ительных<br> площадок';
    $sectionTitle = 'Строим прямо сейчас';

    if ( $args['section-number'] ) $sectionNumber = $args['section-number'];
    if ( $args['section-number-text'] ) $sectionNumberText = $args['section-number-text'];
    if ( $args['section-title'] ) $sectionTitle = $args['section-title'];


    $broadcastArr = array();

    if (get_page_by_path('home')->ID) {
        $broadcastArr = fw_get_db_post_option(get_page_by_path('home')->ID, 'plotnikoff_home_online_broadcast_list');
        if (fw_get_db_post_option(get_page_by_path('home')->ID, 'plotnikoff_home_online_broadcast_list')) {
            $broadcastArr = fw_get_db_post_option(get_page_by_path('home')->ID, 'plotnikoff_home_online_broadcast_list');
        }
    }
  
    if (count($broadcastArr) > 0) :
?>


<section class="section-online-broadcast">
    <div class="wrapper">
        <div class="row">
            <div class="col-2">
                <div class="section-number wow fadeIn" data-wow-delay=".2s">
                    <p><?php echo $sectionNumber; ?></p>
                    <p><?php echo $sectionNumberText; ?></p>
                </div>
            </div>
            <div class="col-10">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $sectionTitle; ?></h2>
                    <div class="custom-slick-arrows wow fadeIn" data-wow-delay=".4s">
                    </div>
                </div>
                <div class="broadcast-list-wrap cutoff-corner-right">
                    <div class="broadcast-list-slider">
                        <?php foreach ($broadcastArr as $key => $item) : ?>
                            <div class="item wow fadeIn --animation-image" data-wow-delay=".2s">
                                <a class="inner" data-lity href="<?php echo $item['link']; ?>">
                                    <div class="video inner">
                                        <?php if ($item['image']) {
                                            echo '<img class="bg" data-lazy="' . $item['image']['url'] .' ">';
                                        } ?>
                                        <div class="actions">
                                            <button class="btn-icon white">
                                                <span>Прямой эфир</span>
                                                <i class="icon icon-online"></i>
                                            </button>
                                            <div class="fullscreen"></div>
                                        </div>
                                    </div>
                                    <p><?php echo $item['title']; ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>