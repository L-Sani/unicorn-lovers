<?php 
$title = get_the_title();
$date = get_the_date();
$excerpt = get_the_excerpt();
$related = new WP_Query(
      array(
	 'category__in'   => wp_get_post_categories( $post->ID ),
	 'posts_per_page' => 1,
	 'post__not_in'   => array( $post->ID )
      )
   );
?>
<section>
    <div class="related-post-title text-center mb-5">
        <h4> More magic</h4>
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
                            <img class="img-fluid" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <span class="date"><?php echo esc_html( $date );?></span>
                                <h5 class="card-title"><a class="more-link" href="<?php the_permalink(); ?>"><?php echo esc_html( $title );?></a></h5>
                                <p class="card-text"><?php echo esc_html( $excerpt );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php the_tags('<span class="tag badge badge-pill badge-secondary mr-1">', '</span><span class="tag badge badge-pill badge-secondary mx-1">', '</span>'); ?>
                    </div>
                </div>
            </div>  
        <?php }
            wp_reset_postdata();
        }?>                
    </div>                                        
</section>