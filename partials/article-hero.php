<?php
$bg       = !class_exists('ACF') ? 'image' : get_field('hero_image');
$heading  = !class_exists('ACF') ? 'heading' : get_field('hero_heading');
$tagline  = !class_exists('ACF') ? 'tagline' : get_field('hero_tagline');
?>

<header class="hero d-flex flex-column justify-content-center" style="background-image:url('<?php echo esc_url($bg);?>');">
	<div class="hero-overlay"></div>
	<div class="hero-text text-center">
		<h1 class="page-title"><?php echo esc_html($heading);?></h1>
		<p><?php echo esc_html($tagline);?></p>
	</div>
</header>