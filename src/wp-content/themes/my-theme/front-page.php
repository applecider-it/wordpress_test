<?php

/**
 * トップページ
 */
?>
<?php get_header(); ?>

<div>!!!!! front-page.php !!!!!</div>

<?php if (have_posts()) : ?>
	<div>!!!!! have_posts !!!!!</div>
	<?php while (have_posts()) : the_post(); ?>
		<div>!!!!! post loop !!!!!</div>

		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
		<div>
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>