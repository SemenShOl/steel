<?php
    $id = 0;
    $name = '';
    $href = '#';
    $image = esc_url(get_template_directory_uri()) . '/assets/images/no-photo.jpg';

    if ( $args['id'] ) $id = $args['id']; 
    if ( $args['name'] ) $name = $args['name'];  
    if ( $args['href'] ) $href = $args['href'];  
    if ( $args['image'] ) $image = $args['image'];  
?>

<div class="catalog-list-single" id="catalog-list-single-<?php echo $id; ?>">
    <a class="inner" href="<?php echo home_url( '/' ) . trim($href, '/'); ?>">
        <?php
            $image = esc_url(get_template_directory_uri()) . '/assets/data/catalog-images/'; 
            $image .= preg_replace('/catalog\//', '', trim($href, '/')) . '-1.jpg'; 
        ?>
        <div class="image">
            <img src="<?php echo $image; ?>" alt="">
        </div>
        <div class="text">
            <p class="title"><?php echo $name; ?></p>
            <button class="btn-icon">
                <span>Смотреть все</span>
                <i class="icon icon-plus"></i>
            </button>
        </div>
    </a>
</div>