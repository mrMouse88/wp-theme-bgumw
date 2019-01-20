<?php get_header();?>

<div class="container bg-main-conteiner">
    <div class="row">

        <div class="col-md-9 p-0">
        
            <div class="row bg-slider-baner ml-0">

                <?php echo do_shortcode("[metaslider id='78']"); ?>

            </div>
            
            <div class="row bg-front-page-menu ml-0">
                <nav class="navbar navbar-expand-md navbar-light w-100 p-md-0">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3" aria-controls="bs-example-navbar-collapse-2" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <?php
                                wp_nav_menu(
                                        array(
                                            'theme_location' => 'front-page-menu',
                                            'container' => 'div',
                                            'container_class' => 'collapse navbar-collapse',
                                            'container_id' => 'bs-example-navbar-collapse-3',
                                            'menu_class' => 'nav navbar-nav w-100',
                                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker' => new WP_Bootstrap_Navwalker(),
                                        )
                                )
                                ?>

                            </nav>
            </div>
            
            <div id="bg-primo" class="row ml-0">
                
                <!--początek primo-->
                <?php echo do_shortcode("[iframe src='http://156.17.100.83/primo' width='100%' height='100%' scrolling='no']"); ?>
	



   
                            	<!-- koniec primo -->
                
            </div>
            
            
        
        </div>

        <div class="col-md-3 bg-sidebar p-0">
        
            <div class="bg-sidebar-button">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . '/gfx/blank.png' ?>" />
                </a>
            </div>
            
            <div class="bg-sidebar-button">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . '/gfx/id.png' ?>" />
                </a>
            </div>
            
            <div class="bg-sidebar-button">
                <a href="http://bg.umed.wroc.pl/mendeley" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/gfx/mendeley.png' ?>" />
                </a>
            </div>
            
            <div class="bg-sidebar-button">
                <a href="http://opac.bg.umed.wroc.pl" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/gfx/opac.png' ?>" />
                </a>
            </div>
            
            <div class="bg-sidebar-button">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . '/gfx/wykaz-podrecznikow.png' ?>" />
                </a>
            </div>
        
        </div>

    </div>
</div>



<?php get_footer();?>