    <?php get_header(); ?>
    <header class="page-title text-center py-5">
		  <h1 class="heading text-uppercase"><?php echo str_replace(' | ', '<br/>', get_the_title()); ?></h1>
    </header>
    
    <section>
      <div class="container">
        <div class="row align-items-center py-5">
          <div class="col-lg-6">
            <div class="text-center">
              <img class="img-fluid" src="<?php echo get_template_directory_uri()."/assets/img/img-unicorn7.png"?>" alt="unicorn7">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4"><strong><?php echo the_field('top_text')?></strong></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center py-5">
          <div class="col-lg-6 order-lg-2">
            <div class="text-center">
              <img class="img-fluid" src="<?php echo get_template_directory_uri()."/assets/img/img-unicorn2.png"?>" alt="unicorn2">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="section-heading display-4"><strong><?php echo the_field('bottom_text')?></strong></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
              <a role="button" class="btn btn-primary btn-lg btn-block" href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">You found and unicorn? Contact us now!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
