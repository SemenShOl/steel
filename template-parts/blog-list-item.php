<?php
	$id = $post->ID;
	$imageLoadType = 'data-src';

	if ( $args['id'] ) $id = $args['id']; 
	if ( $args['image-load-type'] ) $imageLoadType = $args['image-load-type']; 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('project-list-item blog-list-item'); ?>>
	<a
		href="<?php esc_attr_e(get_the_permalink($id)); ?>" 
		class="project-list-item-inner"
	>
		<?php if (has_post_thumbnail($id)) {
			echo '<div class="img">';
				if ($imageLoadType != 'src') {
					echo '<img class="lazy" data-src="'. get_the_post_thumbnail_url($id, 'full') . '">';
				} else {
					echo '<img class="lazy" src="'. get_the_post_thumbnail_url($id, 'full') . '">';
				}
			echo '</div>';
		} ?>
			
		<div class="text">
			<p class="blog-card-title">
				<?php esc_html_e(get_the_title($id)); ?>
			</p>
			<?php
				if (!has_excerpt($id)) {
					$postData = get_post($id);

					if ($postData->post_content != '') {
						echo '<p class="blog-card-subtitle">';
							echo wp_trim_words($postData->post_content, 30);
						echo '</p>';
					}
				} else {
					echo '<p class="blog-card-subtitle">';
						echo get_the_excerpt($id);
					echo '</p>';
				}
			?>
			<div class="blog-hide-sm">
				<p class="btn-icon">
					<span>Читать статью</span>
					<i class="icon-arrow-right"></i>
				</p>
			</div>
		</div>
	</a>
</article>

