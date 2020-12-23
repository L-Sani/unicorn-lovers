</div>
<footer class="footer">	   
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand ml-2 ml-md-5" href="#">
                <img src="<?php echo get_template_directory_uri()."/assets/img/brand/logo.svg"?>" width="50" height="50" alt="">
            </a>
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'footer',
                        'container' => '',
                        'theme_location' => 'footer',
                        'items_wrap' => '<ul id="" class="navbar-nav mx-5 mx-md-0">%3$s</ul>'
                    )
                );
            ?>   
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="#">
                    <img src="<?php echo get_template_directory_uri()."/assets/img/icons/ic-facebook.svg"?>" width="20" height="20" alt="">
                </a>
                <a class="nav-link" href="#">
                    <img src="<?php echo get_template_directory_uri()."/assets/img/icons/ic-instagram.svg"?>" width="20" height="20" alt="">
                </a>
                <a class="nav-link" href="#">
                    <img src="<?php echo get_template_directory_uri()."/assets/img/icons/ic-twitter.svg"?>" width="20" height="20" alt="">
                </a>
            </div>
            <span class="navbar-text mr-2 mr-md-5">
                2020. All love and happines
            </span>
        </div>
    </nav>	   
</footer>
    

<?php wp_footer(); ?>

</body>
</html>