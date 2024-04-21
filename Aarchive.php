<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package default-theme
 */

$categories = get_the_category();


get_header(); ?>


<section class="l-page page-blog page-post-archive">
	<div class="nwrapper">
		<div class="ncol-2"></div>
		<div class="ncol-10"></div>

	</div>
</section>

<?php
// Section - Contacts
get_template_part('template-parts/section-contacts', null, array(
	'section-number' => '02',
	'section-title' => 'Подпишитесь<br> на&nbsp;наши новости',
	'section-subtitle' => 'Подпишитесь на&nbsp;наш telegram-канал и&nbsp;получайте актуальную информацию о&nbsp;загородном домостроении первым',
	'circle-button-text-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-blog-text.svg',
	'circle-button-icon-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-blog-icon.svg',
	'section-link' => 'https://t.me/plotnikoff_novosib',
	'mobile-button-text' => 'Получать уведомления',
)
);
?>

<?php
// Section - Map
get_template_part('template-parts/section-map');
?>



<!-- 
<section class="l-page page-archive">
	<div class="container">
		<div class="row" style="margin-bottom: 100px;">
			<div class="col-md-12">
				<div class="page-header">
					<h1 class="page-title"><?php esc_html_e(get_cat_name($categories[0]->cat_ID)); ?></h1>
				</div>
				<div class="page-content">
					<div class="post-list">
						<div class="list">
							<?php if (have_posts()): ?>
								<?php
								while (have_posts()):
									the_post();
									get_template_part('template-parts/content-list-item');
								endwhile;
								?>
							<?php
							else:
								get_template_part('template-parts/content', 'none');
							endif;
							?>
						</div>

						<?php the_posts_pagination(); ?>
					</div>

					<?php if ($has_sidebar): ?>
						<div class="blog-sidebar">
							<?php get_sidebar(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section> -->

<?php get_footer(); ?>