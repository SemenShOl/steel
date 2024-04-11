<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package default-theme
 */

$favicon = fw_get_db_settings_option('ul_general_favicon');
$opengraph_title = fw_get_db_settings_option('ul_general_opengraph_title');
$opengraph_description = fw_get_db_settings_option('ul_general_opengraph_description');
$opengraph_image = fw_get_db_settings_option('ul_general_opengraph_image');
$opengraph_image_width = fw_get_db_settings_option('ul_general_opengraph_image_width');
$opengraph_image_height = fw_get_db_settings_option('ul_general_opengraph_image_height');

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">


	<?php
		// Загрузка данных каталога - Подкатегории или один товар 
		if (is_404() && strpos(explode('?', $_SERVER['REQUEST_URI'])[0], '/catalog/') !== false) {
			$pageSlug = preg_replace('/\/metall/', '', explode('?', $_SERVER['REQUEST_URI'])[0]);  
			// $pageSlug = $_SERVER['REQUEST_URI'];  


			$GLOBALS['pageSlug'] = $pageSlug; 
			$GLOBALS['pageData'] = getCatalogData($pageSlug); 

			// Замена заголовка на кастомных страницах каталога
			if ($GLOBALS['pageData']['selectData'] != null) {
				remove_action('wp_head', '_wp_render_title_tag', 1);
				add_action('wp_head', (function($title){
					$sep = '&#8212;';
					echo '<title>' . $title . ' ' . $sep . ' ' . get_bloginfo('name') . '</title>';
				})($GLOBALS['pageData']['selectData']['name']), 1);
			}
		} else {
			$GLOBALS['pageData'] = getCatalogData();
		}

		// Загрузка данных каталога - Каталог
		// if (is_post_type_archive('catalog') == true) {
		// 	$GLOBALS['pageData'] = getCatalogData(); 
		// }

		 
	?>
	
	<!-- Favicon -->
	<?php if ($favicon != '') : ?>
		<link rel="icon" type="image/png" href="<?php esc_attr_e($favicon['url']); ?>" />
	<?php else : ?>
		<link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.png" />
	<?php endif; ?>

	<!-- Open Graph -->
    <?php if ($opengraph_title != '') : ?>
	    <meta property="og:title" content="<?php esc_attr_e($opengraph_title); ?>" />
	    <?php if ($opengraph_description != '') : ?>
	    	<meta property="og:description" content="<?php esc_attr_e($opengraph_description); ?>" />
	    <?php endif; ?>
	    <meta property="og:type" content="website" />
	    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
	    <?php if ($opengraph_image != '') : ?>
		    <meta property="og:image" content="<?php esc_attr_e($opengraph_image['url']); ?>" />
		    <?php if ($opengraph_image_width != '') : ?>
		   		<meta property="og:image:width" content="<?php esc_attr_e($opengraph_image_width); ?>" />
		    <?php endif; ?>
		    <?php if ($opengraph_image_height != '') : ?>
				<meta property="og:image:height" content="<?php esc_attr_e($opengraph_image_height); ?>" />
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>

    <?php wp_head(); ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PHCTTVC');</script>
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHCTTVC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

    <section class="l-main-wrapper">
	    <section class="l-main">
	    	<?php
	    		// Header template
				get_template_part( 'template-parts/header' );
	    	?>
