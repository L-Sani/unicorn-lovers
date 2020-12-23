<?php 
get_header(); 
global $wp_query;
?>

<article class="content px-3 py-5 p-md-5">
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('template-parts/content', 'archive'); ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php
	if (  $wp_query->max_num_pages > 1 )
		echo '<button class="btn btn-primary btn-lg unicorn_loadmore">Load More Posts</button>';
	?>
</article>

<?php get_footer(); ?>