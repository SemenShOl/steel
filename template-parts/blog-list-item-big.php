<?php
	$id = $post->ID;

	if ( $args['id'] ) $id = $args['id']; 
?>

<div class="blog-grid-head mb-60-30">
    <div class="video-wrap cutoff-corner-right wow fadeIn" data-wow-delay=".2s">
        <?php
            // Локальное видео 
            $poster = '';
            $videoPreview = '';
            $videoLink = '';

            if (fw_get_db_post_option($id, 'plotnikoff_post_video_bg') != ''); {
                $videoPreview = fw_get_db_post_option($id, 'plotnikoff_post_video_bg')['url'];
            }
            if (fw_get_db_post_option($id, 'plotnikoff_post_video_poster') != '') {
                $poster = fw_get_db_post_option($id, 'plotnikoff_post_video_poster')['url'];
            }
            if (fw_get_db_post_option($id, 'plotnikoff_post_video_url') != '') {
                $videoLink = fw_get_db_post_option($id, 'plotnikoff_post_video_url');
            }

            if ($videoLink != '') {
                echo '<a class="inner video-container type-local play-youtube" data-lity href="' . $videoLink . '">';
                    echo '<video class="preview lazy" autoplay="true" muted="true" loop="true" data-poster="' . $poster . '">';
                        echo '<source data-src="' . $videoPreview . '">';
                    echo '</video>';

                    echo '<div class="btn-play white play-video-block" data-video-id="play-video-social">';
                        echo '<i></i><span>Смотреть</span>';
                    echo '</div>';
                echo '</a>';
            } else {
                if (get_the_post_thumbnail_url($id, 'full') != '') {
                    echo '<img class="lazy big-img" data-src="' . get_the_post_thumbnail_url($id, 'full') . '" class="big-img">';
                }
            }
        ?>
    </div>
    <div class="text blog-flex-col-sb wow fadeIn" data-wow-delay=".4s">
        <div>
            <p class="title font-500-24-130 mb-40-20 blog-mw-500">
                <?php esc_html_e(get_the_title($id)); ?>
            </p>
            <?php if (!has_excerpt($id)) {
                echo '<p class="excerpt font-400-18-150 blog-mw-500 mb-40-20">';
                    echo wp_trim_words(get_the_content($id), 30);
                echo '</p>';
            } else {
                echo '<p class="excerpt font-400-18-150 blog-mw-500 mb-40-20">';
                    echo get_the_excerpt($id);
                echo '</p>';
            } ?>
        </div>
        <div>
            <a class="btn-icon" href="<?php esc_attr_e(get_the_permalink($id)); ?>">
                <span>Читать статью</span>
                <i class="icon-arrow-right"></i>
            </a>
        </div>
    </div>
</div>