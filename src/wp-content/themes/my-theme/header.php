<?php

/**
 * ヘッダー
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php echo wp_get_document_title(); ?></title>

	<?php
	if (is_singular()) {
		wp_enqueue_script('comment-reply');
	}
	?>

	<?php wp_head(); ?>
</head>

<body class="bg-gray-200">
	<div id="page" class="container mx-auto bg-white">

		<div id="header" role="banner" class="p-5 bg-gray-100">
			<div id="headerimg">
				<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
				<div class="description"><?php bloginfo('description'); ?></div>
			</div>

			<nav>
				<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
			</nav>

		</div>

		<div class="p-10">