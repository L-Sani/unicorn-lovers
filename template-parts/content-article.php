<?php
  $title    = get_the_title();
  $date     = get_the_date();
  $content  = get_the_content();
  $posttags = get_the_tags();
?>

<div class="container">
	<header class="page-title text-center py-5">
		<h1 class="heading"><?php echo esc_html( $title );?></h1>
	</header>
	<p><?php echo $content;?></p> <!-- Im not escaping here because it will strip down all the tags -->
	<div class="article-footer mb-3">
		<span class="date"><?php echo esc_html( $date );?></span>
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