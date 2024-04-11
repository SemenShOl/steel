<?php 
    $id = $post->ID;
    $imageLoadType = 'data-src';

    $itemFwOptionsPortfolio = fw_extract_only_options(fw()->theme->get_post_options('portfolio'));

    if ( $args['id'] ) $id = $args['id']; 
    if ( $args['image-load-type'] ) $imageLoadType = $args['image-load-type']; 
?>

<div class="portfolio-list-item wow fadeIn --animation-image" data-wow-delay=".4s">
    <a href="<?php echo get_the_permalink($id); ?>" class="project-list-item-inner">
        <?php if (count(fw_get_db_post_option($id, 'plotnikoff_portfolio_images')) > 0) : ?>
            <div class="images-wrap">
                <div class="props">
                    <?php
                        if (fw_get_db_post_option($id, 'plotnikoff_portfolio_area') != '') {
                            echo '<div class="item area"><span>' . fw_get_db_post_option($id, 'plotnikoff_portfolio_area') . ' м²</span><i class="area"></i></div>';
                        } 
                        if (count(fw_get_db_post_option($id, 'plotnikoff_portfolio_tech')) > 0) {
                            echo '<div class="item"><span>';
                            $techText = ''; 

                            foreach (fw_get_db_post_option($id, 'plotnikoff_portfolio_tech') as $key => $item) {
                                if ($key == 'carkas') {
                                    $techText .= 'Каркас ';
                                } else { 
                                    $techText .= $itemFwOptionsPortfolio['plotnikoff_portfolio_tech']['choices'][$key] . ' ';
                                }
                                $techText .= ' + '; 
                            }


                            echo trim($techText, ' + ');
                            echo '</span></div>';
                        } 
                    ?>
                </div>
                <div class="images-hover-change">
                    <div class="list">
                        <?php 
                            foreach (fw_get_db_post_option($id, 'plotnikoff_portfolio_images') as $key => $img) : 
                            if ($key <= 6) :
                        ?>
                            <div class="line" data-src="<?php echo esc_url($img['url']); ?>" data-id="<?php echo $key; ?>"></div>
                        <?php endif; endforeach; ?>
                    </div>
                    <?php if (count(fw_get_db_post_option($id, 'plotnikoff_portfolio_images')) > 1) : ?>
                        <div class="dots">
                            <?php
                                foreach (fw_get_db_post_option($id, 'plotnikoff_portfolio_images') as $key => $img) : 
                                if ($key <= 6) :
                            ?>
                                <div class="dot <?php echo ($key == 0) ? 'is-active' : ''; ?>" data-id="<?php echo $key; ?>"></div>
                            <?php endif; endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php
                        if ($imageLoadType != 'src') {
                            echo '<div class="bg lazy" data-bg="'. fw_get_db_post_option($id, 'plotnikoff_portfolio_images')[0]['url'] . '"></div>';
                        } else {
                            echo '<div class="bg lazy" style="background-image: url(' . fw_get_db_post_option($id, 'plotnikoff_portfolio_images')[0]['url'] . ')"></div>';
                        }
                    ?>
                </div>

                <div class="slider">
                    <?php foreach (fw_get_db_post_option($id, 'plotnikoff_portfolio_images') as $key => $img) {
                        echo '<div class="img"><img class="lazy" data-lazy="' . $img['url'] . '"></div>';
                    } ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="text">
            <?php
                if (get_the_title($id) != '') {
                    echo '<h4>' . get_the_title($id) . '</h4>';
                }
                if (fw_get_db_post_option($id, 'plotnikoff_portfolio_kp_title') != '') {
                    echo '<p>' . fw_get_db_post_option($id, 'plotnikoff_portfolio_kp_title') . '</p>';
                }
            ?>
        </div>
    </a>
</div>