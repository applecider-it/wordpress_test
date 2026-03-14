<?php

/**
 * ブログ記事
 */
?>
<?php get_header(); ?>

<div>!!!!! single.php ブログ記事など !!!!!</div>

<?php if (have_posts()) : ?>
	<div>!!!!! have_posts !!!!!</div>

	<?php while (have_posts()) : the_post(); ?>
		<div>!!!!! post loop !!!!!</div>

		<h2><?php the_title(); ?></h2>
		<div>
			<?php the_content(); ?>
		</div>

		<div>
			<?php comments_template(); ?>
		</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>