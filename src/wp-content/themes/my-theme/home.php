<?php

/**
 * ブログ一覧
 */
?>
<?php get_header(); ?>

<div>!!!!! home.php ブログ一覧 !!!!!</div>

<?php if (have_posts()) : ?>
	<div>!!!!! have_posts !!!!!</div>
	<?php while (have_posts()) : the_post(); ?>
		<div>!!!!! post loop !!!!!</div>

		<div class="border-2 border-gray-400 rounded-2xl p-7 my-5">
			<a href="<?php the_permalink(); ?>" class="text-2xl">
				<?php the_title(); ?>
			</a>
			<div>
				<?php the_content(); ?>
			</div>

		</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>