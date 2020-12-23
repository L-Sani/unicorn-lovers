<?php
  $title = get_the_title();
  $content = get_the_content();
?>

<div class="container">
    <header class="page-title theme-bg-light text-center gradient py-5">
		<h1 class="heading"><?php echo esc_html( $title );?></h1>
	</header>
    <?php the_content(); ?>
</div>