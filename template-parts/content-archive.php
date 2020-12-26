<?php
$thumbnail = get_the_post_thumbnail_url( null,'thumbnail');
$title = get_the_title();
$date = get_the_date();
$excerpt = get_the_excerpt();
$link = get_permalink();
$posttags = get_the_tags();
?>

<div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
	<div class="card mb-4" style="width: 18rem;">
		<img class="card-img-top" src="<?php echo $thumbnail ?>" alt="image">
		<div class="card-body">
			<span class="date"><?php echo esc_html( $date );?></span>
			<h5 class="card-title"><a class="more-link" href="<?php echo esc_url($link); ?>"><?php echo esc_html( $title );?></a></h5>
			<p class="card-text"><?php echo esc_html( $excerpt );?></p>
			<a class="btn btn-primary" href="<?php echo esc_url($link); ?>"><?php echo esc_html( 'Read more' );?> &rarr;</a>
		</div>
		<div class="card-footer">
			<?php if ( $posttags ) { ?>
				<span>
					<?php foreach($posttags as $tag) { ?>
						<a class="tag badge badge-pill badge-secondary mx-1" href="<?php echo esc_url(home_url());?>/tag/<?php echo esc_html($tag->slug);?>">
								<?php echo esc_html($tag->name); ?>
						</a>  
					<?php } ?>
				</span>
			<?php } ?>
		</div>
  </div>
</div>