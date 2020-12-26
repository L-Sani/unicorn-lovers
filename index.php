<?php 
get_header(); 
global $wp_query;
?>

<article class="content px-3 py-5 p-md-5">
	<header class="page-title text-center gradient py-5">
		<h1 class="heading"><?php echo esc_html( 'Latest corns' );?></h1>
	</header>
	<div class="row">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('template-parts/content', 'archive'); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	
	<?php if (  $wp_query->max_num_pages > 1 ) { ?>
		<button class="btn btn-primary btn-lg btn-block unicorn_loadmore mt-5">
			<?php echo esc_html( 'Load More Posts' );?>
		</button>
	<?php } ?>
</article>

<?php get_footer(); ?>