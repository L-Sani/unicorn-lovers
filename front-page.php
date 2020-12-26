<?php 
get_header();
$top_text = !class_exists('ACF') ? 'Mythical being' : get_field('top_text');
$top_image = !class_exists('ACF') ? get_template_directory_uri()."/assets/img/img-unicorn7.png" : get_field('top_image');
$top_paragraph = !class_exists('ACF') ? 'Mythical being paragraph' : get_field('top_paragraph');
$bottom_text = !class_exists('ACF') ? 'Homework' : get_field('bottom_text');
$bottom_image = !class_exists('ACF') ? get_template_directory_uri()."/assets/img/img-unicorn2.png" : get_field('bottom_image');
$bottom_paragraph = !class_exists('ACF') ? 'Homework paragraph' : get_field('bottom_paragraph');
?>
	<header class="page-title text-center py-5">
		<h1 class="heading text-uppercase"><?php echo str_replace(' | ', '<br/>', get_the_title()); ?></h1>
	</header>
	
	<section>
		<div class="container">
			<div class="row align-items-center py-5">
				<div class="col-lg-6">
					<div class="text-center">
						<img class="img-fluid" src="<?php echo esc_url($top_image['url']);?>" alt="unicorn7">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="p-5">
						<h2 class="display-4"><strong><?php echo esc_html( $top_text );?></strong></h2>
						<p><?php echo esc_html( $top_paragraph );?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row align-items-center py-5">
				<div class="col-lg-6 order-lg-2">
					<div class="text-center">
						<img class="img-fluid" src="<?php echo esc_url($bottom_image['url']);?>" alt="unicorn2">
					</div>
				</div>
				<div class="col-lg-6 order-lg-1">
					<div class="p-5">
						<h2 class="section-heading display-4"><strong><?php echo esc_html( $bottom_text );?></strong></h2>
						<p><?php echo esc_html( $bottom_paragraph );?></p>
						<a role="button" class="btn btn-primary btn-lg btn-block" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><?php echo esc_html( 'You found and unicorn? Contact us now!');?></a>
					</div>
				</div>
			</div>
		</div>
	</section>

  <?php get_footer(); ?>