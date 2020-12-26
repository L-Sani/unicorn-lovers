<?php 
$related = new WP_Query(
      array(
				'category__in'   => wp_get_post_categories( $post->ID ),
				'posts_per_page' => 1,
				'post__not_in'   => array( $post->ID )
      )
   );
$date = get_the_date();
$excerpt = get_the_excerpt();
$thumbnail = get_the_post_thumbnail_url( null,'thumbnail');
$posttags = get_the_tags();   
?>
<section>
    <div class="related-post-title text-center mb-5">
        <h4><?php echo esc_html( 'More magic' );?></h4>
    </div>
    <div class="related-post-content d-flex justify-content-center" id="related-post">
			<?php   
			if( $related->have_posts() ) { 
				while( $related->have_posts() ) {  
						$related->the_post();
			?>
					<div class="col-12 col-md-6">     
						<div class="card">
							<div class="row no-gutters">
								<div class="col-auto">
										<img class="img-fluid" src="<?php echo $thumbnail ?>" alt="image">
								</div>
								<div class="col">
									<div class="card-body">
										<span class="date"><?php echo esc_html( $date );?></span>
										<h5 class="card-title"><a class="more-link" href="<?php esc_url( the_permalink() ); ?>"><?php echo esc_html( get_the_title() ) ;?></a></h5>
										<p class="card-text"><?php echo esc_html( $excerpt );?></p>
									</div>
								</div>
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
			<?php }
					wp_reset_postdata();
			}?>                
    </div>                                        
</section>