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
	<div class="wrapper">
		<div class="row">
			<!-- <div class="col-2 blog-hide-xl">
				<?php if (function_exists('bcn_display')) { 
					echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".2s">';
						echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
					echo '</div>';
				} ?>
				
				<div class="portfolio-filter wow fadeIn" data-wow-delay=".4s" data-type-active='[]'>
					<p>Теги:</p>
					<div class="list">
						<?php
							// $tags = get_tags(array(
							// 	'hide_empty' => false
							// ));

							// if (count($tags) > 0) {
							// 	foreach ($tags as $key => $tag) {
							// 		echo '<a class="item" href="' . home_url( '/tag/' ) . $tag->slug . '"><span>#' . $tag->name . '</span></a>';
							// 	}
							// }
						?>
					</div>
				</div>
			</div> -->
			<!-- <div class="col-10 blog-head"> -->


			<div class="col-12 blog-head">
				<!-- <div class="blog-show-xl mb-12"> -->
					<?php //if (function_exists('bcn_display')) { 
						// echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".2s">';
						// 	echo '<div class="breadcrumbs-inner">';
                        //         bcn_display();
                        //         echo '</div>'; 
						// echo '</div>';
					//} ?>
				<!-- </div> -->
				<div class="blog-grid-head mb-blog-title">
					<div class="blog-flex-sb blog-flex-title">

                        <?php
							the_archive_title( '<p class="blog-title wow fadeInUp" data-wow-delay=".2s">', '</p>' ); 
						?>
                        
						<!-- <div class="social-networks-list">
							<div class="blog-show-md blog-yt-mobile mb-10 wow fadeIn" data-wow-delay=".4s">
								<a class="btn-icon" href="https://www.youtube.com/@PlotnikoFF54" target="_blank">
									<span>Перейти на youtube-канал</span>
									<i class="icon-arrow-right"></i>
								</a>
							</div>
							<ul class="wow fadeIn" data-wow-delay=".6s">
								<li class="blog-hide-md">
									<a href="https://www.youtube.com/@PlotnikoFF54" class="long" target="_blank">
										<div class="blog-yt">
											<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M22.0694 6.94954C21.9492 6.5063 21.7152 6.10223 21.3905 5.7775C21.0658 5.45277 20.6617 5.21869 20.2185 5.09854C18.5746 4.66504 12.0021 4.66504 12.0021 4.66504C12.0021 4.66504 5.42963 4.66504 3.78576 5.09854C2.88583 5.34004 2.17788 6.04954 1.9349 6.94954C1.50293 8.59204 1.50293 12 1.50293 12C1.50293 12 1.50293 15.4245 1.9349 17.0505C2.17788 17.9505 2.88732 18.66 3.78576 18.9015C5.42963 19.335 12.0021 19.335 12.0021 19.335C12.0021 19.335 18.5746 19.335 20.2185 18.9015C20.6617 18.7814 21.0658 18.5473 21.3905 18.2226C21.7152 17.8979 21.9492 17.4938 22.0694 17.0505C22.5013 15.408 22.5013 12 22.5013 12C22.5013 12 22.5013 8.59204 22.0694 6.94954Z" fill="#currentColor" />
												<path d="M9.89258 15.1645L15.3582 12.0175L9.89258 8.85254V15.1645Z" fill="#currentColor" />
											</svg>
										</div>
										<p>Перейти на&nbsp;youtube-канал</p>
									</a>
								</li>
								<li class="blog-show-1450-xl blog-show-1150">
									<a href="https://t.me/plotnikoff_novosib" class="telegram" target="_blank">
										<div class="popup">
											<p>Telegram</p>
										</div>
									</a>
								</li>
								<li class="blog-show-1450-xl blog-show-1150">
									<a href="https://api.whatsapp.com/send/?phone=79618791171&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%21+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D1%80%D0%BE%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D1%82%D1%8C%D1%81%D1%8F+%D0%BF%D0%BE+%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%83+%D1%81%D1%82%D1%80%D0%BE%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D1%81%D1%82%D0%B2%D0%B0+%D0%B7%D0%B0%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%BD%D0%BE%D0%B3%D0%BE+%D0%B4%D0%BE%D0%BC%D0%B0.+%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE+%D0%BE%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D1%8C%D1%82%D0%B5+%D1%8D%D1%82%D0%BE+%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D0%BD%D0%B8%D0%B5,+%D0%B8+%D0%B4%D0%BE%D0%B6%D0%B4%D0%B8%D1%82%D0%B5%D1%81%D1%8C+%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D0%B0.+%D0%92%D0%B0%D1%88+%D0%BD%D0%BE%D0%BC%D0%B5%D1%80%3A++242516&type=phone_number&app_absent=0" class="whatsapp" target="_blank">
										<div class="popup">
											<p>WhatsApp</p>
										</div>
									</a>
								</li>
								<li class="blog-show-1450-xl blog-show-1150">
									<a href="https://vk.com/plotnikoff_pw" class="vk" target="_blank">
										<div class="popup">
											<p>Вконтакте</p>
										</div>
									</a>
								</li>
							</ul>
						</div> -->
					</div>
					<!-- <div class="blog-hide-1450-xl blog-hide-1150 wow fadeIn" data-wow-delay=".4s">
						<div class="social-networks-list">
							<ul>
								<li>
									<a href="https://t.me/plotnikoff_novosib" class="telegram" target="_blank">
										<div class="popup">
											<p>Telegram</p>
										</div>
									</a>
								</li>
								<li>
									<a href="https://api.whatsapp.com/send/?phone=79618791171&text=Здравствуйте!" class="whatsapp" target="_blank">
										<div class="popup">
											<p>WhatsApp</p>
										</div>
									</a>
								</li>
								<li>
									<a href="https://vk.com/plotnikoff_pw" class="vk" target="_blank">
										<div class="popup">
											<p>Вконтакте</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div> -->
				</div>

				<!-- Закреплённый пост -->
				<?php if (have_posts()) : 
					while (have_posts()) : the_post(); if (is_sticky()) : 
						get_template_part('template-parts/blog', 'list-item-big');
					endif; endwhile;
				endif; ?>

				<div class="portfolio-filter portfolio-filter-mobile mb-40 wow fadeIn" data-wow-delay=".4s" data-type-active='[]'>
					<p>Теги:</p>
					<div class="list">
						<?php
							$tags = get_tags(array(
								'hide_empty' => false
							));

							if (count($tags) > 0) {
								foreach ($tags as $key => $tag) {
									echo '<a class="item" href="' . home_url( '/tag/' ) . $tag->slug . '"><span>#' . $tag->name . '</span></a>';
								}
							}
						?>
					</div>
				</div>

				<section class="section-blog-list wow fadeIn" data-wow-delay=".4s">
					<?php if (have_posts()) : ?>
						<div class="project-list">
							<div class="list">
								<?php while (have_posts()) : the_post();
									if (!is_sticky()) {
										get_template_part('template-parts/blog', 'list-item');
									}
								endwhile; ?>
							</div>
						</div>
					<?php endif; ?>


					<?php
						global $wp_query;
 
						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$max_pages = $wp_query->max_num_pages;
					
						if ($paged < $max_pages) : 
					?>
						<script>
							var blog_true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
							var blog_current_page = <?php echo $paged; ?>;
							var blog_max_pages = '<?php echo $wp_query->max_num_pages; ?>';
						</script>
						<div class="show-more wow fadeIn" data-wow-delay=".2s">
							<div class="link">
								<span>Показать ещё</span>
							</div>
						</div>
					<?php endif; ?>
				</section>
			</div>
		</div>
	</div>
</section>

<?php
	// Section - Contacts
	get_template_part( 'template-parts/section-contacts', null, array( 
		'section-number' => '02',
		'section-title' => 'Подпишитесь<br> на&nbsp;наши новости',
		'section-subtitle' => 'Подпишитесь на&nbsp;наш telegram-канал и&nbsp;получайте актуальную информацию о&nbsp;загородном домостроении первым',
		'circle-button-text-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-blog-text.svg',
        'circle-button-icon-img' => esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-blog-icon.svg',
		'section-link' => 'https://t.me/plotnikoff_novosib',
		'mobile-button-text' => 'Получать уведомления',
	));
?>

<?php
	// Section - Map
	get_template_part( 'template-parts/section-map' );
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
                            <?php if ( have_posts() ) : ?>
                                <?php
                                    while ( have_posts() ) : the_post();
                                        get_template_part( 'template-parts/content-list-item' );
                                    endwhile;
                                ?>
                            <?php
                                else :
                                    get_template_part( 'template-parts/content', 'none' );
                                endif;
                            ?>
                        </div>

                        <?php the_posts_pagination(); ?>
                    </div>

                    <?php if ( $has_sidebar ) : ?>
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


