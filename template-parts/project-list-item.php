<?php
$id = $post->ID;
$pricePosition = 'bottom';
$imageLoadType = 'data-src';
$linkTech = '';

if ($args['id']) $id = $args['id'];
if ($args['price-position']) $pricePosition = $args['price-position'];
if ($args['image-load-type']) $imageLoadType = $args['image-load-type'];
if ($args['link_tech']) $linkTech = '?tech=' . $args['link_tech'];
?>

<div class="project-list-item <?php echo ($pricePosition == 'top') ? 'price-top' : ''; ?> wow fadeIn --animation-image" data-wow-delay=".2s">
    <a href="<?php echo get_the_permalink($id) . $linkTech; ?>" class="project-list-item-inner">


        <?php if (count(fw_get_db_post_option($id, 'plotnikoff_homes_images')) > 0) : ?>

            <div class="images-wrap">
                
                <div class="images-hover-change">
                    <div class="list">
                        <?php 
                            foreach (fw_get_db_post_option($id, 'plotnikoff_homes_images') as $key => $img) : 
                            if ($key <= 6) :
                        ?>
                            <div class="line" data-src="<?php echo esc_url($img['image']['url']); ?>" data-id="<?php echo $key; ?>"></div>
                        <?php endif; endforeach; ?>
                    </div>
                    <?php if (count(fw_get_db_post_option($id, 'plotnikoff_homes_images')) > 1) : ?>
                        <div class="dots">
                            <?php
                                foreach (fw_get_db_post_option($id, 'plotnikoff_homes_images') as $key => $img) : 
                                if ($key <= 6) :
                            ?>
                                <div class="dot <?php echo ($key == 0) ? 'is-active' : ''; ?>" data-id="<?php echo $key; ?>"></div>
                            <?php endif; endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php
                        if ($imageLoadType != 'src') {
                            echo '<div class="bg lazy" data-bg="'. fw_get_db_post_option($id, 'plotnikoff_homes_images')[0]['image']['url'] . '"></div>';
                        } else {
                            echo '<div class="bg lazy" style="background-image: url(' . fw_get_db_post_option($id, 'plotnikoff_homes_images')[0]['image']['url'] . ')"></div>';
                        }
                    ?>
                </div>

                <div class="slider">
                    <?php foreach (fw_get_db_post_option($id, 'plotnikoff_homes_images') as $key => $img) {
                        echo '<div class="img"><img class="lazy" data-lazy="' . $img['image']['url'] . '"></div>';
                    } ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="text">
            <h4><?php echo get_the_title($id); ?></h4>
            <div class="props">
                <?php
                if (fw_get_db_post_option($id, 'plotnikoff_homes_price_basic') != '') {
                    echo '<span>' . ((float)fw_get_db_post_option($id, 'plotnikoff_homes_price_basic') / 1000000) . ' млн.₽</span>';
                }
                if ($pricePosition == 'bottom') {
                    echo '<span>' . fw_get_db_post_option($id, 'plotnikoff_homes_area_glob') . ' м²</span>';
                }
                ?>
            </div>
        </div>
    </a>
</div>