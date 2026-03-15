<?php

/**
 * トップページ
 */

$img = get_template_directory_uri() . '/assets/image/sample.svg';

?>
<?php get_header(); ?>

<div class="mt-5">
	<?php include(__DIR__ . '/templates/front-page/cards.php'); ?>

	<div class="my-10">
		<?php (fn($list) => include(__DIR__ . '/templates/common/slide-show.php'))([$img, $img, $img,]); ?>
	</div>
	<div class="my-10">
		<?php (fn($list) => include(__DIR__ . '/templates/common/slide-show.php'))([$img, $img, $img,]); ?>
	</div>
</div>

<?php get_footer(); ?>