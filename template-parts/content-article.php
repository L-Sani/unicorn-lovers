<?php
  $title = get_the_title();
  $date = get_the_date();
  $content = get_the_content();
?>

<div class="container">
    <header class="content-header">
        <div class="page-title text-center gradient py-5">
            <h1 class="heading"><?php echo esc_html( $title );?></h1>
        </div>
        <div class="meta mb-3">
            <span class="date"><?php echo esc_html( $date );?></span>
            <?php the_tags('<span class="tag badge badge-pill badge-secondary mx-2">', '</span><span class="tag badge badge-pill badge-secondary mx-2">', '</span>'); ?>
        </div>
    </header>
    <p><?php echo $content;?></p>
</div>