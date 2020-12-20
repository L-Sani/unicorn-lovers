<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Unicorn Lovers">
	<?php wp_head();?>
</head> 

<body>
    <header class="header">	    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand ml-2 ml-md-5" href="/">
                    <img src="<?php echo get_template_directory_uri()."/assets/img/brand/logo.svg"?>" width="50" height="50" alt="">
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>'
                            )
                        );
                    ?>             
                </div>
            </div>
        </nav>
    </header>

    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>