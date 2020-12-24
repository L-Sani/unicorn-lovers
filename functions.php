<?php

//Register Custom Gutenberg Categories
function unicorn_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'custom-blocks',
				'title' => __( 'Custom Blocks', 'custom-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'unicorn_category', 10, 2);

//Register Custom Hero Block
function unicorn_register_blocks() {
	if( ! function_exists('acf_register_block') )
		return;
	acf_register_block( array(
		'name'			=> 'hero',
		'title'			=> __( 'Hero', 'heroblock' ),
		'render_template'	=> 'partials/article-hero.php',
		'category'		=> 'custom-blocks',
		'icon'			=> 'dashicons-id',
		'mode'			=> 'edit',
		'keywords'		=> array( 'hero', 'header' )
	));
}
add_action('acf/init', 'unicorn_register_blocks' );

//function that adds dynamic title tag and featured image support
function unicorn_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'unicorn_theme_support' );

//function that adds custom menu setup
function unicorn_menus(){
    $menu_setup = array(
        'primary'   => "Desktop primary Top Menu",
        'footer'    => "Footer Menu Items"
    );

    register_nav_menus($menu_setup);
}
add_action( 'init', 'unicorn_menus' );

//function to registers styling pages
function unicorn_register_styles(){
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'unicorn-style', get_template_directory_uri() . '/assets/css/unicorn.css', array('unicorn-bootstrap'), $version, 'all');
    wp_enqueue_style( 'unicorn-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), '4.5.3', 'all');
    wp_enqueue_style( 'unicorn-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'unicorn_register_styles' );

//function to registers javascript files
function unicorn_register_scripts(){
    global $wp_query;

    wp_enqueue_script( 'unicorn-jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5.1', true);
    wp_enqueue_script( 'unicorn-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.16.1', true);
    wp_enqueue_script( 'unicorn-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", array(), '4.5.3', true);
 
	// register our main script 
	wp_register_script( 'unicorn-loadmore', get_template_directory_uri() . '/assets/js/loadMore.js', array('jquery') );
 
	// pass parameters to loadMore.js script wp_localize_script()
	wp_localize_script( 'unicorn-loadmore', 'unicorn_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ),
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'unicorn-loadmore' );
}
add_action( 'wp_enqueue_scripts', 'unicorn_register_scripts' );

//function that handles the ajax call
function unicorn_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
 
    query_posts( $args );?>
    
    <div class="row">
        <?php
        if( have_posts() ) :
            while( have_posts() ): the_post();
                get_template_part('template-parts/content', 'archive');
            endwhile;
        endif;
        ?>
    </div>
    
	<?php die;
}
add_action('wp_ajax_loadmore', 'unicorn_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'unicorn_loadmore_ajax_handler'); 

?>