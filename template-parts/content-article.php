<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date"><?php the_date(); ?></span>
            <?php the_tags('<span class="tag badge badge-pill badge-secondary mx-2">', '</span><span class="tag badge badge-pill badge-secondary mx-2">', '</span>'); ?>
        </div>
    </header>
    <?php the_content(); ?>
</div>