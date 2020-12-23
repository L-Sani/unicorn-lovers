<?php
  $title = get_the_title();
  $date = get_the_date();
  $excerpt = get_the_excerpt();
?>

<div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
    <div class="card mb-4" style="width: 18rem;">
        <img class="card-img-top" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
        <div class="card-body">
            <span class="date"><?php echo esc_html( $date );?></span>
            <h5 class="card-title"><a class="more-link" href="<?php the_permalink(); ?>"><?php echo esc_html( $title );?></a></h5>
            <p class="card-text"><?php echo esc_html( $excerpt );?></p>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more &rarr;</a>
        </div>
        <div class="card-footer">
            <?php the_tags('<span class="tag badge badge-pill badge-secondary mr-1">', '</span><span class="tag badge badge-pill badge-secondary mx-1">', '</span>'); ?>
        </div>
    </div>
</div>