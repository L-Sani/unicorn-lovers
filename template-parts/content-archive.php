<div class="container">
    <div class="post mb-5">
        <div class="media">
            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
            <div class="media-body">
                <h3 class="title mb-1"><a class="more-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="meta mb-1">
                    <span class="date"><?php the_date(); ?></span>
                </div>
                <div class="intro"><?php the_excerpt(); ?></div>
                <div class="archive-tag mb-1">
                    <?php the_tags('<span class="tag badge badge-pill badge-secondary mr-1">', '</span><span class="tag badge badge-pill badge-secondary mx-1">', '</span>'); ?>
                </div>
                <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
            </div>
        </div>
    </div>
</div>