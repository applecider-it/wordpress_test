<?php

/**
 * 設定用のコード実行
 */

add_action('after_setup_theme', function () {
	//echo 123;
});

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'tailwind',
		get_template_directory_uri() . '/dist/style.css',
		[],
		filemtime(__DIR__ . '/dist/style.css')
	);
});
