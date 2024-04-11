<?php
$id = $post->ID;
$hidden = '';

if ($args['id']) $id = $args['id'];
if ($args['hidden'] == true) {$hidden = 'is-hidden';};
// if ($args['image']) $image = $args['image'];
?>

<div class="catalog-special-item wow fadeIn --animation-image <?php echo $hidden; ?> " data-wow-delay=".2s" data-bs-toggle="modal" data-bs-target="#modalCallback" data-modal-title="Узнать стоимость на&nbsp;<?php echo fw_get_db_post_option($id, 'special') ?>" data-modal-button="Отправить">
    <div class="img inner">
        <img class="lazy" data-src="<?php echo get_the_post_thumbnail_url($id, 'full')?>" alt=""/>
    </div>
    <div class="catalog-special-body">
        <p class="catalog-special-title"><?php the_title(); ?></p>
        <button class="btn-icon" data-bs-toggle="modal" data-bs-target="#modalCallback" data-modal-title="Оформить заказ" data-modal-textarea="message" data-modal-form-name="Главная - Оставить заявку">
            <span>Смотреть все</span>
            <i class="icon icon-arrow-right"></i>
        </button>
    </div>
</div>