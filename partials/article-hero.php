<?php
  $bg       = !class_exists('ACF') ? 'image' : get_field('hero_image');
  $heading  = !class_exists('ACF') ? 'heading' : get_field('hero_heading');
  $tagline  = !class_exists('ACF') ? 'tagline' : get_field('hero_tagline');
  error_log(print_r($heading, TRUE));
?>

<header class="hero d-flex flex-column justify-content-center" style="background-image:url('<?php echo $bg;?>');">
    <div class="hero-overlay"></div>
    <div class="hero-text text-center">
        <h1 class="page-title"><?php echo $heading;?></h1>
        <p><?php echo $tagline;?></p>
    </div>
</header>