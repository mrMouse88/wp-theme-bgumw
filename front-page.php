<?php get_header();?>

<div class="container bg-main-conteiner">
    <div class="row">

        <div class="col-md-9 p-0">
        
            <div class="row bg-slider-baner ml-0">

                <?php echo do_shortcode("[metaslider id='78']"); ?>

            </div>
            
            <div class="row bg-front-page-menu ml-0">
                <nav class="navbar navbar-expand-md navbar-light w-100 p-md-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3" 
                        aria-controls="bs-example-navbar-collapse-2" aria-expanded="false" aria-label="Toggle navigation">
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
            
            <!--start primo-->
            <div id="bg-primo" class="row ml-0">
                                
                <?php echo do_shortcode("[iframe src='http://156.17.100.83/primo' width='100%' height='100%' scrolling='no']"); ?>

            </div>
            <!-- end primo -->
            
            <div id="bg-tiles-box" class="row">
            
                <div class="bg-tile-outer col-md-4 col-sm-6">
                    
                    <div class="bg-tile">
                        <a href="<?php echo esc_url(get_category_link(get_cat_ID('aktualnosci'))); ?>">
                            <div class="bg-tile-title"><img src="<?php echo get_template_directory_uri() . '/gfx/aktualnosci-min.png' ?>" />Aktualności</div>
                            
                        </a>
                        <div class="bg-tile-content">
                            
                            <ul>
                                <?php
                                global $post;
                                $args = array('category' => 3, 'posts_per_page' => 4);

                                $myposts = get_posts($args);
                                foreach ($myposts as $post) : setup_postdata($post);
                                    ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endforeach;
                                wp_reset_postdata();
                                ?>

                                <li class="more-link"><a href="<?php echo esc_url(get_category_link(get_cat_ID('aktualnosci'))); ?>">więcej</a></li>
                            </ul>
                            
                        </div>
                    </div>
                
                </div>
                 
                <div class="bg-tile-outer col-md-4 col-sm-6">
                    
                    <div class="bg-tile">
                        <div class="bg-tile-title"><img src="<?php echo get_template_directory_uri() . '/gfx/browzine-min.png' ?>" />Browzine</div>
                        
                        <div class="bg-tile-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            <ul>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li class="more-link"><a href="#">więcej</a></li>
                            </ul>
                            
                        </div>

                    </div>
                
                </div>
                
                <div class="bg-tile-outer col-md-4 col-sm-6">
                    
                    <div class="bg-tile">
                        <div class="bg-tile-title"><img src="<?php echo get_template_directory_uri() . '/gfx/warsztaty-min.png' ?>" />Warsztaty</div>
                       
                        <div class="bg-tile-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            <ul>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li class="more-link"><a href="#">więcej</a></li>
                            </ul>
                            
                        </div>
                    </div>
                
                </div>
                
                <div class="bg-tile-outer col-md-4 col-sm-6">
                    
                    <div class="bg-tile">
                        <div class="bg-tile-title"><img src="<?php echo get_template_directory_uri() . '/gfx/pokoje-min.png' ?>" />Pokoje pracy</div>
                        
                        <div class="bg-tile-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            <ul>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li class="more-link"><a href="#">więcej</a></li>
                            </ul>
                            
                        </div>
                    </div>
                
                </div>
                
                <div class="bg-tile-outer col-md-4 col-sm-6">
                    
                    <div class="bg-tile">
                        <a href="<?php echo esc_url(get_category_link(12)); ?>">
                        <div class="bg-tile-title"><img src="<?php echo get_template_directory_uri() . '/gfx/zbiory-min.png' ?>" />Zbiory Specjalne</div>
                        
                        </a>
                        <div class="bg-tile-content">
                           <ul>
                                <?php
                                global $post;
                                $args = array('category' => 12, 'posts_per_page' => 4);

                                $myposts = get_posts($args);
                                foreach ($myposts as $post) : setup_postdata($post);
                                    ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endforeach;
                                wp_reset_postdata();
                                ?>

                                <li class="more-link"><a href="<?php echo esc_url(get_category_link(12)); ?>">więcej</a></li>
                            </ul>
                            
                        </div>
                    </div>
                
                </div>
                
                <div class="bg-tile-outer col-md-4 col-sm-6">
                    
                    <div class="bg-tile">
                        <div class="bg-tile-title"><img src="<?php echo get_template_directory_uri() . '/gfx/godziny-min.png' ?>" />Godziny otwarcia</div>
                        
                        <div class="bg-tile-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            <ul>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li class="more-link"><a href="#">więcej</a></li>
                            </ul>
                            
                        </div>
                    </div>
                
                </div>
                
               
            
            </div>
        
        </div>

        <div class="col-md-3 col-sm-12 bg-sidebar p-0">
        
            <div class="bg-sidebar-button">
                <a href="http://www.ppm.edu.pl" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/gfx/ppm.png' ?>" />
                </a>
            </div>
            
            <div class="bg-sidebar-button">
                <a href="<?php echo get_site_url(); ?>/index.php/orcid/">
                    <img src="<?php echo get_template_directory_uri() . '/gfx/ORCID.png' ?>" />
                </a>
            </div>
            
            <div class="bg-sidebar-button">
                <a href="<?php echo esc_url(get_category_link(14)); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/gfx/mendeley.png' ?>" />
                </a>
            </div>
            
            <div id="bg-sidebar-group">
                               
                <?php dynamic_sidebar( 'sidebar-front' ); ?>

            </div>
        
        </div>

    </div>
</div>



<?php get_footer();?>