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

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<section class="l-page page-blog page-blog-single">
    <div class="wrapper">
        <div class="row">
			<!-- <div class="col-2 blog-hide-xl">
				
			</div> -->

			<div class="col-12">
				<?php if (function_exists('bcn_display')) { 
					echo '<div class="breadcrumbs wow fadeIn" data-wow-delay=".2s">';
						echo '<div class="breadcrumbs-inner">';
                                bcn_display();
                                echo '</div>'; 
					echo '</div>';
				} ?> 
			</div>

			<div class="col-12 blog-single">
				<div class="blog-content-wrap">
					
					<div class="blog-single-head">
						<div class="blog-single-head-left wow fadeIn" data-wow-delay=".2s">
							<?php if (get_the_tags(get_the_ID()) && count(get_the_tags(get_the_ID())) > 0) {
								foreach (get_the_tags(get_the_ID()) as $key => $tag) {
									echo '<a class="blog-single-tag" href="' . home_url( '/tag/' ) . $tag->slug . '">#' . $tag->name . '</a>';
								}
							} ?>
							<p class="blog-single-date blog-hide-md">
								<?php echo get_the_date(); ?> 
							</p>
						</div>
						<div class="blog-single-head-right blog-hide-md btn-post-share wow fadeIn" data-wow-delay=".4s">
							<div class="blog-share">
								<p class="blog-single-lable">Поделиться</p>
								<div class="blog-share-btn">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M16 6.95637L8.72727 0V4.17193C3.90982 4.17193 0 7.91101 0 12.5212V16H0.142578C1.11276 12.4015 4.51927 9.73811 8.58327 9.73811H8.7287V13.9128L16 6.95637Z" fill="#currentColor" />
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="blog-content wow fadeIn" data-wow-delay=".2s">
						<h1><?php the_title(); ?></h1>

						<?php
							// Видео 
							if (fw_get_db_post_option($post->ID, 'plotnikoff_post_video_url') != '') {
								
								$poster = esc_url(get_template_directory_uri()) . '/assets/images/faq-interview-poster.jpg';
								$videoPreview = esc_url(get_template_directory_uri()) . '/assets/videos/home-video-2-preview.webm';
								$videoLink = 'https://www.youtube.com/watch?v=j7advJMPQv4';

								echo '<a class="video-container type-local play-youtube" data-lity href="' . $videoLink . '">';
									if (fw_get_db_post_option($post->ID, 'plotnikoff_post_video_poster') != '') {
										echo '<img src="' . fw_get_db_post_option($post->ID, 'plotnikoff_post_video_poster')['url'] . '">';
									}
								// echo '<video class="preview lazy" autoplay="true" muted="true" loop="true" data-poster="' . $poster . '">';
								// echo '<source data-src="' . $videoPreview . '">';
								// echo '</video>';

								echo '<div class="btn-play white">';
								echo '<i></i><span>Смотреть</span>';
								echo '</div>';
								echo '</a>';
							}
						?>

                        <?php the_content(); ?>

						<div class="clearfix"></div>
					</div>

					<div class="blog-flex-sb-aic blog-content-footer wow fadeIn" data-wow-delay=".2s">
						<p class="blog-single-date"><?php echo get_the_date(); ?> </p>
						<div class="blog-share btn-post-share">
							<p class="blog-single-lable">Поделиться</p>
							<div class="blog-share-btn">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M16 6.95637L8.72727 0V4.17193C3.90982 4.17193 0 7.91101 0 12.5212V16H0.142578C1.11276 12.4015 4.51927 9.73811 8.58327 9.73811H8.7287V13.9128L16 6.95637Z" fill="#currentColor" />
								</svg>
							</div>
						</div>
					</div>
					<div class="blog-social wow fadeIn" data-wow-delay=".4s">
						<p>Таже сдедите за нашим блогом в соц сетях</p>
						<div class="social-networks-list">
							<ul>
								<li>
									<a href="https://t.me/plotnikoff_novosib" class="" target="_blank">
										<svg width="28" height="23" viewBox="0 0 28 23" xmlns="http://www.w3.org/2000/svg">
											<path d="M27.0494 2.77782L23.0884 21.4575C22.7894 22.7756 22.0103 23.1038 20.9031 22.4831L14.8675 18.0356L11.9556 20.8369C11.6331 21.1594 11.3641 21.4284 10.7425 21.4284L11.1766 15.2822L22.3619 5.175C22.8484 4.74188 22.2559 4.50094 21.6062 4.935L7.77811 13.6425L1.82499 11.7788C0.530301 11.3747 0.506863 10.4841 2.09499 9.8625L25.3797 0.891566C26.4578 0.487503 27.4009 1.13063 27.0494 2.77782Z" />
										</svg>
									</a>
								</li>
								<li>
									<a href="https://vk.com/plotnikoff_pw" class="" target="_blank">
										<svg width="30" height="18" viewBox="0 0 30 18" xmlns="http://www.w3.org/2000/svg">
											<path d="M26.7029 12.4473C26.7029 12.4473 29.1284 14.8428 29.7284 15.9513C29.7401 15.9673 29.7492 15.985 29.7554 16.0038C29.9999 16.4133 30.0599 16.7343 29.9399 16.9713C29.7374 17.3628 29.0519 17.5593 28.8194 17.5758H24.5324C24.2339 17.5758 23.6129 17.4978 22.8569 16.9758C22.2794 16.5723 21.7049 15.9078 21.1484 15.2583C20.3174 14.2938 19.5989 13.4568 18.8714 13.4568C18.7795 13.4566 18.6882 13.4718 18.6014 13.5018C18.0509 13.6758 17.3519 14.4603 17.3519 16.5498C17.3519 17.2038 16.8359 17.5758 16.4744 17.5758H14.5109C13.8419 17.5758 10.3589 17.3418 7.27039 14.0853C3.48589 10.0983 0.0868909 2.1003 0.0538909 2.0298C-0.157609 1.5123 0.286391 1.2303 0.766391 1.2303H5.09539C5.67589 1.2303 5.86489 1.5813 5.99689 1.8963C6.14989 2.2578 6.71689 3.7038 7.64689 5.3283C9.15289 7.9713 10.0784 9.0468 10.8179 9.0468C10.9568 9.04721 11.0934 9.011 11.2139 8.9418C12.1799 8.4108 11.9999 4.9608 11.9549 4.2498C11.9549 4.1118 11.9534 2.7093 11.4584 2.0313C11.1044 1.5453 10.5014 1.3563 10.1369 1.2873C10.2344 1.1463 10.4414 0.930304 10.7069 0.802804C11.3684 0.472804 12.5639 0.424805 13.7504 0.424805H14.4089C15.6959 0.442805 16.0289 0.525305 16.4969 0.643805C17.4389 0.868805 17.4569 1.4793 17.3744 3.5583C17.3504 4.1523 17.3249 4.8213 17.3249 5.6088C17.3249 5.7768 17.3174 5.9643 17.3174 6.1548C17.2889 7.2213 17.2514 8.4228 18.0044 8.9163C18.1021 8.97714 18.2148 9.00936 18.3299 9.0093C18.5909 9.0093 19.3724 9.0093 21.4919 5.3718C22.4219 3.7653 23.1419 1.8708 23.1914 1.7283C23.2334 1.6488 23.3594 1.4253 23.5124 1.3353C23.6212 1.2774 23.7431 1.24847 23.8664 1.2513H28.9589C29.5139 1.2513 29.8904 1.3353 29.9639 1.5453C30.0869 1.8858 29.9399 2.9253 27.6149 6.0693C27.2234 6.5928 26.8799 7.0458 26.5784 7.4418C24.4709 10.2078 24.4709 10.3473 26.7029 12.4473Z" />
										</svg>

									</a>
								</li>
								<li>
									<a href="https://api.whatsapp.com/send/?phone=79618791171&text=Здравствуйте!" class="" target="_blank">
										<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
											<path d="M0.505017 25.5L2.19502 19.29C1.08144 17.3811 0.496387 15.21 0.500017 13C0.500017 6.09625 6.09627 0.5 13 0.5C19.9038 0.5 25.5 6.09625 25.5 13C25.5 19.9037 19.9038 25.5 13 25.5C10.791 25.5036 8.62084 24.919 6.71252 23.8063L0.505017 25.5ZM8.48877 7.135C8.32734 7.14502 8.16961 7.18754 8.02502 7.26C7.88942 7.33679 7.76564 7.43278 7.65752 7.545C7.50752 7.68625 7.42252 7.80875 7.33127 7.9275C6.86928 8.52874 6.62078 9.26677 6.62502 10.025C6.62752 10.6375 6.78752 11.2337 7.03752 11.7912C7.54877 12.9188 8.39002 14.1125 9.50127 15.2187C9.76877 15.485 10.03 15.7525 10.3113 16.0013C11.6905 17.2156 13.3341 18.0913 15.1113 18.5588L15.8225 18.6675C16.0538 18.68 16.285 18.6625 16.5175 18.6512C16.8816 18.6325 17.237 18.5339 17.5588 18.3625C17.7663 18.2525 17.8638 18.1975 18.0375 18.0875C18.0375 18.0875 18.0913 18.0525 18.1938 17.975C18.3625 17.85 18.4663 17.7613 18.6063 17.615C18.71 17.5075 18.8 17.3813 18.8688 17.2375C18.9663 17.0338 19.0638 16.645 19.1038 16.3212C19.1338 16.0737 19.125 15.9388 19.1213 15.855C19.1163 15.7213 19.005 15.5825 18.8838 15.5238L18.1563 15.1975C18.1563 15.1975 17.0688 14.7238 16.405 14.4213C16.335 14.3907 16.26 14.3734 16.1838 14.37C16.0982 14.3612 16.0118 14.3708 15.9303 14.3982C15.8488 14.4256 15.7741 14.4701 15.7113 14.5287V14.5262C15.705 14.5262 15.6213 14.5975 14.7175 15.6925C14.6656 15.7622 14.5942 15.8149 14.5123 15.8438C14.4303 15.8728 14.3417 15.8767 14.2575 15.855C14.1761 15.8332 14.0963 15.8057 14.0188 15.7725C13.8638 15.7075 13.81 15.6825 13.7038 15.6363L13.6975 15.6338C12.9824 15.3215 12.3203 14.8998 11.735 14.3838C11.5775 14.2463 11.4313 14.0962 11.2813 13.9512C10.7895 13.4803 10.3609 12.9475 10.0063 12.3663L9.93252 12.2475C9.87954 12.1677 9.83672 12.0816 9.80502 11.9912C9.75752 11.8075 9.88127 11.66 9.88127 11.66C9.88127 11.66 10.185 11.3275 10.3263 11.1475C10.4439 10.9979 10.5536 10.8423 10.655 10.6813C10.8025 10.4438 10.8488 10.2 10.7713 10.0113C10.4213 9.15625 10.0588 8.305 9.68627 7.46C9.61252 7.2925 9.39377 7.1725 9.19502 7.14875C9.12752 7.14125 9.06002 7.13375 8.99252 7.12875C8.82465 7.12041 8.65643 7.12333 8.48877 7.135Z" />
										</svg>
									</a>
								</li>
								<li>
									<a href="https://dzen.ru/plotnikoff" class="" target="_blank">
										<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.4483 11.9464C24.4505 11.9464 24.4521 11.9464 24.4543 11.9464C24.6065 11.9464 24.7517 11.8825 24.8549 11.7706C24.9596 11.6571 25.0115 11.5049 24.9978 11.351C24.4499 5.32406 19.6786 0.550799 13.6515 0.00175879C13.4987 -0.0102481 13.3448 0.0394167 13.2313 0.144749C13.1178 0.249536 13.0545 0.397439 13.0561 0.55189C13.1511 8.56154 14.2076 11.8345 24.4483 11.9464ZM24.4483 13.0532C14.2076 13.1651 13.1516 16.438 13.0566 24.4477C13.055 24.6021 13.1183 24.75 13.2318 24.8548C13.3333 24.9482 13.4659 25 13.6024 25C13.6187 25 13.6357 24.9995 13.652 24.9978C19.6791 24.4488 24.4505 19.6761 24.9978 13.6486C25.0115 13.4947 24.9602 13.3425 24.8549 13.2289C24.7495 13.1154 24.6027 13.0592 24.4483 13.0532ZM11.3119 0.00448768C5.30395 0.569355 0.54788 5.34153 0.00269187 11.352C-0.0109515 11.5059 0.0403475 11.6582 0.145674 11.7717C0.248818 11.8836 0.394529 11.9469 0.546243 11.9469C0.548426 11.9469 0.550608 11.9469 0.552791 11.9469C10.7596 11.8296 11.8135 8.55827 11.9095 0.554073C11.9111 0.399622 11.8473 0.251174 11.7338 0.146387C11.6192 0.0415997 11.4658 -0.00970222 11.3119 0.00448768ZM0.552246 13.0526C0.382523 13.0335 0.249364 13.1143 0.145128 13.2278C0.0403476 13.3414 -0.0114972 13.4936 0.00214617 13.6475C0.547334 19.658 5.30395 24.4302 11.3119 24.9951C11.3288 24.9967 11.3463 24.9973 11.3632 24.9973C11.4997 24.9973 11.6317 24.946 11.7332 24.8526C11.8467 24.7479 11.9106 24.5994 11.909 24.445C11.8129 16.4413 10.7596 13.17 0.552246 13.0526Z" />
										</svg>

									</a>
								</li>
								<li>
									<a href="https://www.youtube.com/@PlotnikoFF54" class="" target="_blank">
										<svg width="32" height="24" viewBox="0 0 32 24" xmlns="http://www.w3.org/2000/svg">
											<path d="M31.102 4.42382C30.9218 3.75896 30.5707 3.15285 30.0836 2.66576C29.5965 2.17866 28.9904 1.82755 28.3255 1.64732C25.8595 0.99707 16 0.99707 16 0.99707C16 0.99707 6.1405 0.99707 3.6745 1.64732C2.3245 2.00957 1.2625 3.07382 0.898 4.42382C0.25 6.88757 0.25 11.9996 0.25 11.9996C0.25 11.9996 0.25 17.1363 0.898 19.5753C1.2625 20.9253 2.32675 21.9896 3.6745 22.3518C6.1405 23.0021 16 23.0021 16 23.0021C16 23.0021 25.8595 23.0021 28.3255 22.3518C28.9904 22.1716 29.5965 21.8205 30.0836 21.3334C30.5707 20.8463 30.9218 20.2402 31.102 19.5753C31.75 17.1116 31.75 11.9996 31.75 11.9996C31.75 11.9996 31.75 6.88757 31.102 4.42382Z" fill="#343434" />
											<path d="M12.834 16.7473L21.033 12.0268L12.834 7.2793V16.7473Z" />
										</svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="blog-hide-xxl">
					
					<div class="blog-owner wow fadeIn" data-wow-delay=".4s">
						<div class="img">
							<?php
								$src = get_template_directory_uri() . '/assets/images/blog/blog-1.webp';
								if (fw_get_db_post_option($post->ID, 'plotnikoff_post_author_img') != '') {
									$src = fw_get_db_post_option($post->ID, 'plotnikoff_post_author_img')['url'];
								}
								echo '<img class="lazy" data-src="' . $src . '">';
							?>
						</div>
						<div class="blog-owner-lable">
							<?php 
								if (fw_get_db_post_option($post->ID, 'plotnikoff_post_author_name') != '') {
									echo '<p>' . fw_get_db_post_option($post->ID, 'plotnikoff_post_author_name') . '</p>';
								}  else {
									echo '<p>Владимир Бессонов</p>';
								}

								if (fw_get_db_post_option($post->ID, 'plotnikoff_post_author_position') != '') {
									echo '<p>' . fw_get_db_post_option($post->ID, 'plotnikoff_post_author_position') . '</p>';
								}  else {
									echo '<p>Основатель компании</p>';
								}
							?>
						</div>
					</div>
					

					<div class="blog-sales wow fadeIn" data-wow-delay=".5s">
						<div class="blog-sales-title-wrap">
							<?php
								if (fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_title') != '' && 
									fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_subtitle') != '') {
									echo '<p class="blog-sales-title">' . fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_title') . '</p>';
									echo '<p class="blog-sales-subtitle">' . fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_subtitle') . '</p>';
								} else {
									// echo '<p class="blog-sales-title">Скидка&nbsp;5%</p>';
									// echo '<p class="blog-sales-subtitle">На&nbsp;проекты в&nbsp;стиле &laquo;Барнхаус&raquo; до&nbsp;конца мая 2023г.</p>';
									echo '<p class="blog-sales-subtitle">Стоимость проекта дома входит в стоимость строительста</p>';
								}
							?>
						</div>
						<div class="buttons">
						
							<?php
								// Открытие модального окна
								if (fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_modal_open') != '') {
									echo '<button class="btn-icon" data-bs-toggle="modal" data-bs-target="#' . fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_modal_open') . '">';
										echo '<span>' . (fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_btn_text') != '' ? fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_btn_text') : 'Узнать подробнее') . '</span>';
										echo '<i class="icon-arrow-right"></i>';
									echo '</button>';
								} 

								// Ссылка
								if (fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_link') != '') {
									echo '<a class="btn-icon" href="' . fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_link') . '">';
										echo '<span>' . (fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_btn_text') != '' ? fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_btn_text') : 'Узнать подробнее') . '</span>';
										echo '<i class="icon-arrow-right"></i>';
									echo '</a>';
								} 
							?> 
						</div>
						
						<?php if (fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_bg') != '') : ?> 
							<img class="blog-sales-bg lazy" data-src="<?php echo fw_get_db_post_option($post->ID, 'plotnikoff_post_sidebar_bg')['url']; ?>">
						<?php else : ?>
							<div class="blog-sales-deco-1">
								<div class="img">
									<img class="lazy" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog/blog-2.webp">
								</div>
							</div>
							<div class="blog-sales-deco-2">
								<img class="text lazy animation-spin entered loaded" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog/blog-3.svg" alt="" data-ll-status=" loaded" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog/blog-3.svg">
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
    </div>

	<section class="similar-projects wow fadeIn" data-wow-delay=".3s">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Другие статьи</h2>
                        <div class="custom-slick-arrows">
                        </div>
                    </div>

                    <section class="section-house-projects section-blog-list">
                        <?php
                        $queryPost = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'posts_per_page' => 6,
                                'order' => 'ASC',
                                'orderby' => 'rand',
                                'post__not_in' => array($post->ID),
                            )
                        );
                        if ($queryPost->posts) :
                        ?>
                            <div class="project-list">
                                <div class="list">
                                    <?php
                                    foreach ($queryPost->posts as $post) : setup_postdata($post);
										get_template_part('template-parts/blog-list-item', null, array(
                                            'id' => $post->ID,
											'image-load-type' => 'src'
										));

                                    endforeach;
                                    ?>
                                </div>
                            </div>
                        <?php endif; wp_reset_query(); ?>
                    </section>
                </div>
            </div>
        </div>
    </section>
</section>


<?php
    // Section - Contacts
    get_template_part( 'template-parts/section-contacts', null, array( 
        'section-number' => '02',
        'section-subtitle' => 'Запишитесь на бесплатную консультацию, проведем экскурсию на наши строящиеся объекты, вы своими глазами оцените наш подход — сделать выбор станет проще',
    ));
?>

<?php
    // Section - Map
    get_template_part( 'template-parts/section-map' );
?>

<?php
    endwhile; endif;
    get_footer();
?>
