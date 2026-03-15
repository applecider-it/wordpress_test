<?php

/**
 * 設定用のコード実行
 */

add_theme_support('menus'); 
register_nav_menus(array(
    'main-menu' => 'Main Menu',
));

add_action('after_setup_theme', function () {
	//echo 123;
});

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'tailwind',
		get_template_directory_uri() . '/dist/css/app.css',
		[],
		filemtime(__DIR__ . '/dist/css/app.css')
	);
});
